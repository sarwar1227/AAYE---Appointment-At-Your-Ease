<?php
echo '<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AAYE --> Medicine and Prescription</title>
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
        <link rel="stylesheet" href="style.css">
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">'; ?>
<?php include '_navbar.php'; ?>
<?php 
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
    $pres_name=$_FILES['prescription_photo_name']['name'];
    $pres_current_location=$_FILES['prescription_photo_name']['tmp_name'];
    $pres_destination_location="prescription_uploads/".$pres_name;
    
    if(move_uploaded_file($pres_current_location,$pres_destination_location))
     {
      echo '
	          <div class="container" style="margin-top:130px;">
	          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Uploaded ! </strong> Your Prescription is Successfully Uploaded.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
				</div>
           </div>';
     }
    else
    {
       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>OOPS ! </strong> Prescription Uploading Failed.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
           </div>';
   }
 }
?>
<?php 
  echo '  
  <section class="ftco-section contact-section" style="background-image: url("images/med-store1.svg");" id="contact-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <h2 class="mb-4">Welcome To AAYE Medical Store</h2>
                        <p>With easy appointment order smartly !!</p>
                        <form action="medicine.php" method="POST" enctype="multipart/form-data">
                            <label for="img">Upload Image</label>        
                            <input class="form-control" type="file" id="prescription_photo_name" name="prescription_photo_name" accept="images/*" required>							
                            <input type="submit" name="upload" value="Upload" class="btn btn-secondary py-2 px-4 my-4">
                        </form>
                    </div>
                </div>
            </div>
  </section>';
  ?>
<?php 
  echo'<section class="ftco-section testimony-section img" style="background-image: url(images/med-store.jpg);">
     <div class="overlay"></div>
          <div class="container">
               <div class="row justify-content-center pb-3">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                       <span class="subheading">Top Offers</span>
                       <h2 class="mb-4">From Best Sellers</h2>
                    </div>
               </div>
			   <div class="row ftco-animate justify-content-center">
			   <div class="col-md-12">   
            <div class="carousel-testimony owl-carousel ftco-owl">'; 
?>
<?php 
   include '_dbconnect.php';
   $sql="SELECT * FROM `items`";
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result))
   {
      echo  '
	        
      <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                   <div class="user-img" style="background-image: url(images/'.$row['item_photo_name'].')">
                      <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                      </span>
                  </div>
                  <div class="text px-4">
                      <p class="mb-4">'.$row['item_name'].'</p>
                      <p class="name">'.$row['item_price'].'</p>
                      <div class="form-group">
                            <input type="submit" value="Add to Cart" class="btn btn-secondary py-3 px-4">
                       </div>
                   </div>
               </div>
			   </div>
             
			';
    } 
?>
<?php 
  echo     '
            </div>
		   </div>
		  </div>
		 </div>
        </div>
      </div>
     </div> 
   </section>'; ?>
<?php
    include '_footer.php';
    echo  '<script src="js/jquery.min.js"></script>
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