<?php
    include 'includes/common.php';
    if (!isset($_SESSION['email'])) {
        header('location: login.php');
    }
    $user_id = $_SESSION['user_id'];
    $item_ids_string = $_GET['itemsid'];

    $query = "UPDATE users_products SET status='Confirmed' WHERE user_id=" . $user_id . " AND product_id 
    IN (" . $item_ids_string . ") and status='Added to cart'";
    mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lifestyle Store | Order Confirmed</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Overlock:400,700" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Overlock', cursive;
            background-color: #fff;
        }
    </style>

</head>
<body>
        
    <?php
        include 'includes/header.php';
    ?>
        <div class="jumbotron text-center" style="margin-top: 40px;">
                <h1 class="display-3">Thank You!</h1>
                <p>Your order is Confirmed. Thank you for shopping with us.<a href="products.php"> click here</a> to purchase any other item.</p>
                <p class="lead"><strong>Please check your email</strong> for further information about your Order.</p>
                <hr>
                <p>
                  Having trouble? <a href="contact.php">Contact us</a>
                </p>
                <p class="lead">
                  <a class="btn btn-primary btn-md" href="index.php" role="button">Continue to homepage</a>
                </p>
        </div>

        <?php
            include 'includes/footer.php';
        ?>  
</body>
</html>