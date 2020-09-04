<?php
 echo'<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AAYE --> Book Your Appointment</title>
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
<?php include '_navbar.php';        
 echo '<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-6 col-lg-5 d-flex">
                        <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/bg_02.png); margin:120px 0px 60px 0px"></div>
                    </div>
                    <div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
                        <div class="py-md-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
                                    <form action="appointment1.php" method="POST">
                                        <div class="form-header">
                                            <h2>Book Your Appointment</h2>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Doctor</span>
                                            <select class="form-control" id="app_doctor" name="app_doctor">
                                                <option value="" label="&nbsp;" selected hidden></option>
                                                <option>Doctor 1</option>
                                                <option>Doctor 2</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Speciality</span>
                                            <select class="form-control" id="app_speciality" name="app_speciality" required>
                                                <option value="" label="&nbsp;" selected hidden></option>
                                                <option>Dermatologist</option>
                                                <option>E.N.T Specialist</option>
                                                <option>Dentist</option>
                                                <option>Cardiologist</option>
                                                <option>Gynaecologist</option>
                                                <option>Pshycologist</option>
                                                <option>Neurologist</option>
                                                <option>Ophthalmologist</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Book My Appointment" class="btn btn-secondary py-3 px-4">
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
            echo'  
                <script src="js/jquery.min.js"></script>
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