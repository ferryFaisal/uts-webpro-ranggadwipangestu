<?php
require 'database.php';

$id1 = $_POST['id'];
$pName = $_POST['pname'];
$desc = $_POST['desc'];
$price = $_POST['price'];

$sql1 = "UPDATE products SET
        name = '$pName',
        description = '$desc',
        price = '$price',
        modified = SYSDATE()
        where id = '$id1'";

if (mysqli_query($conn, $sql1)) {
    echo "data berhasil diupdate";

} else {
    echo "gagal memasukkan data: " . mysqli_error($conn);
}
mysqli_close($conn);
header('Location: read_data.php');