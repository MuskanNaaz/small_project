<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BusinessNirman</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body class=" bg-light">
   <nav class="navbar navbar-expand navbar-dark bg-primary text-white">
       <a href="index.php" class="navbar-brand">
           <h1>Biz</h1>
       </a>
       <ul class="ml-auto">
             <a href="list.php" class="btn btn-success mr-4">List Your Business</a>
       </ul>
   </nav>
   <div class="container-fluide mt-3">
       <div class="row">
           <div class="col-lg-2"></div>
           <div class="col-lg-6">
               <div class="card">
               <div class="card-body">
                   <form action="list.php" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                           <div class="row">
                               <div class="col-lg-2">
                               <label class="">Name:</label>
                           </div>
                           <div class="col-lg-8">
                               <input type="text" name="name" class="form-control">
                           </div>
                           </div>
                       </div>
                          <div class="form-group">
                           <div class="row">
                               <div class="col-lg-2">
                               <label class="">contact1:</label>
                           </div>
                           <div class="col-lg-8">
                               <input type="text" name="contact1" class="form-control">
                           </div>
                           </div>
                       </div>
                          <div class="form-group">
                           <div class="row">
                               <div class="col-lg-2">
                               <label class="">contact2:</label>
                           </div>
                           <div class="col-lg-8">
                               <input type="text" name="contact2" class="form-control">
                           </div>
                           </div>
                       </div>
                          <div class="form-group">
                           <div class="row">
                               <div class="col-lg-2">
                               <label class="">email:</label>
                           </div>
                           <div class="col-lg-8">
                               <input type="email" name="email" class="form-control">
                           </div>
                           </div>
                       </div>
                          <div class="form-group">
                           <div class="row">
                               <div class="col-lg-2">
                               <label class="">street:</label>
                           </div>
                           <div class="col-lg-8">
                               <input type="text" name="street" class="form-control">
                           </div>
                           </div>
                       </div>
                          <div class="form-group">
                           <div class="row">
                               <div class="col-lg-2">
                               <label class="">address:</label>
                           </div>
                           <div class="col-lg-8">
                               <input type="text" name="address" class="form-control">
                           </div>
                           </div>
                       </div>
                          <div class="form-group">
                           <div class="row">
                               <div class="col-lg-2">
                               <label class="">city:</label>
                           </div>
                           <div class="col-lg-8">
                               <input type="text" name="city" class="form-control">
                           </div>
                           </div>
                       </div>
                          <div class="form-group">
                           <div class="row">
                               <div class="col-lg-2">
                               <label class="">state:</label>
                           </div>
                           <div class="col-lg-8">
                               <input type="text" name="state" class="form-control">
                           </div>
                           </div>
                       </div>
                          <div class="form-group">
                           <div class="row">
                               <div class="col-lg-2">
                               <label class="">pincode:</label>
                           </div>
                           <div class="col-lg-8">
                               <input type="text" name="pin" class="form-control">
                           </div>
                           </div>
                       </div>
                          <div class="form-group">
                           <div class="row">
                               <div class="col-lg-2">
                               <label class="">image1:</label>
                           </div>
                           <div class="col-lg-8">
                               <input type="file" name="image1" class="form-control">
                           </div>
                           </div>
                       </div>
                          <div class="form-group">
                           <div class="row">
                               <div class="col-lg-2">
                               <label class="">image2:</label>
                           </div>
                           <div class="col-lg-8">
                               <input type="file" name="image2" class="form-control">
                           </div>
                           </div>
                       </div>
                          <div class="form-group">
                           <div class="row">
                               <div class="col-lg-2">
                               <label class="">category:</label>
                           </div>
                           <div class="col-lg-8">
                               <input type="text" name="cat" class="form-control">
                           </div>
                           </div>
                       </div>
                           <div class="form-group">
                      <input type="submit" name="submit" value="Submit" class="btn btn-secondary text-white form-control">
                  </div>
                   </form>
                    <?php
                if(isset($_POST['submit'])){
                    $data = [
                        'name' => $_POST['name'],
                        'contact1' => $_POST['contact1'],
                        'contact2' => $_POST['contact2'],
                        'email' => $_POST['email'],
                        'street' => $_POST['street'],
                        'address' => $_POST['address'],
                        'city' => $_POST['city'],
                        'state' => $_POST['state'],
                        'pin' => $_POST['pin'],
                        'cat' => $_POST['cat'],
                        
                    'image1' => $_FILES['image1']['name'],
                    'image2' => $_FILES['image2']['name']
                        
                    ];
                    
                    move_uploaded_file($_FILES['image1']['tmp_name'],"photo/".$_FILES['image1']['name']);
                    move_uploaded_file($_FILES['image2']['tmp_name'],"photo/".$_FILES['image2']['name']);
                    
                    insert_data('biznirman',$data);
                    redirect('list');
                }
                    ?>
               </div>
           </div>
           </div>
           <div class="col-lg-4">
               <div class="card">
                   <div class="card-body">
                       <form action="list.php" method="post">
                           <div class="form-group">
                   <label>Title:</label>
                   <input type="text" name="title" class="form-group">
               </div>
                  <div class="form-group">
                   <label>Icon:</label>
                   <input type="text" name="icon" class="form-group">
               </div>
                  <div class="form-group">
                      <input type="submit" name="send" value="Submit" class="btn btn-secondary text-white form-control">
                  </div>
                       </form>
                       <?php
                if(isset($_POST['send'])){
                    $data = [
                        'title' => $_POST['title'],
                        'icon' => $_POST['icon']
                    ];
                    insert_data('cat_egory',$data);
                    redirect('list');
                }
                    ?>
                   </div>
               </div>
           </div>
       </div>
   </div>
    </body>
</html>