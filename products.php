<?php
    include 'includes/common.php';
    if (!isset($_SESSION['email'])) {
        //header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products | Lifestyle Store</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Overlock:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
     integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="badge.css">

    <style>
        body {
            font-family: 'Overlock', cursive;
        }
        .jumbotron p {
            font-size: 19px;
        }
        .jumbotron {
            background-image: url("https://turantcall.com/admin/upload/100image.jpg");
            background-size: cover;
            width: 100%;
            max-width: 100%;
            background-repeat: no-repeat;
            height: auto;
            color: white;
            background-color: rgba(0, 0, 0, 0.7);
            top: 0; 
            left: 0; 
            min-width: 100%;
        }
    </style>
</head>
<body>

    <?php
        include 'includes/header.php';
        include 'checked-if-added.php';
    ?>

    <div class="container-fluid text-center" style="margin-top:75px; margin-bottom:4px">

        <?php
            echo '<h4>';
            echo "Welcome " . $_SESSION['email'] . ". Your ID is: " . $_SESSION['user_id'];
            echo "</h4>";
        ?>
        <div class="jumbotron">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best Cameras, Watches and Shirts for you. No need to hunt around. we have all in one place.</p>
        </div>
        
        <div class="container">
            <!-- First row -->
            <div class="row text-center justify-content-around" style="margin-bottom:22px">
                <div class="col-md-3 col-sm-4">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" style="height: 200px;" src="https://rukminim1.flixcart.com/image/832/832/jpbic280/mobile/n/8/3/asus-zenfone-max-pro-m2-zb630kl-4d001in-original-imafbcbry5syfwf9.jpeg?q=70" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Asus Zenfone Max Pro M2</strong></h5>
                            <p class="card-text text-success">5000 mAh Battery</p>
                            <p class="card-text text-muted">From 12,999</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(1) != 0) { ?>
                                            <button class="btn btn-block btn-danger" disabled>Added to cart</button>
                                        <?php } else { ?>
                                    
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" style="height: 200px;" src="https://rukminim1.flixcart.com/image/832/832/jo37onk0/mobile/z/e/m/samsung-galaxy-a9-sm-a920fzbdins-original-imafamrn3kydhqwe.jpeg?q=70" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Samsung Galaxy A9</strong></h5>
                            <p class="card-text text-success">5000 mAh Battery</p>
                            <p class="card-text text-muted">From 12,999</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(2) != 0) { ?>
                                            <button class="btn btn-block btn-success" disabled>Added to cart</button>
                                        <?php } else { ?>
                                    
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" style="height: 200px;" src="https://rukminim1.flixcart.com/image/832/832/jn0msnk0/mobile/9/p/z/google-pixel-3-na-original-imaf9sxrrrgzhf44.jpeg?q=70" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Google Pixel 3 (White)</strong></h5>
                            <p class="card-text text-success">5.5" FHD+ Display</p>
                            <p class="card-text text-muted">From 71,000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(3) != 0) { ?>
                                            <button class="btn btn-block btn-success" disabled>Added to cart</button>
                                        <?php } else { ?>
                                    
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" style="height: 200px;" src="https://rukminim1.flixcart.com/image/832/832/jn0msnk0/mobile/h/m/h/google-pixel-3-xl-na-original-imaf9sxzxgwq53eh.jpeg?q=70" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Google Pixel 3 XL (Black)</strong></h5>
                            <p class="card-text text-success">4 GB RAM | 128 GB ROM </p>
                            <p class="card-text text-muted">From 92,000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(4) != 0) { ?>
                                            <button class="btn btn-block btn-success" disabled>Added to cart</button>
                                        <?php } else { ?>
                                    
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 visible-xs visible-sm">
                    <div class="card" style="width: 22rem;">
                        <img class="card-img-top" style="height: 200px;" src="https://rukminim1.flixcart.com/image/832/832/jo37onk0/mobile/z/e/m/samsung-galaxy-a9-sm-a920fzbdins-original-imafamrn3kydhqwe.jpeg?q=70" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Samsung Galaxy A9</strong></h5>
                            <p class="card-text text-success">5000 mAh Battery</p>
                            <p class="card-text text-muted">From 12,999</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(4) != 0) { ?>
                                            <button class="btn btn-block btn-success" disabled>Added to cart</button>
                                        <?php } else { ?>
                                    
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 visible-xs visible-sm">
                    <div class="card" style="width: 22rem;">
                        <img class="card-img-top" style="height: 200px;" src="https://rukminim1.flixcart.com/image/832/832/jo37onk0/mobile/z/e/m/samsung-galaxy-a9-sm-a920fzbdins-original-imafamrn3kydhqwe.jpeg?q=70" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Samsung Galaxy A9</strong></h5>
                            <p class="card-text text-success">5000 mAh Battery</p>
                            <p class="card-text text-muted">From 12,999</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(4) != 0) { ?>
                                            <button class="btn btn-block btn-success" disabled>Added to cart</button>
                                        <?php } else { ?>
                                    
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second row -->
            
            <div class="row text-center" style="margin-bottom:22px">
                <div class="col-md-3 col-sm-6">
                    <div class="card" style="width: 22rem;">
                        <img class="card-img-top" style="height: 200px;" src="https://rukminim1.flixcart.com/image/800/960/jpcxrww0/sweatshirt/q/u/k/xl-tnvsweatskulbeard-tripr-original-imafbmaurakbyw3u.jpeg?q=50" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Full Sleeve Printed Men Sweatshirt</strong></h5>
                            <p class="card-text text-success">Loopknit Cotton Raising (Triper)</p>
                            <p class="card-text text-muted">From 543</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(5) != 0) { ?>
                                            <button class="btn btn-block btn-success" disabled>Added to cart</button>
                                        <?php } else { ?>
                                    
                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-3 col-sm-6">
                    <div class="card" style="width: 22rem;">
                        <img class="card-img-top" style="height: 200px;" src="https://rukminim1.flixcart.com/image/800/960/jpbic280/sweatshirt/9/z/g/4xl-tgysweatskulbeard-tripr-original-imafbezg5gh2gbc2.jpeg?q=50" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Full Sleeve Solid Men's Sweatshirt</strong></h5>
                            <p class="card-text text-success">Cotton (Rodid )</p>
                            <p class="card-text text-muted">From 699</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(6) != 0) { ?>
                                            <button class="btn btn-block btn-success" disabled>Added to cart</button>
                                        <?php } else { ?>
                                    
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card" style="width: 22rem;">
                        <img class="card-img-top" style="height: 200px;" src="https://rukminim1.flixcart.com/image/800/960/vest/z/z/a/l-gsvsthd1260gmwht-gritstones-original-imaeryh9bjhhbgrd.jpeg?q=50" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Sleeveless Self Design Men's Shirt</strong></h5>
                            <p class="card-text text-success">Cotton (Gritstones )</p>
                            <p class="card-text text-muted">From 799</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(7) != 0) { ?>
                                            <button class="btn btn-block btn-success" disabled>Added to cart</button>
                                        <?php } else { ?>
                                    
                                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card" style="width: 22rem;">
                        <img class="card-img-top" style="height: 200px;" src="https://rukminim1.flixcart.com/image/800/960/sweatshirt/2/y/u/ss-401n-navy-alan-jones-4xl-original-imaedpdayjcpa6ne.jpeg?q=50" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Full Sleeve Solid Men's Sweatshirt</strong></h5>
                            <p class="card-text text-success">Cotton (Alan Jones)</p>
                            <p class="card-text text-muted">From 599</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(8) != 0) { ?>
                                            <button class="btn btn-block btn-success" disabled>Added to cart</button>
                                        <?php } else { ?>
                                    
                                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third row -->
            <div class="row text-center" style="margin-bottom:22px">
                <div class="col-md-3 col-sm-6">
                    <div class="card" style="width: 22rem;">
                        <img class="card-img-top" style="height: 200px;" src="https://rukminim1.flixcart.com/image/800/960/watch/5/h/y/curren-8152-curren-original-imaecw9g7hqp85nw.jpeg?q=50" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Tees Analog Watch - For Men</strong></h5>
                            <p class="card-text text-success">Casual (Curren)</p>
                            <p class="card-text text-muted">From 299</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(9) != 0) { ?>
                                            <button class="btn btn-block btn-success" disabled>Added to cart</button>
                                        <?php } else { ?>
                                    
                                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-3 col-sm-6">
                    <div class="card" style="width: 22rem;">
                        <img class="card-img-top" style="height: 200px;" src="https://rukminim1.flixcart.com/image/800/960/jiyvvrk0/watch/v/h/q/1149-bl-fogg-original-imaf6n9hctfu26ms.jpeg?q=50" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Bare Analog Watch - For Men</strong></h5>
                            <p class="card-text text-success">Casual (Fogg)</p>
                            <p class="card-text text-muted">From 349</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(10) != 0) { ?>
                                            <button class="btn btn-block btn-success" disabled>Added to cart</button>
                                        <?php } else { ?>
                                    
                                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card" style="width: 22rem;">
                        <img class="card-img-top" style="height: 200px;" src="https://rukminim1.flixcart.com/image/800/960/jp780i80/watch/4/r/j/rsk-1283blk-skmei-original-imafbh5xbx8ffphw.jpeg?q=50" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong> Analog Digital Black Watch Men</strong></h5>
                            <p class="card-text text-success">Sports (Skmei)</p>
                            <p class="card-text text-muted">From 599</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(11) != 0) { ?>
                                            <button class="btn btn-block btn-success" disabled>Added to cart</button>
                                        <?php } else { ?>
                                    
                                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card" style="width: 22rem;">
                        <img class="card-img-top" style="height: 200px;" src="https://rukminim1.flixcart.com/image/800/960/jbzedu80/watch/v/h/f/bq2125-fossil-original-imaff7pjq7ya9bw6.jpeg?q=50" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>FLYNN  Analog Watch Men</strong></h5>
                            <p class="card-text text-success">Casual (Fossil)</p>
                            <p class="card-text text-muted">From 5,349</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(12) != 0) { ?>
                                            <button class="btn btn-block btn-success" disabled>Added to cart</button>
                                        <?php } else { ?>
                                    
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                        </div>
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