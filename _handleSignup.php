<?php
echo '
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AAYE --> Sign-Up</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv = "refresh" content = "3; url = login.php" />
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

<?php include '_navbar.php' ?>

<?php 
if($_SERVER['REQUEST_METHOD']=="POST")
{
  include '_dbconnect.php';
  $username=$_POST['username'];
  $phone=$_POST['phone'];
  $dob=$_POST['dob'];
  $password=$_POST['password'];
  $c_password=$_POST['c_password'];
  $user_gender=$_POST['user_gender'];
  $user_age=$_POST['user_age'];
  $user_address=$_POST['user_address'];
  $user_area=$_POST['user_area'];
  
  $user_photo_name=$_FILES['user_photo_name']['name'];
  $image_current_location=$_FILES['user_photo_name']['tmp_name'];
  $image_destination_location="client_uploads/".$user_photo_name;
  
  if(strlen($username)<3 || strlen($username)>25 || !preg_match('/^[a-zA-Z]*$/',$username))
  {
	  header("location:signup.php?message=<div class='alert alert-danger'>The name must contain characters between 3 and 25.</div>");
  }
  elseif(strlen($user_age)>3 || !preg_match('/^[0-9]*$/',$user_age))
  {
	  header("location:signup.php?message=<div class='alert alert-danger'>Please enter the valid age.</div>");
  }
  elseif(strlen($user_address)<3)
  {
	  header("location:signup.php?message=<div class='alert alert-danger'>Please enter the valid address.</div>");
  }
  elseif(strlen($password)<6)
  {
	  header("location:signup.php?message=<div class='alert alert-danger'>Password must be greater than 6.</div>");
  }
  else
  {
    $sql="SELECT * FROM `clients` WHERE `username`='$username'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    if($row==0)
    {
      if($password==$c_password)
      {
           $hash=password_hash($password,PASSWORD_DEFAULT);
           $sql2="INSERT INTO `clients` (`username`, `dob`, `phone`, `password`, `gender`, `age`, `address`, `area`, `user_photo_name`, `timestamp`) VALUES ('$username', '$dob', '$phone', '$hash', '$user_gender' ,'$user_age', '$user_address', '$user_area', '$user_photo_name', current_timestamp())";
           $result2=mysqli_query($conn,$sql2);  
           if($result2)
            {
              move_uploaded_file($image_current_location,$image_destination_location);
              echo '
			  <div class="jumbotron" style="background-color:#f3f6f7">
			  <div class="container text-center pt-0 mt-0"> 
			  <div class="jumbotron" style="margin:100px">
                  <h1 class="display-4">Signed Up!! Sucessfully</h1>
                  <p class="lead">We Team of AAYE welcome you to the best online appointment portal.</p>
                  <hr class="my-4">
                  <p>Have a Nice Day.</p>
                  <h5 class="text-dark"><strong><em>Redirecting to you login page in 3 seconds.......</em></strong></h5> 
              </div>
			  </div>
			  </div>
              <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb">
              <div class="container">
          ';
            }
          else
           {
             echo '
		     <div class="jumbotron" style="background-color:#f3f6f7">
		     <div class="container text-center pt-0 mt-0">
             <div class="jumbotron" style="margin:100px">
             <h1 class="display-4">Oops!! Sign Up Failed</h1>
             <p class="lead">It seems that there is an internal issue for this error.We Suggest you to try again.Thank You</p>
             <hr class="my-4">
             <p>Have a Nice Day.</p>
              <p class="lead">
                 <a class="btn btn-secondary btn-lg" href="signup.php" role="button">Try Again</a>
             </p>
         </div>
	     </div>
	     </div>';
           }
      }
      else
      {
          echo '
		  <div class="jumbotron" style="background-color:#f3f6f7">
		  <div class="container text-center pt-0 mt-0">
          <div class="jumbotron" style="margin:100px">
          <h1 class="display-4">Password not matched !!</h1>
          <p class="lead">Your password and confirm password do not match.Please try Again.</p>
          <hr class="my-4">
          <p>Have a Nice Day.</p>
           <p class="lead">
              <a class="btn btn-secondary btn-lg" href="signup.php" role="button">Try Again</a>
          </p>
        </div>
	    </div>
	    </div>';
      }
    }
    else
    {
          echo '
		  <div class="jumbotron" style="background-color:#f3f6f7">
		  <div class="container text-center pt-0 mt-0">
          <div class="jumbotron" style="margin:100px">
          <h1 class="display-4">User Already Exist.</h1>
          <p class="lead">The phone number you provided is already in use by someone else.Please try again with different phone number.</p>
          <hr class="my-4">
          <p>Have a Nice Day.</p>
           <p class="lead">
              <a class="btn btn-secodary btn-lg" href="signup.php" role="button">Try Again</a>
          </p>
        </div>
	    </div>
	    </div>
          ';  
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