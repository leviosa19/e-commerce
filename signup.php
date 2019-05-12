<?php
    include 'includes/common.php';
    /*if(isset($_SESSION('email')) {
        header('location: products.php');
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | Lifestyle Store</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Overlock:400,700" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <style>
        body {
            font-family: 'Overlock', cursive;
        }
    </style>
</head>
<body>

    <?php
        include 'includes/header.php';
    ?>
    
    <div class="container" style="margin-top:50px;margin-bottom:24px">
            <div class="row" style="float:left">
                <div class="col-lg-4 col-lg-offset-4">
                    <h2><i class="fas fa-user-tie" style="margin-right:4px"></i>Create Account</h2> 
                    <hr/>   
                    <form action="signup_script.php" method="post">
                        <div class="form-group">
                            <label for="firstname">Your Name</label>
                            <input type="text" class="form-control" name="firstname" placeholder="Name" required="true">
                        </div> 
                        <div class="form-group">
                            <label for="phone">Mobile Number</label>
                            <div class="input-group">
                                <span class="input-group-addon">India (+91)</span>
                                <input type="tel" class="form-control" name="phone" placeholder="Mobile Number" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email (Required)*</label>
                            <input type="email" class="form-control" name="email" placeholder="E-mail" required="true"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div> 
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" name="password" placeholder="Password" required="true"
                                    pattern=".{6,}">
                            <p class="text-danger">*Required 6 character</p>
                        </div>
                        <p>We will send you a text to verify your phone. Message and Data rates may apply.</p>
                        <input type="submit" value="Sign Up" class="btn btn-primary btn-block">   
                        <hr/>
                        <p>Already have an Account? <a href="login.php">Sign in<i class="fas fa-chevron-right" style="margin-left:4px"></i></a></p>             
                    </form>
                </div>            
            </div>
    </div>

    <?php
        include 'includes/footer.php';
    ?>
    
</body>
</html>