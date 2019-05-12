<?php
    include 'includes/common.php';
    if (!isset($_SESSION['email'])) {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lifestyle Store | Password Change Successfully</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Overlock:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
     integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

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

        <div class="jumbotron text-center container" style="margin-top:100px">
            <h1 style="color:#43a047">Password Change Successfully!!!</h1>
            <p>Your Password is successfully changed by your request.</p>
            <p class="lead"><strong>Please check your email</strong> for further information about your Account.</p>
            <hr>
            <p>
              Having trouble? <a href="products.php">Contact us</a>
            </p>
            <p class="lead">
                <a class="btn btn-primary btn-md" href="products.php" role="button">Continue Happy Shopping</a>
            </p>
        </div>

    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>