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
    </style>
    <title>موقع تسويقي اونلاين</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a id="navbar-brand" href="cardShopping/card.php">العربة</a>
    </nav>
    <center>
        <h3>عرض جميع المنتجات</h3>
    </center>
    <?php
        include('../config.php');
        $query = "SELECT * FROM prod";
        $result = mysqli_query($conn , $query);
        while($row = mysqli_fetch_array($result)){
            echo "
            <center>
                <main>
                    <div class='card' style='width: 18rem;'>
                        <img src='../$row[image]' class='card-img-top'>
                        <div class='card-body'>
                            <h5 class='card-title'>$row[name]</h5>
                            <p class='card-text'>$row[price]</p>
                            <a href='cardShopping/val.php? id=$row[id]' class='btn btn-success'>اضافة للعربة</a>
                        </div>
                    </div>
                </main'
            </center>
            ";
        }
    ?>
</body>
</html>