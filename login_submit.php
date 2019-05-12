<?php
    include 'includes/common.php';

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    //$password = MD5($password);
    // Query checks if the email and password are present in the database.
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql)or die($mysqli_error($con));

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['message'] = "You are now Logged in";
        $_SESSION['email'] = $email;
        $num=mysqli_num_rows($result);
        if ($num === 1) {
            $row=mysqli_fetch_assoc($result);
            $user_id = $row['id'];
            $_SESSION['user_id'] = $user_id;
        }
        header("location: products.php");
    }
    else {
        $error = "Please enter correct E-mail id and Password";
        header('location: login.php?error=' . $error);
    }
    
?>
