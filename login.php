<?php echo'<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AAYE --> Log In</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">'; ?>
    <?php 
      include '_navbar.php'; 
      echo '
        <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-6 col-lg-5 d-flex">
                        <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/bg_03.jpg); margin-top:100px"></div>
                    </div>
                    <div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
                        <div class="py-md-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
                                    <form action="_handleLogin.php" method="POST">
                                        <div class="form-header">
                                            <h2>Log In</h2>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Phone</span>
                                            <input class="form-control" type="tel" id="login_phone" name="login_phone" placeholder="Enter your Phone number" required>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Password</span>
                                            <input class="form-control" type="password" id="login_password" name="login_password" placeholder="Enter your Password" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Log In" name="login" class="btn btn-secondary mr-5 py-2 px-3">
                                            <span class="form-label">New User?
                                                <a href="signup.php" role="button" class="btn btn-secondary py-2 mx-3">Sign-Up</a>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>';
        ?>
        <?php 
          include '_footer.php';
          echo 
             '  <script src="js/jquery.min.js"></script>
                <script src="js/jquery-migrate-3.0.1.min.js"></script>
                <script src="js/popper.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/jquery.easing.1.3.js"></script>
                <script src="js/jquery.waypoints.min.js"></script>
                <script src="js/jquery.stellar.min.js"></script>
                <script src="js/owl.carousel.min.js"></script>
                <script src="js/jquery.magnific-popup.min.js"></script>
                <script src="js/aos.js"></script>
                <script src="js/jquery.animateNumber.min.js"></script>
                <script src="js/scrollax.min.js"></script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
                <script src="js/google-map.js"></script>
                <script src="js/main.js"></script>
            </body>
        </html>';
        ?>
