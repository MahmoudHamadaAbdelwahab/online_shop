<?php
    // connection database 
    include('config.php');
    if(isset($_POST['upload'])){
        $name = $_POST['product'];
        $price = $_POST['price'];
        $image = $_FILES['image'];
        $image_location = $_FILES['image']['tmp_name']; // it's image and extension 
        $image_name = $_FILES['image']['name'];
        $image_up = "image/".$image_name; // it's folder upload inside the image
    
        // insert data to database
        $insert = "INSERT INTO prod (name , price , image) VALUES ('$name','$price','$image_up')";
        mysqli_query($conn , $insert);
        // Make sure the files are uploaded to folder image 
        if(move_uploaded_file($image_location , 'image/'.$image_name)){
            echo'
                <script>
                    alert("تم رفع المنتج بنجاح")
                </script>
            ';
            header('location:index.php');
        }else{
            echo'
            <script>
            alert("حدث مشكله لم يتم رفع المنتج")
            </script>
        ';
        }
    }
?>