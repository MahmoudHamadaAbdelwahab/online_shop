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
    <title>عربة التسوق</title>
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
            width: 40%;
            margin-top: 50px;
        }
        table{
            box-shadow: 1px 1px 10px silver;
        }
        table thead{
            background-color: #3498DB;
            text-align: center;
        }
        table tbody{
            text-align: center;
        }
        #allPro{
            text-decoration: none;
            font-weight: bold;
            color: red;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a id="navbar-brand" href="card.php">العربة</a>
    </nav>
    <center>
        <h3>منتجاتك المحجوزة</h3>
    </center>
    <?php
        include('../../config.php');
        $result = mysqli_query($conn ,"SELECT * FROM addcard"); 
        while($row = mysqli_fetch_array($result)){
            echo"
            <center>
                <main>
                    <table class='table'>
                        <thead>
                            <tr>
                                <th scope='col'>اسم المنتج</th>
                                <th scope='col'>سعر المنتج</th>
                                <th scope='col'>حذف المنتج</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>$row[name]</td>
                                <td>$row[price]</td>
                                <td>
                                    <a href='del_card.php? id=$row[id]' class='btn btn-danger'>حذف</a>
                                    <a href='#' class='btn btn-success'>شراء</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </main>
            </center>
            ";
        }

    ?>
    <center>
        <a id="allPro" href="../productsPage.php">الرجوع الي صفحة المنتجات</a>
    </center>
</body>
</html>