<?php
$pName = $desc = $price = "";

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
    html,
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

<body class="text-left">

    <main class="form w-1000 m-auto">
        <h1> Register Form with Database</h1>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
            ENCTYPE="multipart/form-data">

            Product Name : <input type="text" name="pname" value="<?php echo $pName; ?>">
            <br><br>
            <label for="textarea">Description:</label>
            <br>
            <textarea name="desc" id="" cols="40" rows="5" value="<?php echo $desc ?>"></textarea>
            <br><br>

            Price: <input type="number" min="1" step="any" name='price' value="<?php echo $price ?>">
            <br><br>

            Upload Photo : <input type="file" name="file"><br>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
if (isset($_POST['submit'])) {
    $dir_upload = "images/";
    $nama_file = $_FILES['file']['name'];

    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
        $cek = move_uploaded_file($_FILES['file']['tmp_name'], //source
            // tujuan
            $dir_upload . $nama_file);
        if ($cek) {
            include 'upload_data.php';
        } else {
            die("File gagal diupload");
        }
    }

}
?>
    </main>
</body>

</html>