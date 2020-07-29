<?php
$connect=mysql_connect('localhost','root','');
$db=mysql_select_db('school',$connect);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="bg-secondary">
  <nav class="navbar navbar-expand-lg navbar-light bg-white text-dark mt-3">
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
      </ul>
    </nav>
   <div class="container-fluid">
       <div class="row">
         <div class="col-lg-4"></div>
         <div class="col-lg-4">
          <div class="card">
          <div class="card-header">
              <div class="card-heading h3">
                  Appointment Request
              </div>
          </div>
          <div class="card-body">
           
           
               <form action="appointment.php" method="post">
                   <div class="form-group">
                       <input type="text" class="form-control" placeholder="FullName" name="name">
                   </div>
                      <div class="form-group">
                       <input type="email" class="form-control" placeholder="Your Email" name="email">
                   </div>
                      <div class="form-group">
                       <input type="number" class="form-control" placeholder="Mobile No" name="mobile">
                   </div> 
                      <div class="form-group">
                       <input type="date" class="form-control" placeholder="Appoinment date" name="date">
                   </div> 
                      <div class="form-group ">
                        <select name="deparment" class="form-control">
                            <option>Select Deparment:</option>
                            <option>BONE AND JOINT</option>
                            <option>BRAIN AND SPINE</option>
                            <option>CANCER CARE</option>
                            <option>CARDIC CARE</option>
                            <option>KIDNEY CARE</option>
                        </select>
                   </div>
                   <div class="form-group ">
                        <select name="doctor" class="form-control">
                            <option>Select Doctor:</option>
                            <option>Dr.Hazra Khatoon</option>
                            <option>Dr.Muskan Naaz</option>
                            <option>Dr.Rahmat</option>
                            
                            <option>Dr.Afrin</option>
                           
                             <option>Dr.Afzal</option>
                        </select>
                   </div>
                   <textarea rows="4", cols="20" name="area" class="form-control" placeholder="Enter your Message here....."></textarea>
                   <div class="form-group">
                       <input type="submit" name="send" class="btn btn-info ml-5 mt-3">
                   </div>
               </form>
           </div>
       </div>
       </div>
   </div>
   </div>
   <?php
    if(isset($_POST['send'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $deparment=$_POST['deparment'];
        $doctor=$_POST['doctor'];
        $date=$_POST['date'];
        $area=$_POST['area'];
        $query="insert into hospital(name,email,mobile,deparment,doctor,date,area) value ('$name','$email','$mobile','$deparment','$doctor','$date','$area')";
        $run=mysql_query($query);
    if($run){
                echo "success";
            }
            else{
            echo "fail";
            }
            }
    
    
    ?>
</body>
</html>