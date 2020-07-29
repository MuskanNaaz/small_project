<?php
$connect=mysql_connect('localhost','root','');
$db=mysql_select_db('school',$connect);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
   <div class="header">
       <div class="container-fluid ml-0">
           <div class="row">
               <div class="col-sm-3">
                   <div class="widget no-border m-0">
                      <ul class="styled-icons icon-social icon-circled icon-theme-colored icon-sm "
                         style="margin-top:5px">
                   <a href="#" class="mt-3" ><img src="Capture.PNG">
                   </a>
                       </ul>
                   </div>
               </div>
               <div class="col-sm-6">
                   <img src="cap3.PNG">
               </div>
               <div class="col-sm-3">
                   <img src="Capture4.PNG">
               </div>
           </div>
           <nav class="navbar navbar-expand-lg navbar-light bg-white text-dark mt-3 ">
               <a href="index.php" class="navbar-brand ml-5">
                   <img src="logo%20(1).png">
               </a>
               <ul class="navbar-nav ">
                   <li class="nav-item ">
                       <div class="dropdown">
                            <a  class="nav-link text-dark h5 mr-2" data-toggle="dropdown" href="#">About Us </a>
                       <div class="dropdown-menu">
                           <a href="#" class="dropdown-item">About AIMS</a>
                           <a href="#"class="dropdown-item">Chairman'sMessage</a>
                           <a href="#"class="dropdown-item">Vission Mission</a>
                           <a href="#"class="dropdown-item">Why Aims</a>
                       </div>
                       </div>
                   </li>
                      <li class="nav-item">
                      <div class="dropdown">
                         <a href="#" class="nav-link text-dark h5  mr-2" data-toggle="dropdown">Service</a>
                         <div class="dropdown-menu">
                             <a href="#" class="dropdown-item">Service</a>
                             <a href="#" class="dropdown-item">Super Speciality</a>
                             <a href="#" class="dropdown-item">Clinical Departments</a>
                             <a href="#" class="dropdown-item">Anesthesiology</a>
                             <a href="#" class="dropdown-item">Dentistry</a>
                             <a href="#" class="dropdown-item">Breast Cancer</a>
                         </div>

                      </div>
                   </li>
                      <li class="nav-item">
                      <div class="dropdown">
                        <a href="#" class="nav-link text-dark h5  mr-2" data-toggle="dropdown">Medical Professional</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Doctor Profile</a>
                            <a href="#" class="dropdown-item">Breakthrough Cases</a>
                            <a href="#" class="dropdown-item">Academic</a>
                            
                        </div>
                      </div>
                   </li>
                      <li class="nav-item">
                       <a href="#" class="nav-link text-dark h5  mr-2" data-toggle="dropdown">Patients &amp; Visitors</a>
                       <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Patient Guide</a>
                            <a href="#" class="dropdown-item">Corporates</a>
                            <a href="#" class="dropdown-item">Govt.Schemes</a>
                            <a href="#" class="dropdown-item">TPA</a>
                            <a href="#" class="dropdown-item">Room Facilites</a>
                            <a href="#" class="dropdown-item">Virtual Tour</a>
                            <a href="#" class="dropdown-item">Feedback</a>
                            <a href="#" class="dropdown-item">Testimonial</a>
                            <a href="#" class="dropdown-item"></a>
                        </div>
                   </li>
                      <li class="nav-item">
                       <a href="#" class="nav-link text-dark h5  mr-2">Blogs</a>
                   </li><li class="nav-item">
                       <a href="#" class="nav-link text-dark h5  mr-2" data-toggle="dropdown">Contact Us</a>
                       <div class="dropdown-menu">
                           <a href="#" class="dropdown-item">Enquiry</a>
                           <a href="#" class="dropdown-item">Clinics Centers</a>
                           <a href="#" class="dropdown-item">Career</a>
                       </div>
                   </li>
                   <li class="nav-item">
                       <a href="appointment.php" class="btn btn-secondary h5">Appoinment Request</a>
                   </li>
               </ul>
           </nav>
           <div class="carosel slide mt-0 ml-0" data-ride="carousel">
               <div class="carousel-inner">
                   <div class="carousel-item active">
                       <img src="full-time-experienced-doctors-aims.jpg" alt="" width="100%"></div>
                       <div class="carousel-item">
                           <img src="ambulance.jpg" alt="" width="100%">
                       </div>
                           <div class="carousel-item">
                           <img src="best-emergency-care-unit.jpg" alt="" width="100%">
                       </div>
                           <div class="carousel-item">
                           <img src="breast-cancer.jpg" alt="" width="100%">
                       </div> 
                          <div class="carousel-item">
                           <img src="cancer-care-aims.jpg" alt="" width="100%">
                       </div> 
                          <div class="carousel-item">
                           <img src="cardiac-care-aims.jpg" alt="" width="100%">
                       </div> 
                          <div class="carousel-item">
                           <img src="superspecialty.jpg" alt="" width="100%">
                       </div> 
                          <div class="carousel-item">
                           <img src="full-time-experienced-doctors-aims.jpg" alt="" width="100%">
                       </div>
                   
               </div>
           </div>
       </div>
   </div> 
</body>
</html>