<?php include "config.php";?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SnapDeal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
   <div class="header">
     <div class="para">
      <p>India's Fastest Online Shopping Destination</p>
        </div>
        <div class="sub">
         <ul>
          <a href="#"> Gift Cards</a>  
          <a href="#">Kerala Flood Relief</a>
          <a href="#"> Help Center</a> 
          <a href="#"> Sell On Snapdeal</a>
          <a href="#"> Download App</a>
          <a href="index.php" class=""><u>LogOut</u></a>
      </ul>
       </div>
   </div>
   <div class="header2">
     
      <div class="row">
      <div class="col-lg-3">
       <div class="logo mt-4 ml-2">
       <img src="sdLatestLogo.svg" width="100%">
       </div>
       </div>
       <div class="col-lg-1"></div>
       
       <div class="col-lg-6 ">
           <input type="search" class="form-control mt-4" name="search" placeholder="Search product & brands">
       </div>
   </div>
    </div>
    <div class="container-fluide mt-3">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
            <a href="insert.php" class="list-group-item list-group-item-action">INSERT_PRODUCT</a>
            <a href="insert_cat.php" class="list-group-item list-group-item-action">INSERT_CATEGORY</a>
            <a href="manage_pro.php" class="list-group-item list-group-item-action ">MANAGE_PRODUCT</a>
            <a href="manage_cat.php" class="list-group-item list-group-item-action">MANAGE_CATEGORY</a>
            <a href="admin.php" class="list-group-item list-group-item-action active">ADMIN_MANAGE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card bg-primary text-white shadow-lg">
                        <div class="card-body">
                            <h1><?= count_data('p_insert');?></h1>
                            <p class="lead">Total Product</p>
                        </div>
                    </div>
                </div>
                   <div class="col-lg-4">
                    <div class="card bg-primary text-white shadow-lg">
                        <div class="card-body">
                            <h1><?= count_data('insert_cat');?></h1>
                            <p class="lead">Total Category</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </body>
</html>