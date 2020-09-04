<?php
session_start();
 echo '
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
     <div class="container">
	 <button class="navbar-toggler" data-toggle="collapse" data-target="#ftco-nav">
	    <span class="navbar-toggler-icon"></span>
	 </button>
         <a class="navbar-brand" href="index.php">AAYE</a>
         <div class="collapse navbar-collapse" id="ftco-nav">
             <ul class="navbar-nav nav ml-auto">
                 <li class="nav-item">
                     <a href="index.php" class="nav-link btn-outline-warning">
                         <span>Home</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#about-section" class="nav-link btn-outline-warning">
                         <span>About</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="medicine.php" class="nav-link btn-outline-warning">
                         <span>Medicine and Prescription</span>
                     </a>
                 </li>
                 <li class="nav-item">
             <a href="doctor_registration.php" class="nav-link btn-outline-warning"><span>Doctor</span></a>
        </li>
        <li class="nav-item">
            <a href="#contact-section" class="nav-link btn-outline-warning"><span>Contact Us</span></a>
        </li>'; 
?>
<?php  
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
        {
            echo '<li class="nav-item">
                     <a href="_profile.php" class="nav-link btn-outline-warning"> Hello , '.$_SESSION['username'].'</a>
                 </li>
                 <li class="nav-item">
                     <a href="_handleLogout.php" class="nav-link btn-outline-warning">
                         <span>Logout</span>
                     </a>
                 </li>
                 ';
        }
        else
        {
            echo '
            <div class="dropdown1">
                      <li class="dropbtn">
                           <span>Log In/ Sign-Up</span>
                       </li>
                       <div class="dropdown-content">
                           <a href="login.php" class="btn-outline-warning">Log In</a>
                           <a href="signup.php" class="btn-outline-warning">Sign-Up</a>
                       </div>
                 </div>';
     }
?>
<?php 
  echo '
      </ul>
     </div>
  </div>
 </nav>';
?>