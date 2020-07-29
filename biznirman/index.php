<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BusinessNirman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
   <nav class="navbar navbar-expand navbar-dark bg-primary text-white">
       <a href="index.php" class="navbar-brand">
           <h1>Biz</h1>
       </a>
       <ul class="ml-auto">
             <a href="list.php" class="btn btn-success mr-4">List Your Business</a>
       </ul>
   </nav>
   <div class="container-fluid mt-3">
       <div class="row">
           <div class="col-lg-3">
                      <div class="list-group">
                       <div class="list-group-item list-group-item-action active">Category</div>
                      
                          <?php
                          $call = mysql_query("select * from cat_egory");
                                while($row = mysql_fetch_array($call)):?>
                                <a href='' class="list-group-item list-group-item-action"><?php echo $row['title'];?></a>
                       <?php endwhile;?>
                   </div>
               </div>
           <div class="col-lg-9">
               <div class="card">
                <div class="card-body">
                    <div class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="Capture.PNG" alt="" width="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="Capture1.PNG" alt="" width="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="Capture3.PNG" alt="" width="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="Capture4.PNG" alt="" width="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="Capture5.PNG" alt="" width="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="Capture1.PNG" alt="" width="100%">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <hr class="bg-dark mt-3">
            <div class="row">
              <?php
                 
                $data =calling_data('biznirman');
                foreach($data as $row):
                ?>
                <div class="col-lg-4 p-3">
                   <a href="view.php" class="" >
                   <div class="card shadow ">
                  <img src="<?= "photo/".$row['image1'];?>" class="card-img-top" height="300px">
                  <div class="card-body">
                            <h2 class="lead"><?= $row['name'];?></h2>
                            <h2 class="small m-0 text-muted p-0"><?= $row['cat'];?></h2>
                        </div>
                   </div>
                   </a>
               </div>
             <?php endforeach;?>   
            </div>
           </div>
       </div>
   </div> 
</body>
</html>