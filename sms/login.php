<?php
$connect=mysql_connect('localhost','root','');
$db=mysql_select_db('school',$connect);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body>
   <nav class="navbar navbar-expand-lg bg-secondary ">
        <a href="index.php" class="navbar-brand">
           <img src="logo1.PNG" class="mt-0 ml-5 pl-5">
        </a>
        <ul class="navbar-nav ml-auto p-5 ">
            <li class="nav-item">
                <a href="#" class="nav-link text-white">About Us</a>
            </li><li class="nav-item">
                <a href="#" class="nav-link text-white">Acdemic</a>
            </li><li class="nav-item">
                <a href="#" class="nav-link text-white">Admission &amp; Exam</a>
            </li><li class="nav-item">
                <a href="#" class="nav-link text-white">Student Service</a>
            </li><li class="nav-item">
                <a href="insert.php" class="nav-link text-white">Registration</a>
            </li>
        </ul>
    </nav>
      
    <div class="container-fluid mt-5">
       <div class="row">
           <div class="col-lg-6"></div>
          <div class="col-lg-3">
           <div class="card">
               <div class="card-body">
                 <form action="login.php" method="post">
                          <div class="form-group">
                        
                         <label class="h5">Email.</label>
                         <div class="input-group-append">
                       <input type="email" name="email" class="form-control ">
                   <span class="input-group-addon"><i class="fas fa-user"></i>    
                   </span>
                   </div>
                          </div>
                          <div class="form-group">
                             <label class="h5">Password</label>
                              <input type="password" name="password"  class="form-control">
                          </div>
                              <div class="form-group">
                              <input type="submit" name="send"  class="form-control btn btn-success">
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
    $query= "select * from sms where email='$email' AND password='$password'";
    $run=mysql_query($query);
    $count=mysql_num_rows($run);
        if ($count>0){
            $_SESSION ['sms']=$email;
            header("location: index.php");
            
        }
        else{
            echo "<script>alert('username and password is incorrect')</script>";
        }
        
    }
    ?> 
</body>
</html>