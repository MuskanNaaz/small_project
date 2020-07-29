<?php
$connect=mysql_connect('localhost','root','');
$db=mysql_select_db('school',$connect);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary text-white">
        <a href="index.php" class="navbar-brand">
           <img src="logo1.PNG" class="mt-0 ml-5 pl-5">
        </a>
        <ul class="navbar-nav ml-auto p-5  ">
            <li class="nav-item">
                <a href="#" class="nav-link text-white">About Us</a>
            </li><li class="nav-item">
                <a href="#" class="nav-link text-white">Acdemic</a>
            </li><li class="nav-item">
                <a href="#" class="nav-link text-white">Admission&amp;Exam</a>
            </li><li class="nav-item">
                <a href="#" class="nav-link text-white">Student Service</a>
            </li>
               <li class="nav-item">
                <a href="insert.php" class="nav-link mr-3 text-white">Registration</a>
            </li> 
               <li class="nav-item">
                <a href="login.php" class="btn btn-success text-white">Login</a>
            </li>
        </ul>
    </nav>
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-4"></div>
             <div class="col-lg-8">
                <table class="table table-striped table-bordered w-100">
                <thead>
                  <tr>
                      <th>id</th>
                      <th>reg</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Gender</th>
                    </tr>
                    <tr>
                        <th>Father_name</th>
                        <th>Mother_name</th>
                    </tr>
                    <tr>
                        <th>Contact1</th>
                        <th>Contact2</th>
                    </tr>
                    <tr>
                        <th>email</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>school</th>
                        <th>school_add</th>
                    </tr>
                    <tr>
                        <th>last_class</th>
                        <th>last_marks</th>
                    </tr>
                    <tr>
                        <th>nationality</th>
                        <th>address</th>
                    </tr>
                    <tr>
                        <th>city</th>
                        <th>state</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($_GET['submit'])){
                          $email=$_GET['email']; 
                        $query="select * from sms where email like '%$sms%'";
                        $run=mysql_query($query);
                        while($row=mysql_fetch_array($run)){
                            $id=$row['id'];
                            $name=$row['name'];
                            $reg=$row['reg'];
                            $father_name=$row['father_name'];
                            $mother_name=$row['mother_name'];
                            $gender=$row['gender'];
                            $contact1=$row['contact1'];
                            $contact2=$row['contact2'];
                            $email=$row['email'];
                            $school=$row['school'];
                            $school_add=$row['school_add'];
                            $last_class=$row['last_class'];
                            $last_marks=$row['last_marks'];
                            $nationality=$row['nationality'];
                            $address=$row['address'];
                            $city=$row['city'];
                            $state=$row['state'];
                            echo
                                "
                                <tr>
                                <td>$id<td>
                                <td>$reg<td>
                                <tr>
                                <tr>
                                <td>$name<td>
                                <td>$gender<td>
                                <tr>
                                <tr>
                                <td>$father_name<td>
                                <td>$mother_name<td>
                                <tr>
                                <tr>
                                <td>$contact1<td>
                                <td>$contact2<td>
                                <tr>
                                <tr>
                                <td>$email<td>
                                <td><td>
                                <tr>
                                <tr>
                                <td>$school<td>
                                <td>$school_add<td>
                                <tr>
                                <tr>
                                <td>$last_class<td>
                                <td>$last_marks<td>
                                <tr>
                                <tr>
                                <td>$nationality<td>
                                <td>$address<td>
                                <tr>
                                <tr>
                                <td>$city<td>
                                <td>$state<td>
                                <tr>";
                            }
                            }
                        ?>
                    </tbody>
                 </table>
                 
             </div>
         </div>
     </div>
      
</body>
</html>