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
    <center>
        <div class="main">
            <!-- this code special upload image enctype="multipart/form-data" -->
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>موقع تسويقي اونلاين</h2>
                <img src="logo.jpg" alt="logo" width="400px">
                <div>
                    <label for="product">اسم المنج</label>
                    <input type="text" id="product" name="product">
                </div>
                <br>
                <div>
                    <label for="price">سعر المنج</label>
                    <input type="text" id="price" name="price">
                </div>
                <br>
                <input type="file" id="file" name="image" style="display: none;">
                <label for="file">اختيار صوره للمنتج</label>
                <button name="upload">رفع المنتج✔</button>
                <br>
                <a href="products.php">ظهور كل المنتجات</a>
                <br>
                <a href="user/productsPage.php">الصفحة الرئيسة</a>
            </form>
        </div>
        <p>Developer By Mahmoud Hamada </p>
    </center>
</body>
</html>