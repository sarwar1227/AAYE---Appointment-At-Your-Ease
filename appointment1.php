<?php echo
'<!DOCTYPE html>
<html lang="en">
  <head>
        <title>AAYE -- Book Your Appointment With</title>
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
echo '</section>
<section class="ftco-section bg-light" id="blog-section">
 <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-10 heading-section text-center ftco-animate">
            <h2 classapp_area="mb-4">Book Appointment With</h2>
            <p>Make Appointment at ease with your Doctor/Specialist</p>
        </div>
    </div>
<div class="row my-4">';
 ?>
<?php  
      if($_SERVER['REQUEST_METHOD']=="POST")
      {
        include '_dbconnect.php';
        $_SESSION['app_doctor']=$_POST['app_doctor'];
        $_SESSION['app_speciality']=$_POST['app_speciality'];
        $_special=$_POST['app_speciality'];
    
        $sql="SELECT * FROM `doctors` WHERE `doctors`.`speciality`='$_special'";
        $result=mysqli_query($conn,$sql);
        $no_of_rows=mysqli_num_rows($result);
      
        if($no_of_rows==0)
        {
           echo'
           <div class="container text-center pt-0 mt-0"> 
           <div class="jumbotron">
              <h1 class="display-4">Sorry !! No Doctor Available</h1>
                <p class="lead">No doctor is currently registered with us having the speciality you selected.</p>
                  <hr class="my-4">
                    <p>Thanks for visiting.</p>
                    <p class="lead">
                      <a class="btn btn-secondary btn-lg" href="index.php" role="button">Go to Homepage</a>
                    </p>
              </div>
            </div>
           ';
        }
        else
        {    
           while($row=mysqli_fetch_assoc($result))
            {
              echo '
               <div class="col-md-4 my-2">
                 <div class="card w-100 text-white bg-dark" style="width: 18rem;">
                   <h5 class="card-header text-center"><b>'.$row['name'].'</b></h5>
                     <img src="doctor_uploads/'.$row['doctor_photo_name'].'"  class="card-img-top" alt="..." width="500" height="300">
                       <div class="card-body text-center">
                         <p class="card-text lead"><strong>Age : </strong>'.$row['age'].'</p>
                         <p class="card-text lead"><strong>Address : </strong>'.$row['address'].'</p>
                         <p class="card-text lead"><strong>Contact Number : </strong>'.$row['contact1'].'</p>
                         <p class="card-text lead"><strong>Years of Experience : </strong>'.$row['experience'].'</p>
                         <p class="card-text lead"><strong>Timings : </strong>'.$row['opening_time'].' - '.$row['closing_time'].'</p>
                         <p class="card-text lead"><strong>Fees : </strong>'.$row['fee'].'</p>
                         <p class="card-text lead"><strong>Gender : </strong>'.$row['gender'].'</p>    
                         <a href="_hadleAppointment.php?doc_id='.$row['doctor_id'].'" class="btn btn-secondary   py-3 px-4">Book Appointment</a>
                 </div>
             </div>
          </div>';
          }
        }
      }
?>
<?php echo '
  </div>
  </div>
 </section>';
 ?>
<?php
include '_footer.php';
echo'
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script><script src="js/bootstrap.min.js"></script>
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
