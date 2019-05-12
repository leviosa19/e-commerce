<?php
    include 'includes/common.php';
        $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        //$password = md5($password);

        $sql = mysqli_query($con, "SELECT email FROM user WHERE email='$email'");
        $duplicat_entry = mysqli_num_rows($sql);
        if ($duplicat_entry > 0) {
            echo "E-mail ID " . $email . " Already Exists!!!!";
            $num=mysqli_num_rows($sql);
            if ($num === 1) {
                $row=mysqli_fetch_assoc($result);
                $user_id = $row['id'];
                $_SESSION['user_id'] = $user_id;
            }
            header('location: signup.php');
        } else {
            mysqli_query($con, "INSERT INTO ecommerce.users (first_name, phone, email, password) values ('$firstname', '$phone', '$email', '$password')");
            $_SESSION['email'] = $email;
            header('location: products.php');
        }
?>