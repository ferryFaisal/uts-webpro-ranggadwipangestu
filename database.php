<?php
// used to connect to the database
$host = "localhost";
$username = "root";
$password = "";
$db_name = "webpro";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//  echo "Connected successfully using Mysqli Procedural";