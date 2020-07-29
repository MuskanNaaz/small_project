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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
 <nav class="navbar navbar-brand-lg navbar-light bg-success text-black">
       <a href="index.php" class="navbar-brand">
           <img src="cse-department-logo-black.png" width="35%">
       </a>
       <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
              <a href="index.php" class="btn btn-light mr-5 h5">LogOut</a></li></ul>
    </nav>
    <div class="container-fluid mt-3">
        <div class="row">
        <div class="col-lg-3">
            <a href="insert.php" class="btn btn-info btn-block">INSERT</a>
            <a href="#" class="btn btn-info btn-block">POST</a>
            <a href="manage.php" class="btn btn-info btn-block">MANAGE</a>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header h4 text-success">
                    <div class="card-heading">
                        POST .....
                    </div>
                </div>
                <div class="card-body">
                    <form action="post.php" method="post" enctype="multipart/form-data">
                       <?php 
                      if(isset($_GET['id'])):
                        $id  = $_GET['id'];
                      $run = mysql_query("select * from post where id='$id'");
                      $row = mysql_fetch_array($run);
                      ?>
                      <h2 class="text-capitalize"><?= $row['title'];?></h2>
                      <p class="small tex-muted">Post by: <?= $row['q_by'];?>
                          <span class="float-right"><?= date("D d-M-Y h:m:i A",strtotime($row['title']));?></span>
                      </p>
                      <?php endif;?>
                      
                      <?php 
                      $query = mysql_query("select * from answer");
                      while($row = mysql_fetch_array($query)){
                          $answer =$row['answer'];                        
                          $a_by =$row['a_by'];
                          $doc =$row['doc'];
                          $id =$row['id'];
                          echo "<div class='card mt-4'>
                          <div class='card-body'>
                              <h5>$answer</h5>
                              <p class='small tex-muted'>Post by: $a_by
                          <span class='float-right'>$doc</span>
                      </p>
                          </div>
                      </div>";
                      }
                      ?>
                      
                      
                    </form> 
                </div>
                
                <div class="card-footer">
                    <form action="post.php" method="post">
                        <div class="form-group">
                           <label for="" class="small">Add Content:</label>
                        <textarea rows="5" cols="25" placeholder="Enter Your Content" class="form-control" name="answer"></textarea>
                       </div>
                       <div class="form-group">
                        <input type="text" name="a_by" class="form-control" placeholder="enter your name">
                       </div>
                       <input type="hidden" name="q_id" value="<?= $_GET['id'];?>">
                       <div class="form-group">
                        <input type="submit" name="send"  class="btn btn-success form-control">
                       </div>
                    </form>
                    <?php
                    if(isset($_POST['send'])):
                    $answer = $_POST['answer'];
                    
                    $a_by = $_POST['a_by'];
                    
                    $run = mysql_query("insert into answer(answer,a_by,q_id) value('$answer','$a_by','$q_id')");
                    echo "<script>window.open('answer.php?id=".$_POST['q_id']."','_self')</script>";
                        endif;
                    ?>
                </div>
            </div>               
        </div>
      </div>
    </div>   
</body>
</html>