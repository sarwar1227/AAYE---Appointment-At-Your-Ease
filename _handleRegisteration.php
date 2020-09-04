<?php
echo '
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AAYE --> Registeration</title>
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

<?php include '_navbar.php';?>

<?php
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
      include '_dbconnect.php';
      $name=$_POST['doctor_name'];
      $contact_number1=$_POST['clinic_contact_number1'];
      $contact_number2=$_POST['clinic_contact_number2'];
      $SQL="SELECT * FROM `doctors` WHERE `name`='$name' AND `contact1`='$contact_number1' AND `contact2`='$contact_number2'";
      $RESULT=mysqli_query($conn,$SQL);
      $NUMBER_OF_ROWS=mysqli_num_rows($RESULT);
      if($NUMBER_OF_ROWS>0)
      {
        header("location:doctor_registration.php?message=<div class='alert alert-danger'>Doctor with the same details is already registered with us. Try Again!</div>");
      }
      else
      {
        $age=$_POST['doctor_age'];
        $gender=$_POST['doctor_gender'];
        $address=$_POST['clinic_address'];
        $area=$_POST['clinic_area'];
        $experience=$_POST['doctor_experience'];
        $speciality=$_POST['doctor_speciality'];
        $fee=$_POST['doctor_fee'];
        $opening_time=$_POST['opening_time'];
        $closing_time=$_POST['closing_time'];
        $doctor_photo_name=$_FILES['doctor_photo_name']['name'];
        $image_current_location=$_FILES['doctor_photo_name']['tmp_name'];
        $image_destination_location="doctor_uploads/".$doctor_photo_name;
		
		if(strlen($name)<3 || strlen($name)>25 || !preg_match('/^[a-zA-Z]*$/',$name))
        {
			header("location:doctor_registration.php?message=<div class='alert alert-danger'>The Name must contain characters between 3 and 25.</div>");
        }
		elseif(strlen($age)>3 || !preg_match('/^[0-9]*$/',$age))
		{
			header("location:doctor_registration.php?message=<div class='alert alert-danger'>Please enter the valid age.</div>");
		}
		elseif(strlen($address)<3)
		{
			header("location:doctor_registration.php?message=<div class='alert alert-danger'>Please enter the valid address.</div>");
		}
		elseif(!preg_match('/^[0-9]*$/',$fee))
		{
			header("location:doctor_registration.php?message=<div class='alert alert-danger'>Please enter the valid fees.</div>");
		}
        else{
        $sql="INSERT INTO `doctors` (`name`, `age`, `gender`, `address`, `area`, `contact1`, `contact2`, `experience`, `speciality`, `fee`, `opening_time`, `closing_time`, `doctor_photo_name`,`timestamp`) VALUES ('$name', '$age', '$gender', '$address', '$area', '$contact_number1', '$contact_number2', '$experience', '$speciality', '$fee', '$opening_time', '$closing_time', '$doctor_photo_name',current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if($result)
         {
            move_uploaded_file($image_current_location,$image_destination_location);
          
            echo '<div class="jumbotron" style="background-color:#f3f6f7">
                    <div class="container text-center pt-0 mt-0">
                      <div class="jumbotron" style="margin:100px">
		                 <h1 class="display-4">Registration Successfull !!</h1>
                         <hr class="my-4">
                         <p>Welcome to the team of AAYE Doctor.</p>
                         <p class="lead">
                            <a class="btn btn-secondary btn-lg" href="index.php" role="button">Go to homepage</a>
                         </p>
                      </div>
	                </div>
	            </div>';
         }
        else
         {
            echo '<div class="jumbotron" style="background-color:#f3f6f7">
		             <div class="container text-center pt-0 mt-0">
                        <div class="jumbotron" style="margin:100px">
                           <p class="lead">This page is freshly visited. Not refreshed.</p>
		                      <h1 class="display-4">Registration Failed !!</h1>
                               <hr class="my-4">
                               <p>Please Register again.</p>
                               <p class="lead">
                                  <a class="btn btn-success btn-lg" href="doctor_registration.php" role="button">Register</a>
                               </p>
                        </div>
	                 </div>
	               </div>';
       
        }
     }
    }    
  }
?>

<?php
    include '_footer.php';
    echo '
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