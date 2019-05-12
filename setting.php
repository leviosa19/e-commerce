<?php
    include 'includes/common.php';
    if (!isset($_SESSION['email'])) {
        header('location: index.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lifstyle Store | Setting Page</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
     integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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

    <div class="container" style="margin-top:75px; margin-bottom:350px">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <h2><i class="fa fa-key" style='margin-right:4px'></i>Change Password</h2>
                <form method="post" action="settings_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="old-password" placeholder="Old Password" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="New Password" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password1" placeholder="Re-type New Password" required>
                    </div>
                        <button type="submit" class="btn btn-danger remove_item_link"><i class="fa fa-key" style='margin-right:4px'></i>Change Password</button>
                </form>
            <?php
                echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
            ?>
            </div>
        </div>
    </div>

    <?php
        include 'includes/footer.php';
    ?>

</body>
</html>