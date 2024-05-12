<?php
    // connection database 
    include('config.php');
    if(isset($_POST['update'])){
        $Id = $_POST['id'];
        $name = $_POST['product'];
        $price = $_POST['price'];
        $image = $_FILES['image'];
        $image_location = $_FILES['image']['tmp_name']; // it's image and extension 
        $image_name = $_FILES['image']['name'];
        $image_up = "image/".$image_name; // it's folder upload inside the image
    
        // insert data to database
        // $update = "UPDATE prod SET (name , price , image) VALUES ('$name','$price','$image_up') WHERE id = $Id";
        $update = "UPDATE prod SET name='$name' , price='$price' , image='$image_up' WHERE id=$Id";
        mysqli_query($conn , $update);
        // Make sure the files are uploaded to folder image 
        if(move_uploaded_file($image_location , 'image/'.$image_name)){
            echo'
                <script>
                    alert("تم تحديث المنتج بنجاح")
                </script>
            ';
            header('location:products.php');
        }else{
            echo'
            <script>
            alert("حدث مشكله لم يتم تحديث المنتج")
            </script>
        ';
        }
    }
?>