<?php
echo '
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AAYE --> Contact Us</title>
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
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">';
?>
<?php  include '_navbar.php';  ?>
<?php 
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    include '_dbconnect.php';
    $query_name=$_POST['query_name'];
    $query_email=$_POST['query_email'];
    $query_phone=$_POST['query_phone'];
    $query_date=$_POST['query_date'];
    $query_subject=$_POST['query_subject'];
    $query_message=$_POST['query_message'];
	$to='yoyo.sarwar29@gmail.com';
    $subject=$query_subject;
    $message=$query_message.'\nBy - '.$query_name.'\nContact - '.$query_phone.'\n On - '.$query_date;
    $headers="From: ".$query_email;
	
	if(strlen($query_name)<3 || strlen($query_name)>25 || !preg_match('/^[a-zA-Z]*$/',$query_name))
    {
	  header("location:index.php?message=<div class='alert alert-danger'>The name must contain characters between 3 and 25.</div>");
    }
    else
    {
    $sql="INSERT INTO `queries` (`query_username`, `query_useremail`, `query_userphone`, `query_date`, `query_subject`, `query_message`, `query_time`, `query_resolved`) VALUES ('$query_name', '$query_email', '$query_phone', '$query_date', '$query_subject', '$query_message', current_timestamp(), 'false')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
       if(mail($to,$subject,$message,$headers))
       {
       echo ' <div class="jumbotron" style="background-color:#f3f6f7">
		             <div class="container text-center pt-0 mt-0">
                    <div class="jumbotron" style="margin:100px">
                        <h1 class="display-4">Thank You!</h1>
                        <p class="lead">Your information is successfully submitted. We will contact you shortly.</p>
                        <hr class="my-4">
                        <p>Have a Nice Day.</p>
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
                       <h1 class="display-4">Sorry!!</h1>
                       <p class="lead">Your information is not submitted.Please check your Email id. Try again. </p>
                       <hr class="my-4">
                       <p>Have a Nice Day.</p>
                       <p class="lead">
                         <a class="btn btn-secondary btn-lg" href="index.php" role="button">Try Again</a>
                       </p>
                     </div>
	                </div>
	          </div>';
	   }		   
	}
    else 
      { 
        echo '<div class="jumbotron" style="background-color:#f3f6f7">
		             <div class="container text-center pt-0 mt-0">
                    <div class="jumbotron" style="margin:100px">
                       <h1 class="display-4">Sorry!!</h1>
                       <p class="lead">It seems that there is an internal issue for this error.We Suggest you to try again.Thank You</p>
                       <hr class="my-4">
                       <p>Have a Nice Day.</p>
                       <p class="lead">
                         <a class="btn btn-secondary btn-lg" href="index.php" role="button">Try Again</a>
                       </p>
                     </div>
	                </div>
	          </div>';
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