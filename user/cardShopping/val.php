<?php
    include('../../config.php');
    $Id = $_GET['id'];
    $Up = mysqli_query($conn ,"SELECT * FROM prod WHERE id = $Id"); 
    $data = mysqli_fetch_array($Up);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- google font cairo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>تأكيد شراء المنتج</title>
    <style>
        h3{
            font-family:'Cairo', sans-serif;
        }
        .card{
            float: right;
            margin: 15px;
        }
        .card img{
            width: 100%;
            height: 200px;
            padding: 10px;
        }
        main{
            width: 80%;
        }
        #navbar-brand{
            margin-left: 70px;
            text-decoration: none;
            color: white;
        }
        #navbar-prod{
            font-weight: bold;
            text-decoration: none;
            color: red;
        }
        input{
            display: none;
        }
        .main{
            width: 30%;
            box-shadow: 1px 1px 10px silver;
            padding: 20px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
        <a id="navbar-brand" href="cardShopping/card.php">العربة</a>
    </nav>
    <center>
        <div class="main">
            <form action="insert_card.php" method="post">
                <h2>هل فعلا تريد شراء المنتج</h2>
                <input type="text" name="id" value="<?php echo $data['id']?>" style="display:none;">
                <input type="text" name="name" value="<?php echo $data['name']?>">
                <input type="text" name="price" value="<?php echo $data['price']?>">
                <button name="add" type="submit" class="btn btn-warning">تأكيد اضافة المنتج للعربة</button>
                <br>
                <a id="navbar-prod" href="../productsPage.php">صفحة المنتجات</a>
            </form>
        </div>
    </center>
</body>
</html>