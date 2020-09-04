<?php
$is_page_refreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0');
if(!$is_page_refreshed )
{
  header("Location: index.php");
} 
else{
echo '
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AAYE --> Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';?>
        <?php
         if($_SERVER['REQUEST_METHOD']=="GET" && $_GET['login_val']==true)
         echo '<meta http-equiv = "refresh" content = "3; url = appointment.php" />'; ?>
        <?php echo'
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
  echo  '<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb">';
  ?>
<?php 
   if($_SERVER['REQUEST_METHOD']=="GET" && $_GET['login_val']==true)
   {
    echo '
         <div class="jumbotron" style="background-color:#f3f6f7">
			   	  <div class="container text-center pt-0 mt-0">
                <div class="jumbotron" style="margin:100px">
                       <h1 class="display-4">Login Sucessfully !!</h1>
                       <p class="lead">Now you can enjoy our best service.</p>
                       <hr class="my-4">
                       <p>Have a Nice Day.</p>
                       <h5 class="text-dark"><strong><em>Redirecting to you appointment booking page in 3 seconds.....</em></strong></h5>
                   </div>
            </div>       
        </div>';
   }
   else if($_SERVER['REQUEST_METHOD']=="POST")
   {
    include '_dbconnect.php';
    $login_phone=$_POST['login_phone'];
    $login_password=$_POST['login_password'];
    $sql="SELECT * from `clients` WHERE `phone`='$login_phone'";
    $result=mysqli_query($conn,$sql);
    $no_of_rows=mysqli_num_rows($result);
    if($no_of_rows==1)
     {
       $row=mysqli_fetch_assoc($result);
       if(password_verify($login_password,$row['password']))
           {
             $_SESSION['loggedin']=true;
             $_SESSION['username']=$row['username'];
             $_SESSION['user_id']=$row['user_id'];
             header("Location: _handleLogin.php?login_val=true");
           }
      else
          {
              echo '<div class="jumbotron" style="background-color:#f3f6f7">
		              	 <div class="container text-center pt-0 mt-0">
                      <div class="jumbotron" style="margin:100px">
                        <h1 class="display-4">Wrong Password</h1>
                        <p class="lead">Your password does not match. Please try again.</p>
                        <hr class="my-4">
                        <p>Have a Nice Day.</p>
                        <p class="lead">
                           <a class="btn btn-secondary btn-lg" href="login.php" role="button">Try Again</a>
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
             <h1 class="display-4">Account do not Exist</h1>
             <p class="lead">Please try again or create an account. Thank You</p>
             <hr class="my-4">
             <p>Have a Nice Day.</p>
              <p class="lead">
                 <a class="btn btn-secondary btn-lg mx-2" href="login.php" role="button">Try Again</a>
			        <a class="btn btn-secondary btn-lg mx-2" href="signup.php" role="button">Create an Account</a>
             </p>
            </div>
          </div>
       </div>';
    }
  }
?>
<?php 
  echo ' 
      </section>';
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
</html>';}
?>