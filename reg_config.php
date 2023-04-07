<?php
// Start a session
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the input values
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Validate input values
  if (empty($username)) {
    echo 'Username is required.';
    exit();
  }

  if (empty($email)) {
    echo 'Email is required.';
    exit();
  }

  if (empty($password)) {
    echo 'Password is required.';
    exit();
  }

  if ($password !== $confirm_password) {
    echo 'Passwords do not match.';
    exit();
  }

  // Hash the password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Connect to the database
  $db_host = 'localhost';
  $db_name = 'portfolio_db';
  $db_user = 'root';
  $db_password = '';
  $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);

  // Check if the username or email already exists in the database
  $stmt = $conn->prepare('SELECT COUNT(*) FROM users WHERE username = :username OR email = :email');
  $stmt->execute(['username' => $username, 'email' => $email]);
  $count = $stmt->fetchColumn();

  if ($count > 0) {
    echo 'Username or email already exists.';
    exit();
  }

  // Insert the user into the database
  $stmt = $conn->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
  $stmt->execute(['username' => $username, 'email' => $email, 'password' => $hashed_password]);

  // Save the username in the session
  $_SESSION['username'] = $username;

  // Redirect to the dashboard page
  header('Location: dashboard.php');
  exit();
}
?>
