<?php
require "database.php";

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$valid_name = $valid_price = $valid_desc = false;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {

        ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    body {
        height: 100%;
    }

    body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }
    </style>
</head>

<body class='text-left'>
    <main class="form w-1000 m-auto">
        <h1> Register Form with Database</h1>
        <p><span class="error">* required field</span></p>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            Product Name : <input type="text" name="pname" value="<?php echo $row['name']; ?>">
            <br><br>
            <label for="textarea">Description:</label>
            <br>
            <textarea name="desc" id="" cols="40" rows="5"
                value="<?php echo $row['description']; ?>"><?php echo $row['description']; ?></textarea>
            <br><br>

            Price: <input type="number" min="1" step="any" name='price' value="<?php echo $row['price']; ?>">
            <br><br>


            <a href="images/<?php echo $row['photo'] ?>"><img src="images/<?php echo $row['photo'] ?>" alt=""
                    width='250px' ;></a>

            <br><br>
            <input type="submit" name="submit" value="Update">
        </form>

        <?php

    } //END OF WHILE

} //END OF IF

if (isset($_POST['submit'])) {
    include 'edit_data.php';
}
?>

    </main>
</body>

</html>