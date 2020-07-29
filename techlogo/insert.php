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
             <a href="index.php" class="btn btn-light h5">Home</a></li></ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
              <a href="logout.php" class="btn btn-light h5">LogOut</a></li></ul>
    </nav>
     <?php 
                      if(isset($_GET['id'])):
                        $id  = $_GET['id'];
                      $run = mysql_query("select * from post ");
                      $row = mysql_fetch_array($run);
                      ?>
                      <h2 class="text-capitalize"><?= $row['title'];?></h2>
                      <p class="small tex-muted float-right">Post by: <?= $row['q_by'];?></p>
                      <p class=""><?= $row['content'];?></p>
                      
                          <span class="float-right"><?= date("D d-M-Y h:m:i A",strtotime($row['title']));?></span>
                      
                      <?php endif;?>
                      
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
                        QUESTION .....
                    </div>
                </div>
                <div class="card-body">
                    <form action="insert.php" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                            <label for="" class="small">Question Title:</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter your Query">
                        
                       </div>
                       
                       <div class="form-group">
                           <label for="" class="small">Question By:</label>
                           <input type="text" class="form-control" name="q_by">
                       </div>
                       
                    
                        <div class="form-group">
                           <label for="" class="small">Add Content:</label>
                        <textarea rows="5" cols="25" placeholder="Enter Your Content" class="form-control" name="content"></textarea>
                       </div>
                       <div class="form-group">
                           <input type="file" name="img1">
                       </div>
                          <div class="form-group">
                           <input type="file" name="img2">
                       </div>
                          <div class="form-group">
                           <input type="file" name="img3">
                       </div>
                       <input type="hidden" name="q_id" value="<?= $_GET['id'];?>">
                       <div class="form-group">
                        <input type="submit" name="send"  class="btn btn-success form-control">
                       </div>
                    </form>
                                  
                                   
                </div>
            </div>
        </div>
    </div>
    
 
<?php
                    if(isset($_POST['send'])):
                    $title =$_POST['title'];
                    $q_by =$_POST['q_by'];
                    $content = $_POST['content'];
                    $img1=$_FILES['img1']['name'];
                    $img2=$_FILES['img2']['name'];
                    $img3=$_FILES['img3']['name'];
                    $tmp_file=$_FILES['img1']['tmp_name'];
                    $tmp_file=$_FILES['img2']['tmp_name'];
                    $tmp_file=$_FILES['img3']['tmp_name'];
   
    
    move_uploaded_file($tmp_file,"folder/$img1");
    move_uploaded_file($tmp_file,"folder/$img2");
    move_uploaded_file($tmp_file,"folder/$img3");
                    
                    $run = mysql_query("insert into post(title,q_by,content,img1,img2,img3) value('$title','$q_by','$content','$img1','$img2','$img3')");
                    echo "<script>window.open('insert.php?id=".$_POST['q_id']."','_self')</script>";
                        endif;
                    ?>
    </div>

</body>
</html>