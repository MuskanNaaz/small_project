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
              <a href="index.php" class="btn btn-light mr-5 h5">LogOut</a></li></ul>
    </nav>
    <div class="container-fluid mt-3">
        <div class="row">
        <div class="col-lg-3">
            <a href="insert.php" class="btn btn-info btn-block">INSERT</a>
            <a href="post.php" class="btn btn-info btn-block">POST</a>
            <a href="manage.php" class="btn btn-info btn-block">MANAGE</a>
            <a href="cat.php" class="btn btn-info btn-block">CATEGORY</a>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header h4 text-success">
                    <div class="card-heading">
                        MANAGE .....
                    </div>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                <tbody>
                <div class="list-group">
                           <?php
                           $run = mysql_query("select * from post");
                           while($row = mysql_fetch_array($run)){
                                $title = $row['title'];
                                $id = $row['id'];
                            echo "<tr>
                           <td> <a href='post.php?id=$id' class='list-group-item list-group-item-action'>$title  </a></td>
                           <td><div class='btn-group'>
                                        
                                        <a href='' class='btn btn-info'>edit</a>
                                        <a href='' class='btn btn-success'>view</a>
                                        <a href='delete.php?del=$id' class='btn btn-danger'>delete</a>
                                    </div>
                                </td>
                                </tr>";
                            }
                           ?>
                       </div>
                    </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>