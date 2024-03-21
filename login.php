<?php
  $servername = "localhost";
  $username = "root";
  $password = "Jay@14102002";

  $conn = mysqli_connect($servername, $username, $password);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

?>