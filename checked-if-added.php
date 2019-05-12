<?php

    function check_if_added_to_cart($item_id) {
        $con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
        $user_id = $_SESSION['user_id'];
        $sql = mysqli_query($con, "SELECT * FROM users_products WHERE product_id='$item_id' AND user_id='$user_id'");
        if (mysqli_num_rows($sql) != 0) {
            return 1;
        } else {
            return 0;
        }
    }

?>