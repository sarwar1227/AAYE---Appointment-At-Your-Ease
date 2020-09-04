<?php
echo '
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AAYE --> Client Profile</title>
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
<?php  include '_navbar.php'; 
       include '_dbconnect.php'?>
<?php
    $temp_id=$_SESSION['user_id'];
     $sql="SELECT * FROM `clients` WHERE  `user_id` = '$temp_id'";
     $result=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($result);
     echo ' <div class="jumbotron" style="background-color:#f3f6f7">
	              <div class="container text-center text-dark my-1 pb-4"> 
			       <div class="jumbotron" style="margin:100px">
                   <div class="container my-0" style="background-color:#d0e9f1; padding:2px; margin-top:50px" >
                      <h1 class="font-weight-bold">Welcome to AAYE</h1>
                   </div>
                   <p class="lead">Your own appointment portal</p>
                   <img src="client_uploads/'.$row["user_photo_name"].'" class="img-thumbnail my-2" width="200px" height="100px"> 
                   <h3 class="my-2"></h3>
                   <p><strong>Name : </strong><em>'.$row['username'].'</em></p>
                   <p><strong>Age : </strong><em>'.$row['age'].'</em></p>
                   <p><strong>Gender : </strong><em>'.$row['gender'].'</em></p>
                   <p><strong>Date of Birth : </strong><em>'.$row['dob'].'</em></p>
                   <p><strong>Phone Number : </strong><em>'.$row['phone'].'</em></p>
                   <p><strong>Adress : </strong><em>'.$row['address'].'</em></p>
                   <p><strong>Area : </strong><em>'.$row['area'].'</em></p>
                   <hr>
                   <div class="container my-4 py-2" style="background-color:#d0e9f1; padding:2px; margin-top:50px;">
				                <h1 class="font-weight-bold text-center">Your Appointment History</h1>
                   </div>';

                   $temp_user_id=$_SESSION["user_id"];
                   $sql="SELECT * FROM `appointments` WHERE `user_id`='$temp_user_id'";
                   $result=mysqli_query($conn,$sql);
                   if(mysqli_num_rows($result)==0)
                   {
                    echo '<div class="jumbotron jumbotron-fluid">
                            <div class="container">
                              <h1 class="display-4">No Appointments</h1>
                              <p class="lead">You have not booked any appointment on our portal yet.</p>
                              <a href="appointment.php" class="btn btn-secondary my-2 py-3 px-4">Book Here</a>
                            </div>
                         </div>';
                   }
                   else
                   {
                     echo 
                        '<div class="container">
                           <table class="table text-left">
                           <thead class="thead-dark">
                             <tr>
                                 <th scope="col">Sno</th>
                                 <th scope="col">Appointment With</th>
                                 <th scope="col">Clinic Adress</th>
                                 <th scope="col">Contact 1</th>
                                 <th scope="col">Contact 2</th>
                                 <th scope="col">Appointment Date</th>
                             </tr>
                          </thead>';
                      $counter=1;
                      while($row=mysqli_fetch_assoc($result))
                      {
                        $temp_doc_id=$row["doctor_id"];
                        $sql2="SELECT `name`,`address`,`contact1`,`contact2` FROM `doctors` WHERE `doctor_id`='$temp_doc_id'";
                        $result2=mysqli_query($conn,$sql2);
                        $row2=mysqli_fetch_assoc($result2);  
                         echo '<tbody>
                                  <tr>
                                    <th scope="row">'.$counter.'</th>
                                    <td>Dr. '.$row2["name"].'</td>
                                    <td>'.$row2["address"].'</td>
                                    <td>'.$row2["contact1"].'</td>
                                    <td>'.$row2["contact2"].'</td>
                                    <td>'.substr($row["app_time"],0,10).'</td>
                                  </tr>
                                </tbody>';
                         $counter=$counter+1;
                      }
                     echo'
                          <hr>
                        </table>
                     <a href="appointment.php" class="btn btn-secondary my-2 py-3 px-4">Book More</a>
                  </div> 
				  </div>
                </div>'; 
           } 
           
?>
<?php 
 echo '</div>';
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