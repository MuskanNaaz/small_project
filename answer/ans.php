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
            <div class="col-lg-8">
                <div class="card">
                  <div class="card-body">
                     <?php 
                      if(isset($_GET['id'])):
                        $id  = $_GET['id'];
                      $run = mysql_query("select * from questions where id='$id'");
                      $row = mysql_fetch_array($run);
                      ?>
                      <h2 class="text-capitalize"><?= $row['title'];?></h2>
                      <p class="small tex-muted">Post by: <?= $row['q_by'];?>
                          <span class="float-right"><?= date("D d-M-Y h:m:i A",strtotime($row['title']));?></span>
                      </p>
                      <?php endif;?>
                      
                         <?php 
                      $q_id = $_GET['id'];
                      $query = mysql_query("select * from ans where q_id='$q_id'");
                      while($row = mysql_fetch_array($query)){
                          $answer =$row['answer'];
                          $a_by =$row['a_by'];
                          $doc =$row['doc'];
                          $id =$row['id'];
                          echo "<div class='card mt-4'>
                          <div class='card-body'>
                              <h4>$answer</h4>
                              <p class='small tex-muted'>Post by: $a_by
                          <span class='float-right'>$doc</span>
                      </p>
                          </div>
                      </div>";
                      }
                      ?>
                         
                  </div>
                  <div class="card-footer">
                      <form action="ans.php" method="post">
                          <div class="input-group">
                              <input type="text" name="answer" class="form-control" placeholder="enter answer">
                              <input type="text" name="a_by" class="form-control" placeholder="enter your name">
                              <input type="hidden" name="q_id" value="<?= $_GET['id'];?>">
                              <input type="submit" name="send" class="btn btn-success">
                          </div>
                      </form>
                      <?php 
                      if(isset($_POST['send'])):
                      
                        $answer =$_POST['answer'];
                        $a_by =$_POST['a_by'];
                      $q_id = $_POST['q_id'];
                      $run = mysql_query("insert into ans (answer,a_by,q_id) value ('$answer','$a_by','$q_id')");
                     echo "<script>window.open('ans.php?id=".$_POST['q_id']."','_self')</script>";
                        endif;
                      
                      ?>
                  </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        Trending Questions
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                           <?php 
                            $run =mysql_query("select * from questions");
                            while($row = mysql_fetch_array($run)){
                                $title = $row['title'];
                            echo "<a href='' class='list-group-item list-group-item-action'>$title  </a>";
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