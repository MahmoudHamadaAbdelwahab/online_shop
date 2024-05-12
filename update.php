<!DOCTYPE html>
<html lang="en">
<head>
    <!-- google font cairo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>موقع تسويقي اونلاين</title>
</head>
<body>
    <?php
        include('config.php');
        $id = $_GET['id'];
        $update = mysqli_query($conn , "SELECT * FROM prod WHERE id = $id");
        $data = mysqli_fetch_array($update);
    ?>
    <center>
        <div class="main">
            <!-- this code special upload image enctype="multipart/form-data" -->
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>تعديل المنتج</h2>
                <!-- not show this input id style="display:none;" -->
                <input type="text"  name="id" value='<?php echo $data['id']?>' style="display:none;">
                <br>
                <input type="text" name="product" value='<?php echo $data['name']?>'>
                <br>
                <input type="text"  name="price" value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name="image" style="display: none;">
                <label for="file">تحديث صوره للمنتج</label>
                <button name="update" type="submit">تعديل المنتج</button>
                <br>
                <a href="products.php">ظهور كل المنتجات</a>
            </form>
        </div>
        <p>Developer By Mahmoud Hamada </p>
    </center>
</body>
</html>