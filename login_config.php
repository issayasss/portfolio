<?php
// Start a session
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the input values
  $username = $_POST['username_email'];
 
  $password = $_POST['password'];

   // Connect to the database
   $db_host = 'localhost';
   $db_name = 'portfolio_db';
   $db_user = 'root';
   $db_password = '';
   $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);

  // Prepare and execute the query to retrieve the user's information
  $stmt = $conn->prepare('SELECT id, username, password FROM users WHERE username = :username_email OR email = :username_email');
  $stmt->execute(['username_email' => $username]);

  // Get the user's information
  $user = $stmt->fetch();

  // Verify the password
  if ($user && password_verify($password, $user['password'])) {
    // Save the user's information in the session variables
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];

    // Redirect to the dashboard page
    header('Location: dashboard.php');
    exit();
  } else {
    // Invalid credentials
    echo 'Invalid username or password.';
    exit();
  }
}
?>
