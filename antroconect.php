<?php
  $db_host = "antronicdata.caivhbits4nk.us-east-1.rds.amazonaws.com";
  $db_user = "antronic";
  $db_pass = "Antronic2507";
  $db_name = "antronicdata";

  $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
  if ($conn->connect_error) {
    echo "Fallo";
    die("Connection failed: " . $conn->connect_error);
  }
  else{
    echo"1";
  }
?>