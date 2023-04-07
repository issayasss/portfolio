<?php
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit();
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body><div class="container">
  <!-- Content here -->

  <h1>Welcome, <?php echo $username; ?>!</h1>
  <p>This is the protected dashboard page.</p>
  <a href="logout.php">Logout</a>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th> 
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
 
	<?php

	include 'config.php';
	$pic=mysqli_query($conn,"SELECT * FROM `contacts`");
	while($row=mysqli_fetch_array($pic)){
		echo "
		<tr>
		
		<td>$row[id]</td>
		<td>$row[name]</td>
		<td>$row[phone]</td>
        <td>$row[email]</td>
        <td>$row[message]</td>
		<td>
	
		 <a href='delete.php?id=$row[id]' class='btn btn-danger'>Delete</a
		 
		</td>
	  </tr>
	  ";
	}
	?>

    
  </tbody>
</table>
</div>
</body>
</html>
