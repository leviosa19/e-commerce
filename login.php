<?php
    include 'includes/common.php';
    if (isset($_SESSION['email'])) {
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lifestyle Store | Log In</title>
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
    
    <div class="container" style="margin-bottom:12px; margin-top:75px">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-default" style="">
                        <div class="panel-heading">
                            <h2>Login</h2>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                                        <span class="input-group-addon" id="basic-addon2">@example.com</span>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div> 
                                <button class="btn btn-primary btn-block" type="submit" name="login_btn">Log In</button>
                                <br>                         
                                <?php echo $_GET['error']; ?>
                            </form>
                        </div>   
                        <div class="panel-footer">
                                Don't have an account? <a href="signup.php">Register</a> here.
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <?php
        include 'includes/footer.php';
    ?>

</body>
</html>