<?php
$is_page_refreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0');
    if($is_page_refreshed )
    {
      header("Location: appointment.php");
    } 
    else
    {
      echo '<!DOCTYPE html>
      <html lang="en">
      <head>
          <title>AAYE --> Appointment Booked</title>
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
         <link rel="stylesheet" type="text/css" href="style.css" media="print">
     </head>
     <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">';
  ?>
<?php include '_navbar.php'; ?>
<?php
      if($_SERVER['REQUEST_METHOD']=="GET")
      {
        
        include '_dbconnect.php';        
        $doctor=$_SESSION['app_doctor'];
        $speciality=$_SESSION['app_speciality'];
        $user_id=$_SESSION['user_id'];
        $doc_id=$_GET['doc_id'];
        
        $SQL="SELECT * FROM `clients` WHERE `user_id`='$user_id'";
        $RESULT=mysqli_query($conn,$SQL);
        $ROW=mysqli_fetch_assoc($RESULT);
        $name=$ROW['username'];
        $gender=$ROW['gender'];
        $age=$ROW['age'];
        $phone=$ROW['phone'];
        $area=$ROW['area'];
        
        $sql="INSERT INTO `appointments` (`app_doctor`, `app_speciality`, `user_id`, `doctor_id`, `app_time`) VALUES ('$doctor', '$speciality', '$user_id' ,'$doc_id', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        
        
        if($result)
          {
            
            $sql2="SELECT * FROM `doctors` WHERE `doctor_id`='$doc_id'";
            $result2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_assoc($result2);
            $doctor_name=$row2['name'];
            $clinic_address=$row2['address'];
            $clinic_area=$row2['area'];
            $clinic_contact_1=$row2['contact1'];
            $clinic_contact_2=$row2['contact2'];
            $doctor_fee=$row2['fee'];
            $clinic_opening_time=$row2['opening_time'];
            $clinic_closing_time=$row2['closing_time'];

            echo '<div class="jumbotron" style="background-color:#f3f6f7">
			      <div class="container text-center" style="margin-top:50px">
                     <h1><strong>AAYE Appointment Booked</strong></h1>  
                  </div>
                  <hr>
				  <div class="container text-center">
           <img src="images/green_tick.png" alt="green_tick.png" width="100px"> 
           <h1>Thank You!</h1>
					<p class="lead" style="font-size:25px;">Your appointment has been booked. Please find the details below.</p>
				  </div>
				  <div class="container" style="background-color:#d0e9f1; padding:2px; margin-top:30px" >
					<h1 class="text-center">Customer Information</h1>
                  </div>
                  <div class="container">
                  <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                  </thead> 
                  <tbody>
                    <tr>
                      <td colspan="2">Name : </td>
                      <td style="padding-right:65px">'.$name.'</td>
                      
                    </tr>
                    <tr>
                      <td colspan="2">Gender : </td>
                      <td>'.$gender.'</td>
                    </tr>
                    <tr>
                      <td colspan="2">Age : </td>
                      <td>'.$age.'</td>
                    </tr>
                    <tr>
                      <td colspan="2">Phone : </td>
                      <td>'.$phone.'</td>
                    </tr>
                    <tr>
                      <td colspan="2">Area : </td>
                      <td>'.$area.'</td>
                    </tr>
                  </tbody>
                </table>
                <hr>
        </div>
		<div class="container" style="background-color:#d0e9f1; padding:2px; margin-top:50px" >
			<h1 class="text-center">Doctor Information</h1>
		</div>
        <div class="container">
        <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            <td colspan="2">Name : </td>
            <td style="padding-right:245px">'.$doctor_name.'</td>          
          </tr>
          <tr>
            <td colspan="2">Clinic Address : </td>
            <td>'.$clinic_address.'</td>
          </tr>
          <tr>
            <td colspan="2">Clinic Area : </td>
            <td>'.$clinic_area.'</td>
          </tr>
          <tr>
            <td colspan="2">Clinic Contact Number 1 : </td>
            <td>'.$clinic_contact_1.'</td>
          </tr>
          <tr>
            <td colspan="2">Clinic Contact Number 2 : </td>
            <td>'.$clinic_contact_2.'</td>
          </tr>
          <tr>
            <td colspan="2">Doctor Fee : </td>
            <td>'.$doctor_fee.'</td>
          </tr>
          <tr>
            <td colspan="2">Clinic Opening Time : </td>
            <td>'.$clinic_opening_time.'</td>
          </tr>
          <tr>
             <td colspan="2">Clinic Closing Time : </td>
            <td>'.$clinic_closing_time.'</td>
          </tr>
        </tbody>
      </table>
	  <hr>
   </div>
   <div class="container text-center">
     <p style="font-size:20px; margin-top:30px;">Please download the pdf/print from here and show at the time of doctor\'s visit.</p> 
     <button onclick="window.print();" class="btn btn-primary btn-lg" style="font-size:25px; margin:20px; padding:10px 60px">Print</button>
    </div>
	</div>
   ';
   } 
        else
          echo '<div class="jumbotron" style="background-color:#f3f6f7">
                    <div class="container text-center pt-0 mt-0">
                        <div class="jumbotron" style="margin:100px">
                           <h1 class="display-4">Oops !! Failed to Book Appointment/h1>
                              <p class="lead">It seems that there is an internal issue for this error.We Suggest you to try again.Thank You</p>
              <hr class="my-4">
              <p>Have a Nice Day.</p>
               <p class="lead">
                  <a class="btn btn-secondary btn-lg" href="index.php" role="button">Try Again</a>
              </p>
          </div>
        </div>
        </div>';
        unset($_SESSION['app_doctor']);
        unset($_SESSION['app_speciality']);
      }
	}
?>