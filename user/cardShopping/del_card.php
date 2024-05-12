<?php
    include('../../config.php');
    // write inside get the database 
    $id = $_GET['id'];
    mysqli_query($conn , "DELETE FROM addcard WHERE id = $id");
    echo'
    <script>
        alert("تم حذف المنتج بنجاح")
    </script>
    '; 
    header('location:card.php');
?>