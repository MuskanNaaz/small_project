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
       <div class="card">
           <div class="card-header bg-secondary text-white ">
               <div class="card-heading text-center h2 ">Details</div>
           </div>
           <div class="card-body">
               <div class="row">
                   <?php
                       $call=calling_data("select * from biznirman ");
                       foreach($call as $row):
                       ?>
                   <table class="table table-hover table-striped">
                       <tr>
                           <th>Name:</th>
                           <td><?= $row['name'];?></td>
                           <th>Id:</th>
                           <td><?= $row['id'];?></td>
                       </tr>
                       <tr>
                        <th>Contact1:</th>
                        <td><?= $row['contact1'];?></td>
                        <th>Contact2:</th>
                        <td><?= $row['contact2'];?></td>
                       </tr>
                       <tr>
                           <th>Email</th>
                            <td><?= $row['email'];?></td>
                           <th>Category</th>
                           <td><?= $row['cat'];?></td>
                       </tr>
                       <tr>
                           <th>street</th>
                           <td><?= $row['street'];?></td>
                           <th>address</th>
                           <td><?= $row['address'];?></td>
                       </tr>
                       <tr>
                           <th>city</th>
                           <td><?= $row['city'];?></td>
                           <th>State</th>
                           <td><?= $row['state'];?></td>
                       </tr>
                       <tr>
                           <th>PinCode</th>
                           <td><?= $row['pin'];?></td>
                       </tr>
                   <?php endforeach;     ?>
                   </table>
               </div>
           </div>
       </div>
   </div>
    </body>
</html>