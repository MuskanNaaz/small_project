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
      <a href="index.php"> <img src="sdLatestLogo.svg" width="100%"></a>
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
            <a href="insert.php" class="list-group-item list-group-item-action active">INSERT_PRODUCT</a>
            <a href="insert_cat.php" class="list-group-item list-group-item-action">INSERT_CATEGORY</a>
            <a href="manage_pro.php" class="list-group-item list-group-item-action">MANAGE_PRODUCT</a>
            <a href="manage_cat.php" class="list-group-item list-group-item-action">MANAGE_CATEGORY</a>
            <a href="admin.php" class="list-group-item list-group-item-action">ADMIN_MANAGE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="m-0 p-0">title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="" class="m-0 p-0">cat</label>
                        <select class="form-control" name="cat">
                                <?php
                                $call = mysql_query("select * from insert_cat");
                                while($row = mysql_fetch_array($call)):?>
                <option><?php echo $row['cat_title'];?></option>
                       <?php endwhile;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="m-0 p-0">brand</label>
                        <input type="text" class="form-control" name="brand">
                    </div>
                    <div class="form-group">
                        <label for="" class="m-0 p-0">Qty</label>
                        <input type="text" class="form-control" name="Qty">
                    </div>
                    <div class="form-group">
                        <label for="" class="m-0 p-0">amount</label>
                        <input type="text" class="form-control" name="amount">
                    </div>
                    <div class="form-group">
                        <label for="" class="m-0 p-0">discount</label>
                        <input type="text" class="form-control" name="discount">
                    </div>
                    <div class="form-group">
                        <label for="" class="m-0 p-0">descr</label>
                        <input type="text" class="form-control" name="descr">
                    </div>
                    <div class="form-group">
                        <label for="" class="m-0 p-0">img</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-danger btn-block" name="send">
                    </div>
                </form>
                 <?php
                if(isset($_POST['send'])){
                    $data = [
                        'title' => $_POST['title'],
                        'cat' => $_POST['cat'],
                        'brand' => $_POST['brand'],
                        'qty' => $_POST['Qty'],
                        'amount' => $_POST['amount'],
                        'discount' => $_POST['discount'],
                        'descr' => $_POST['descr'],
                        'img' => $_FILES['img']['name']
                        
                    ];
                    
                    move_uploaded_file($_FILES['img']['tmp_name'],"photo/".$_FILES['img']['name']);
                    
                    insert_data('p_insert',$data);
                    redirect('insert');
                }
                    ?>
            </div>
        </div>
    </div>