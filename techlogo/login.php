<?php
$connect=mysql_connect('localhost','root','');
$db=mysql_select_db('data2',$connect);
session_start();
if(isset($_SESSION['cse'])){
    header("location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tech_logo</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>
<body>
   <nav class="navbar navbar-brand-lg navbar-light bg-success text-black">
       <a href="index.php" class="navbar-brand">
           <img src="cse-department-logo-black.png" width="35%">
       </a>
       <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
              <a href="index.php" class="btn btn-light ml-2 h5">Home</a></li></ul>
          <ul class="navbar-nav">
              <li class="nav-item ">
              <a href="login.php" class="btn btn-light ml-2 h5">Login</a></li></ul>
          <ul class="navbar-nav">
              <li class="nav-item">
              <a href="signup.php" class="btn btn-light mr-5 h4 ml-2">SignUp</a></li>
       </ul>
   </nav> 
   <div class="container-fluide mt-4">
       <div class="row">
           <div class="col-lg-3"></div>
           <div class="col-lg-4">
               <div class="card">
                   <div class="card-header  bg-secondary h4 text-white">
                       <div class="card-heading">
                           Login
                       </div>
                   </div>
                   <div class="card-body">
                       <form action="login.php" method="post">
                           <div class="form-group">
                               
                           <label for="" class="m-0 p-0 small control-label">User_Name</label>
                              
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                      <p class="input-group-text"><i class="fas fa-user"></i></p>
                                   </div>
                                   <input type="email" class="form-control" name="email" placeholder="enter username"/>
                               </div>
                           </div>
                              <div class="form-group">
                               <label for="" class="m-0 p-0 small control-label">Password</label>
                               <div class="input-group">
                               <div class="input-group-prepend">
                                   <p class="input-group-text"><i class="fas fa-unlock-alt"></i></p>
                               </div>
                               <input type="password" class="form-control" name="password" placeholder="enter your password">
                           </div>
                           </div>
                           <div class="form-group">
                               <input type="submit" name="send" class="btn btn-success btn-block">
                           </div>
                           <div class="form-group">
                               <p class="text-info ">New User<u><strong> Sign Up</strong></u> Here!!!</p>
                           </div>
                           <div class="form-group">
                              <div class="row">
                                  <div class="col-lg-2"></div>
                                  <div class="col-lg-3">
                                      <a href="signup.php" class="btn btn-info" name="register">Register</a> 
                                  </div>
                              </div>
                               
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div> 
   <?php
    if(isset($_POST['send'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query= "select * from cse where email='$email' AND password='$password'";
         $run=mysql_query($query);
    $count=mysql_num_rows($run);
        if ($count>0){
            $_SESSION['cse']= $email;
            header("location: insert.php");
            
        }
        else{
            echo "<script>alert('username and password is incorrect')</script>";
        }
        
    }
    
    ?>
</body>
</html>