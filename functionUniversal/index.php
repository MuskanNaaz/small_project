<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    <nav class="navbar nabvar-expand-lg navbar-dark bg-danger">
        <a href="#" class="navbar-brand">LOGO</a>
    </nav>
    <div class="container-fluide mt-3">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <div class="card-heading h4">Calling</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>father</th>
                                <th>phone</th>
                                <th>email</th>
                                <th>address</th>
                                <th>action</th>
                            </tr>
                        


                        <?php
                $smsfun = calling_data('smsfun');
                foreach($smsfun as $cal){
                    ?>
                        <tr>
                            <td>
                                <?= $cal['id'];?>
                            </td>
                            <td>
                                <?= $cal['fname']." " . $cal['lname'];?>
                            </td>
                            <td>
                                <?= $cal['father_name'];?>
                            </td>
                            <td>
                                <?= $cal['phone'];?>
                            </td>
                            <td>
                                <?= $cal['email'];?>
                            </td>
                            <td>
                                <?= $cal['address'];?>
                            </td>
                            <td>
                                <div class='btn-group'>
                                    <a href='#' class='btn btn-danger'>X</a>
                                    <a href='#' class='btn btn-info'>edit</a>
                                    <a href='#' class='btn btn-success'>view</a>
                                </div>
                        </tr>
                        
                        <?php } ?>
                        </table>
                    </div>
                </div>

            </div>

            <?php
                if(isset($_POST['create'])){
                    $data = [
                        'fname' => $_POST['fname'],
                        'lname' => $_POST['lname'],
                        'father_name' => $_POST['father_name'],
                        'phone' => $_POST['phone'],
                        'email' => $_POST['email'],
                        'address' => $_POST['address']
                    ];
                    insert_data('smsfun',$data);
                    redirect('index');
                }
                    ?>
            <div class="col-lg-3">
                <form action="index.php" method="post">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <div class="card-heading h4">Insert</div>
                        </div>
                        <div class="card-body">


                            <div class="form-group">
                                <label class="h5">Fname</label>
                                <input type="text" name="fname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="h5">lname</label>
                                <input type="text" name="lname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="h5">father_name</label>
                                <input type="text" name="father_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="h5">phone</label>
                                <input type="number" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="h5">email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="h5">address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="create" class="btn btn-danger btn-block">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>
