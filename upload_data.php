<?php
require 'database.php';
$name = $_POST['name'];
$desc = $_POST['desc'];
$price = $_POST['price'];

$sql = "INSERT INTO products (name, description, price, photo,created,modified )
    VALUES ('$name',
    '$desc',
    '$price',
    '$nama_file',
    SYSDATE(),
    SYSDATE()

    )";

if (mysqli_query($conn, $sql)) {
    echo "data berhasil dimasukkan ke database";

} else {
    echo "gagal memasukkan data: " . mysqli_error($conn);
}

mysqli_close($conn);
header('Location: read_data.php');