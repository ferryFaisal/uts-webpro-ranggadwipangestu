<?php
require 'database.php';

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    echo "Data deleted successfully";
    header('Location: read_data.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
//test