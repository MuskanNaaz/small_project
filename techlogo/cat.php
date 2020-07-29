<?php
$connect=mysql_connect('localhost','root','');
$db=mysql_select_db('data2',$connect);
session_start();
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
              <a href="logout.php" class="btn btn-light mr-5 h5">LogOut</a></li></ul>
    </nav>
    <div class="container-fluid mt-3">
        <div class="row">
        <div class="col-lg-3">
            <a href="insert.php" class="btn btn-info btn-block">INSERT</a>
            <a href="post.php" class="btn btn-info btn-block">POST</a>
            <a href="manage.php" class="btn btn-info btn-block">MANAGE</a>
            <a href="cat.php" class="btn btn-info btn-block">CATEGORY</a>
        </div>
       
    <div class="col-lg-6">
            <div class="card">
                <div class="card-header h4 text-success">
                    <div class="card-heading">
                       CATEGORY .....
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10"></div>
                        <div class="col-lg-2">
                            <a href="#" class="btn btn-info">ADD</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
     </div>
    </div> 
</body>
</html>