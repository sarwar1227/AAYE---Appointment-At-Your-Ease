<?php echo'<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AAYE --> Register as a Doctor</title>
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
        sup
        {
          font-size: 20px;
          color: red;
        }
        #ins
        {
            font-size: 15px;
        }
        #star
        { 
            font-size: 20px;
            color: red;
        }
        </style>
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">'; ?>
 <?php include '_navbar.php';       
 echo '<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" style="background-image:url(images/bg_05.jpg);">
            <div class="container1">
                <div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
                                <form action="_handleRegisteration.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-header">
                                        <h2>Registration form</h2>
                                        <p class="text-light" id="ins">( Field marked with <span id="star">*</span> are mandatory to fill. )</p>
                                    </div>';?>
                                    <?php
		                                if(isset($_GET["message"]))
                                        {
											$msg=$_GET["message"];
											echo $msg;
										}
										?>
                                    <?php echo'
                                    <div class="form-group">
                                        <span class="form-label">Name<sup class="sup_color">*</sup></span>
                                        <input class="form-control" type="text" id="doctor_name" name="doctor_name" placeholder="Enter Your Name" required>
                                    </div>
                                    <div class="form-group">
                                        <span class="form-label">Age<sup class="sup_color">*</sup></span>
                                        <input class="form-control" type="text" id="doctor_age" name="doctor_age" placeholder="Enter Your Age" required>
                                    </div>
                                    <div class="form-group">
                                        <span class="form-label">Gender<sup class="sup_color">*</sup></span>
                                        <select class="form-control" id="doctor_gender" name="doctor_gender" required>
                                            <option value="" label="&nbsp;" selected hidden></option>
                                            <option>Female</option>
                                            <option>Male</option>
                                            <option>Other</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                    <div class="form-group">
                                        <span class="form-label">Clinic Address<sup class="sup_color">*</sup></span>
                                        <textarea cols="30" rows="7" id="clinic_address" name="clinic_address" class="form-control" placeholder="Clinic Address" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <span class="form-label">Area<sup class="sup_color">*</sup></span>
                                        <select class="form-control" id="clinic_area" name="clinic_area" required>
                                            <option value="" label="&nbsp;" selected hidden></option>
                                            <option>Rampura</option>
                                            <option>Pitampura</option>
                                            <option>Saraswati Vihar</option>
                                            <option>Rohini</option>
                                            <option>Maujpur</option>
                                            <option>Azadpur</option>
                                            <option>Kashmere Gate</option>
                                            <option>Laxmi Nagar</option>
                                            <option>Uttam Nagar</option>
                                            <option>Kirti Nagar</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                    <div class="form-group">
                                        <span class="form-label">Clinic Contact Number 1<sup class="sup_color">*</sup></span>
                                        <input class="form-control" type="text" id="clinic_contact_number1" name="clinic_contact_number1" pattern="[0-9]{10}" placeholder="Enter first Clinic Contact Number" required>
                                    </div>
                                    <div class="form-group">
                                        <span class="form-label">Clinic Contact Number 2</span>
                                        <input class="form-control" type="text" id="clinic_contact_number2" name="clinic_contact_number2" pattern="[0-9]{10}" placeholder="Enter Second Clinic Contact Number">
                                    </div>
                                    <div class="form-group">
                                        <span class="form-label">Experience<sup class="sup_color">*</sup></span>
                                        <select class="form-control" id="doctor_experience" name="doctor_experience" required>
                                            <option value="" label="&nbsp;" selected hidden></option>
                                            <option>less than 1 year</option>
                                            <option>1 Year</option>
                                            <option>2 Years</option>
                                            <option>3 Years</option>
                                            <option>4 Years</option>
                                            <option>5 Years</option>
                                            <option>More than 5 Years</option>
                                            <option>More than 10 Years</option>
                                            <option>More than 15 Years</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                    <div class="form-group">
                                        <span class="form-label">Speciality<sup class="sup_color">*</sup></span>
                                        <select class="form-control" id="doctor_speciality" name="doctor_speciality" required>
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
                                        <span class="form-label">Fee</span>
                                        <input class="form-control" type="text" id="doctor_fee" name="doctor_fee" placeholder="Enter Fee Charges(if any**)">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Opening Time<sup class="sup_color">*</sup></span>
                                                <input class="form-control" id="opening_time" name="opening_time" type="time" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Closing Time<sup class="sup_color">*</sup></span>
                                                <input class="form-control" type="time" id="closing_time" name="closing_time" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Upload Photo</span>        
                                                <input class="form-control" type="file" id="doctor_photo_name" name="doctor_photo_name" accept="images/*">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-secondary mt-3 py-3  px-4">Register</button>
                                </form>
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
    ' 
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
