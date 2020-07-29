<?php include"config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
          <a href="index.php" class="navbar-brand">Answer.com</a>
        <ul class="navbar-nav ml-auto">
           <li class="nav-item">
               <a href="insert.php" class="btn btn-danger">Post the Question</a>
            </li></ul>
    </nav>  
    <div class="container mt-5">
   
       <div class="row">
           <div class="col-lg-4 offset-lg-4">
               <div class="card">
                   <div class="card-body">
                       <form action="insert.php" method="post">
                           <div class="form-group">
                               <label for="" class="m-0 p-0 small">Question Title</label>
                               <input type="text" class="form-control" name="title" placeholder="enter question">
                           </div>
                              <div class="form-group">
                               <label for="" class="m-0 p-0 small">Question by</label>
                               <input type="text" class="form-control" name="q_by" placeholder="enter your name">
                           </div>
                           <div class="form-group">
                               <input type="submit" name="send" class="btn btn-danger btn-block">
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>       
</body>
</html>
<?php 
if(isset($_POST['send'])):
    $title =$_POST['title'];
    $q_by =$_POST['q_by'];
$run = mysql_query("insert into questions (title,q_by) value ('$title','$q_by')");
echo "<script>window.open('index.php','_self')</script>";


endif;
?>