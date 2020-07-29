<?php 
session_start();
$log= $_SESSION['cse'];
if(!isset($_SESSION['cse'])):
    header("location: login.php");
endif;

$connect=mysql_connect('localhost','root','');
$db=mysql_select_db('data2',$connect);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tech_logo</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
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
              <a href="insert.php" class="btn btn-light ml-2 h5">Insert</a></li></ul>
          <ul class="navbar-nav">
              <li class="nav-item">
              <a href="signup.php" class="btn btn-light mr-5 h4 ml-2">SignUp</a></li>
       </ul>
   </nav> 
    <div class="container-fluide mt-3">
       <div class="row">
           <div class="col-lg-3">
               <div class="list-group">
                   <a href="index.php" class="list-group-item list-group-item-action active bg-success h5"> Select Category</a>
                   <div class="dropdown">
                   <a href="index.php" class="list-group-item list-group-item-action  " data-toggle='dropdown'>Core Subject    <i class="fas fa-angle-right float-right "></i> </a>
                   <div class="dropdown-menu bg-light">
                           <a href="#" class="dropdown-item active bg-success">Engg.Mathematics</a>
                           <a href="#"class="dropdown-item">Operating System</a>
                           <a href="#"class="dropdown-item">Computer Network</a>
                           <a href="#"class="dropdown-item">DBMS</a>
                           <a href="#"class="dropdown-item">Compiler Design</a>
                           <a href="#"class="dropdown-item">Theory of Computation</a>
                           <a href="#"class="dropdown-item">Digital Electronics</a>
                           <a href="#"class="dropdown-item">Software Engineering</a>
                       </div>
                   </div>
                   <div class="dropdown">
                   <a href="index.php" class="list-group-item list-group-item-action " data-toggle='dropdown'>Algorithm<i class="fas fa-angle-right float-right "></i> </a>
                   <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item active bg-success">Analysis of Algorithm</a>
                           <a href="#"class="dropdown-item"><i class="fas fa-sort"></i> Sorting Algorithm </a>
                           <a href="#"class="dropdown-item"><i class="fab fa-searchengin"></i> Searching Algorithm </a>
                           <a href="#"class="dropdown-item"><i class="far fa-chart-bar"></i>Graph Algorithm </a>
                           <a href="#"class="dropdown-item"><i class="fab fa-bitcoin"></i>Bit Algorithm </a>
                           <a href="#"class="dropdown-item"><i class="fab fa-product-hunt"></i> Patterns Algorithm </a>
                           <a href="#"class="dropdown-item"><i class="fab fa-gofore"></i> Geometric Algorithm </a>
                           <a href="#"class="dropdown-item"><i class="fas fa-gamepad"></i>Game Algorithm </a>
                           <a href="#"class="dropdown-item">Divide And Concquer</a>
                           <a href="#"class="dropdown-item">Branch &amp; Bound</a>
                           </div>
                           </div>
                           <div class="dropdown">
                   <a href="index.php" class="list-group-item list-group-item-action "data-toggle='dropdown' >Languages<i class="fas fa-angle-right float-right "></i></a>
                   <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item active bg-success h5"><i class="far fa-copyright"></i> C</a>
                           <a href="#"class="dropdown-item"><i class="fab fa-cuttlefish"></i> C++</a>
                           <a href="#"class="dropdown-item"><i class="fab fa-java"></i> Java</a>
                           <a href="#"class="dropdown-item"><i class="fab fa-python"></i> Python</a>
                           <a href="#"class="dropdown-item"><i class="fab fa-weebly"></i>Web Development </a>
                           <a href="#"class="dropdown-item"><i class="fas fa-database"></i> SQL</a>
                           <a href="#"class="dropdown-item"><i class="fab fa-php"></i> PHP </a>
                           <a href="#"class="dropdown-item"><i class="fab fa-js"></i>JavaScript</a>
                           <a href="#"class="dropdown-item"><i class="fab fa-product-hunt"></i>Program Output</a>
                           </div>
                   </div>
                   <div class="dropdown">
                   <a href="index.php" class="list-group-item list-group-item-action "data-toggle='dropdown' >GATE<i class="fas fa-angle-right float-right "></i></a>
                   <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item active bg-success ">GATE Notes</a>
                           <a href="#"class="dropdown-item"> GATE CS Corner</a>
                           <a href="#"class="dropdown-item"> GATE 2019</a>
                           <a href="#"class="dropdown-item">Pervious Question</a>
                       </div>
                   </div>
                   <div class="dropdown">
                   <a href="index.php" class="list-group-item list-group-item-action "data-toggle='dropdown' >Data Structure<i class="fas fa-angle-right float-right "></i></a>
                   <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item active bg-success ">Array</a>
                           <a href="#"class="dropdown-item"> LinkList</a>
                           <a href="#"class="dropdown-item"> Queue</a>
                           <a href="#"class="dropdown-item">Tree </a>
                           <a href="#"class="dropdown-item">Hashing</a>
                       </div>
                   </div>
                   
               </div>
           </div>
           <div class="col-lg-8">
               <div class="card">
                   <div class="card-header h4 text-success">
                       <div class="card-heading"><u><center>Latest Question :</center></u></div>
                   </div>
                   <div class="card-body">
                       <div class="list-group">
                         
                           <?php 
                      if(isset($_GET['id'])):
                        $id  = $_GET['id'];
                      $run = mysql_query("select * from post ");
                      $row = mysql_fetch_array($run);
                           endif;
                      ?>
                      
                       <?php 
                      $query = mysql_query("select * from post");
                      while($row = mysql_fetch_array($query)){
                          $title = $row['title'];
                          $q_by = $row['q_by'];
                          
                          $content =$row['content'];
                          $img1=$row['img1'];
                          $img2=$row['img2'];
                          $img3=$row['img3'];
                          $doc =$row['doc'];
                          $id =$row['id'];
                          echo "<div class='card mt-4'>
                          <div class='card-header'>
                          
                          <h4 class='text-capitalize'>$title</h4>
                          
                          <p class='small tex-muted float-right'><u>Post by: $q_by</u></p>
                          </div>
                          <div class='card-body'>
                              <p>$content</p>
                          <span class='float-right'>$doc</span>
                            </p>
                          </div>
                          </div>
                      </div>";
                      }
                      ?>
                       </div>
                   </div>
               </div>
           </div>
       </div>
        
    </div>
</body>
</html>