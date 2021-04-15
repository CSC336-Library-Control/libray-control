<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conns = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
if ($conns->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  ?>
  
