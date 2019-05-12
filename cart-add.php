<?php
    include 'includes/common.php';
    //$user_id = mysqli_real_escape_string($con, $_POST['add']);
    $user_id = $_SESSION['user_id'];
    $item_id = $_GET['id'];
    $sql = mysqli_query($con, "INSERT INTO users_products(user_id, product_id, status) 
                    VALUES('$user_id', '$item_id', 'Added to cart')");
    header('location: products.php');

?>