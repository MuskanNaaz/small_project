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
                    <div class="card-header">
                        Latest Questions
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                           <?php 
                            $run =mysql_query("select * from questions");
                            while($row = mysql_fetch_array($run)){
                                $title = $row['title'];
                                $id = $row['id'];
                            echo "<a href='ans.php?id=$id' class='list-group-item list-group-item-action'>$title  </a>";
                            }
                            ?>
                            
                        </div>
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