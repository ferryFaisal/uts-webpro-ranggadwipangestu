<?php
require "database.php";

$id1 = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$desc = $_POST['desc'];

$sql1 = "UPDATE products SET name='$name',
description='$desc',
price='$price',
photo='$nama_file',
modified = sysdate()
WHERE id ='$id1'";

if (mysqli_query($conn, $sql1)) {
    echo "<br>";
    // echo "New record created successfully";
    header('location: read_data.php');
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

mysqli_close($conn);
//test