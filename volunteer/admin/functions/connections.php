<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "volunteer";

$connections = new mysqli($servername, $username, $password,$dbName);

if ($connections->connect_error) {
  die("Connection failed: " . $connections->connect_error);
}


?>