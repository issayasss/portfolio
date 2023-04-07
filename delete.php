<?php
include 'config.php';
$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM `contacts` WHERE id=$id");
header('location:dashboard.php');


?>