<?php 
echo'<!DOCTYPE html>
        <html lang="en">
        <head>
            <title>AAYE -->  Home</title>
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
           <style>
            .ins
            {
               font-size: 13px;
            }
           </style>
       </head>
       <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">';
    ?>
<?php
  include '_navbar.php';
  echo
        '<section class="hero-wrap js-fullheight" style="background-image: url(images/temp_bag.jpg); text-align:center;" data-section="home" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                    <div class="col-md-12 pt-5 ftco-animate">
                        <div class="mt-5">
                            <span class="subheading">Welcome to AAYE
                            </span>
							<br>
                            <span class="subheading">(Appointment At Your Ease)</span>
                            <h1 class="mb-4" style="color:darkslategray	;">We are here for your Care</h1>
                            <h6 class="mb-4" style="color:black;">Make Appointment with your Doctor/Specialist from anywhere at your ease
                               without waiting for your turn in long queues</p>
                            <h6>'; ?>
<?php 
   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
     echo '<a href="appointment.php" class="btn btn-secondary py-3 px-4" style="margin-top:25px; border-radius:60px"><font size="5px">Make an appointment</font></a>';
   else
   echo '<a href="_withoutAppointment.php" class="btn btn-secondary py-3 px-4">Make an appointment</a>';
?>
<?php echo'</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-6 col-lg-5 d-flex">
                        <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);"></div>
                    </div>
                    <div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
                        <div class="py-md-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
                                    <h2 class="mb-4">Break the
                                        <span>Traditional</span>
                                        Queue System</h2>
                                    <p>Break the traditional long queue system with AAYE(Appointment At Your Ease), book your appointment with doctors from anywhere any time.Search for Doctors areawise, on the basis of their speciality or on the basis of their name and make your appointment.Provide us an opportunity to become your helping hand.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light" id="contact-section">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-7 py-5">
                        <div class="py-lg-5">
                            <div class="row justify-content-center pb-5">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <h2 class="mb-3">Contact Us</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                    <div class="media block-6 services d-flex">
                                        <div class="icon justify-content-center align-items-center d-flex">
                                            <span class="flaticon-ambulance"></span>
                                        </div>
                                        <div class="media-body pl-md-4">
                                            <h3 class="heading mb-3">Availability</h3>
                                            <p>We provide easy way to book your appointment.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                    <div class="media block-6 services d-flex">
                                        <div class="icon justify-content-center align-items-center d-flex">
                                            <span class="flaticon-doctor"></span>
                                        </div>
                                        <div class="media-body pl-md-4">
                                            <h3 class="heading mb-3">Qualified Doctors</h3>
                                            <p>We provide a wide range of qualified doctors.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                    <div class="media block-6 services d-flex">
                                        <div class="icon justify-content-center align-items-center d-flex">
                                            <span class="flaticon-stethoscope"></span>
                                        </div>
                                        <div class="media-body pl-md-4">
                                            <h3 class="heading mb-3">Medical Stores</h3>
                                            <p>Want to buy medicine visit our medical stores? We try to fulfill your every medical requirements.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                    <div class="media block-6 services d-flex">
                                        <div class="icon justify-content-center align-items-center d-flex">
                                            <span class="flaticon-24-hours"></span>
                                        </div>
                                        <div class="media-body pl-md-4">
                                            <h3 class="heading mb-3">24 Hours Service</h3>
                                            <p>A platform available for 24X7 to serve you.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex">
                        <div class="appointment-wrap bg-white p-4 p-md-5 d-flex align-items-center">
                            <form action="_handleContactUs.php" class="appointment-form ftco-animate" method="POST">
                                <h3 class="my-2 text-center font-weight-bold">Contact Us</h3>
                                <p class="ins text-center mb-4">( Field marked with * are mandatory to fill. )</p>';
								?>
								<?php
		                            if(isset($_GET["message"]))
									{
										$msg=$_GET["message"];
										echo $msg;
									}
								?>
								<?php
                                echo'<div class="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="query_name" name="query_name" placeholder="Your Name *" required>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="query_email" name="query_email" placeholder="Your E-Mail *" required>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="query_phone" name="query_phone" pattern="[0-9]{10}" placeholder="Your Phone Number *" required>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="form-group">
                                        <div class="input-wrap">
                                            <input type="date" class="form-control appointment_date" id="query_date" name="query_date" placeholder="Date *">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="query_subject" name="query_subject" placeholder="Subject" >
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="form-group">
                                            <textarea cols="30" rows="7" id="query_message" name="query_message" class="form-control"  placeholder="Message *" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-4">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-facts img ftco-counter">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-5 heading-section heading-section-white">
                        <h2 class="mb-4">Over 5,100 patients trust us</h2>
                    </div>
                    <div class="col-md-7">
                        <div class="row pt-4">
                            <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="text">
                                        <strong class="number" data-number="30">0</strong>
                                        <span>Years of Experienced</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="text">
                                        <strong class="number" data-number="4500">0</strong>
                                        <span>Happy Patients</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="text">
                                        <strong class="number" data-number="84">0</strong>
                                        <span>Number of Doctors</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="text">
                                        <strong class="number" data-number="300">0</strong>
                                        <span>Number of Staffs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>';
    ?>
   <?php
     include "_footer.php";                
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