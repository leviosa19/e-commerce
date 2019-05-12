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
    <title>Contact Us | Lifestyle Store</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- Bootstrap jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
            integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Overlock:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <style>
        body {
            font-family: 'Overlock', cursive;
            background-color: #fff;
        }
        p {
            font-size: 18px;
        }
        img {
            float: right; 
            width: 280px; 
            height: 250px; 
            padding: 0px 20px 20px 20px;
        }
        @media (max-width: 992px) {
            .img-responsive {
                position: relative;
                display: cover;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
                text-align: center;
            }
        }
        @media (min-width: 1200px) {
            .addres {
                float: right;
            }
        }
    </style>
</head>
<body>
    <?php
        include 'includes/header.php';
    ?>

    <div class="container" style="margin-top:75px">
        <div>
            <img src="img/about1.jpg" class="img-rounded img-responsive">
            <img src="img/about.jpg" class="img-rounded img-responsive">
            <h2 class="text-uppercase"><strong>Live Support</strong></h2>
            <p class="text-muted">24 hours | 7 days week | 365 days a year Live Technical Support</p>
            <p>Amazon India empowers small and medium-sized businesses to reach millions of customers with a number of programmes that help boost their revenue, reach and productivity. By telling stories from a wide range of perspectives, we tell the larger story of who Amazon is and how Amazon's core business practices contribute to a better India.</p>
                    
        </div>
    </div>
    
    <div class="container" style="margin-bottom:12px;">
        <div class="col-lg-7">
            <h2 class="text-uppercase">Contact Us</h2>
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Name</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="msg">Message</label>
                    <textarea class="form-control" id="msg" rows="5"></textarea>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
            <address class="addres" style="margin-left: 14px;">
            <h2 class="text-uppercase">Company Information</h2>
                <p>Lifestyle Internet Private Limited, </p>
                <p>Vaishnavi Summit, 7th Flour, </p>
                <p>100 Feet Road, 3rd Block,</p>
                <p>West Mumbai - 400 011</p>
                <p>Maharashtra, India</p>
                <p>Telephone: <a href="tel:+91 97000 00000">+91 97000 00000</a></p>
                <p>Follow us on:
                    <a href="www.facebook.com" class="fab fa-facebook-f" style="color:#3C5A99; font-size:24px; margin-left:4px"></a>
                    <a href="www.twitter.com"  class="fab fa-twitter" style="color:#1DA1F2; font-size:24px; margin-left:4px"></a>
                    <a href="www.instagram.com"  class="fab fa-instagram" style="color:#E1306C; font-size:24px; margin-left:4px"></a>
                    <a href="www.web.whatsapp.com"  class="fab fa-whatsapp" style="color:#4AC959; font-size:24px; margin-left:4px"></a>
                </p>
            </address>
    </div>

    <?php
        include 'includes/footer.php';
    ?>

</body>
</html>