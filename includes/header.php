<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="index.php">
                    <i class="fas fa-cube"></i>
                    <span>Lifestyle Store</span>
                </a>
            </div>
      
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php
                    if (isset($_SESSION['email'])) { ?>
                        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span>
                        Cart</a></li>
                        <li><a href = "setting.php"><span class = "glyphicon glyphicon-wrench"></span>
                        Settings</a></li>
                        <li><a href = "logout.php"><span class = "glyphicon glyphicon-new-window"></span>
                        Logout</a></li>
                        <li><a href="about.php"><span class="fas fa-info-circle"></span>
                        About Us</a></li>
                        <li><a href="contact.php"><span class="fas fa-mobile-alt"></span>
                        Contact Us</a></li>

                <?php
                    } else {
                ?>
                        <li><a href="signup.php"><span class="fas fa-user-plus"></span>
                        Sign Up</a></li>
                        <li><a href="login.php"><span class="fas fa-sign-in-alt"></span>
                        Login</a></li>
                        <li><a href="about.php"><span class="fas fa-info-circle"></span>
                        About Us</a></li>
                        <li><a href="contact.php"><span class="fas fa-mobile-alt"></span>
                        Contact Us</a></li>
                <?php
                    }
                ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
</nav>