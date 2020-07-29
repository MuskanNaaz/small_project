
<?php
$connect=mysql_connect('localhost','root','');
$db=mysql_select_db('school',$connect);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel</title>
    <link rel="stylesheet" href="bootstrap.css">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<body class="bg-secondary">
    
       <nav class="navbar nabvar-expand-lg navbar-dark bg-danger">
        <a href="#" class="navbar-brand">
            <img src="logo.png">
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="order.php" class="btn btn-danger mr-3">Order Food</a>
            
                <a href="C_details.php" class="btn btn-danger mr-5">Customer_Info</a>
            </li>
        </ul>   
       </nav>
       <div class="container-fluide mt-0">
       <img src="Capture4.PNG">
       <div class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">
                   <div class="carousel-item active">
                       <img src="Capturr1.PNG" alt="" width="100%"></div>
                       <div class="carousel-item">
                        <img src="l5.PNG"alt="" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="l2.PNG" alt="" width="100%">
                    </div>
                       <div class="carousel-item">
                        <img src="3-home_cheese_banner.jpg" alt="" width="100%">
                    </div>
                       <div class="carousel-item">
                        <img src="l6.PNG"alt="" width="100%">
                    </div>
                    
                    <div class="carousel-item">
                        <img src="Brand-Website-Banner---All-5-Paytm.jpg"alt="" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="Dom_EVO2_Brand_Desktop_1366x452.jpg" alt="" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="Dom_Homepage_Desktop_1366x452_amazon.jpg"alt="" width="100%">
                    </div>
           </div>
           
       </div>
       
        
    </div>
</body>
</html>