<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "james";

// Create connection
$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
?>