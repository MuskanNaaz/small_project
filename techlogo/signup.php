<?php 
$connect=mysql_connect('localhost','root','');
$db=mysql_select_db('data2',$connect);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tech_logo</title>
    <link rel="stylesheet" href="bootstrap.css">
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
   <div class="container-fluide mt-3">
       <div class="row">
           <div class="col-lg-4"></div>
           <div class="col-lg-4">
               <div class="card">
                   <div class="card-header bg-info h4 ">
                   <div class="card-heading">
                       Registration
                   </div>
               </div>
               <div class="card-body">
                   <form action="signup.php" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                      
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="name">User Name :</label>
                            </div>
                            <div class="col-lg-8"><input type="text" name="name" placeholder="Enter ur Full_name" class="form-control"></div>
                        </div>
                            </div>
                            <div class="form-group">
                      
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="name">Contact No. :</label>
                            </div>
                            <div class="col-lg-8">
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <p class="input-group-text">+91</p>
                            </div>
                            <input type="number" name="contact" placeholder="" class="form-control"></div>
                        </div>
                           </div>
                            </div>
                            <div class="form-group">
                      
                            <div class="row">
                            <div class="col-lg-4">
                                <label for="name">Email :</label>
                            </div>
                            <div class="col-lg-8">
                            <div class="input-group">
                            
                            <input type="email" name="email" placeholder="" class="form-control"/></div>
                            </div>
                            </div>
                       </div>
                            <div class="form-group">
                      
                            <div class="row">
                            <div class="col-lg-4">
                                <label for="name">Password :</label>
                            </div>
                            <div class="col-lg-8"><input type="password" name="password" placeholder="**********" class="form-control"></div>
                            </div>
                            </div>
                            <div class="form-group">
                      
                            <div class="row">
                            <div class="col-lg-4">
                                <label for="name">D.O.B :</label>
                            </div>
                            <div class="col-lg-8"><input type="date" name="date" placeholder="" class="form-control"></div>
                            </div>
                            </div>
                            <div class="form-group">
                      
                            <div class="row">
                            <div class="col-lg-4">
                                <label >Interested Cat :</label>
                            </div>
                            <div class="col-lg-8"><select class="form-control" name="cat">
                               <option selected>--------Select------------</option>
                                <option>Engg.Mathematics</option>
                                <option>OS</option>
                                <option>CN</option>
                                <option>DAA</option>
                                <option>DBMS</option>
                                <option>DE</option>
                                <option>C</option>
                                <option>C++</option>
                                <option>JAVA</option>
                                <option>PYTHON</option>
                                <option>ALGORITHM</option>
                                <option>CD</option>
                            </select></div>
                            </div>
                            </div>
                            <div class="form-group">
                                <input type="file" name="pic">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success form-control h5" vlaue="Sumbit" name="send">
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
        $contact=$_POST['contact'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $date=$_POST['date'];
        $cat=$_POST['cat'];
        $pic=$_FILES['pic']['name'];
        
        $tmp_file=$_FILES['pic']['tmp_name'];
        move_uploaded_file($tmp_file,"folder/$pic");
        $query="insert into cse(name,contact,email,password,date,cat,pic)value('$name','$contact','$email','$password','$date','$cat','$pic')";
        
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