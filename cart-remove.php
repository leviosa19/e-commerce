<?php
    include 'includes/common.php';
    $user_id = $_SESSION['user_id'];
    $_SESSION['product_id'] = mysqli_real_escape_string($con, $_GET['id']);
    $pro_id = $_SESSION['product_id'];
    $query = mysqli_query($con, "DELETE FROM users_products WHERE user_id='$user_id' AND product_id='$pro_id'");
    echo $pro_id;
    header('location: cart.php');
?>