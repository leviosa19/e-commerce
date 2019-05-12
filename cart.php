<?php
    include 'includes/common.php';
    if(!isset($_SESSION['email'])) {
        header('location: login.php');
    }
    $user_id = $_SESSION['user_id'];
    $query = mysqli_query($con, "SELECT * FROM products INNER JOIN users_products ON 
                            products.id = users_products.product_id WHERE users_products.user_id=$user_id")
                            or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Cart | Lifstyle Store</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Text Font -->
    <link href="https://fonts.googleapis.com/css?family=Overlock:400,700" rel="stylesheet">
    
    <link rel="stylesheet" href="footer.css">
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
    
    <div class="container col-md-8 col-md-offset-2" style="margin-top:100px; margin-bottom:150px">
        <?php
            $sum = 0;
        ?>
            <table class="table table-hover">
                <?php
                    if(mysqli_num_rows($query)) {
                ?>
                        <thead>
                            <tr>
                                <th># ID</th>
                                <th style='width:40%'>Item Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                        <?php
                            while($row = mysqli_fetch_array($query))  {
                                $sum+= $row["price"];
                                $id .= $row["product_id"] . ", ";
                        
                                echo "<tr>";
                                    echo "<th class='row'>#" . $row['product_id'] . "</th>";
                                    echo "<th>" . $row['name'] . "</th>";
                                    echo "<th>Rs." . $row['price'] . "/-</th>";
                                    echo "<th>";
                        ?>
                                    <div class="form-group" name="form">
                                        <div class="col-sm-9 col-xs-10">
                                            <select class="form-control" id="select" name="selectQuantity" onchange="showTotal()">
                                                <option value="1" selected="selected">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                        <?php
                                    echo "</th>";
                                    echo "<th style='width:18%' id='total'>Rs." . $row['price'] . "</th>";
                                    echo "<th><a href='cart-remove.php?id={$row['product_id']}' class=' remove_item_link'>
                                                <span class='fas fa-trash-alt' title='Remove from cart' style='margin-right:4px; color: black;'>
                                                </span></a></th>";
                                            
                                echo "</tr>";
                            }
                                              
                            $id = rtrim($id, ", ");
                            echo "<tr>";
                                echo "<th></th>";
                                echo "<th></th>";
                                echo "<th></th>";
                                echo "<th></th>";
                                echo "<th><a class='btn btn-md' style='background-color:#4169E1;color:#fff;' 
                                    href='success.php?itemsid=" . $id . "'>Check In Now</a></th>";
                                echo "<th></th>";
                                echo "</tr>";
                        echo "</tbody>";
            echo "</table>";

            echo "<h3>Total: " . $sum . "</h3>";
            
            }else {
                if(mysqli_num_rows($query) == 0) { 
        ?>
                    <div class="jumbotron text-center" style="margin-top:50px">
                        <h1 class="text-danger"><span class="glyphicon glyphicon-shopping-cart" style="margin-right:4px"></span>Empty Cart!</h1>
                        <p>Looks like your Cart is Empty!!!<a href="products.php"> click here</a> to add some Awesome item.</p>
                        <hr>
                        <p>
                        Having trouble? <a href="products.php">Contact us</a>
                        </p>
                        <p class="lead">
                        <a class="btn btn-md" style="background-color:#4169E1;color:#fff" href="products.php" role="button">Continue to Happy Shopping 😃</a>
                        </p>
                    </div>
        <?php
                }
            }
            if(mysqli_num_rows($query) != 0) {                
        ?>
                <center>
                </center>
        <?php
            }
        ?>
        
    </div>
    
    <?php
        //include 'includes/footer.php';
    ?>
    
</body>
</html>