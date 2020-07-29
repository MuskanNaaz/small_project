<?php
$connect=mysql_connect('localhost','root','');
$db=mysql_select_db('school',$connect);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert</title>
    <link href="bootstrap.css" rel="stylesheet">
</head>
<body>
   <nav class="navbar navbar-expand-lg bg-secondary ">
        <a href="index.php" class="navbar-brand">
           <img src="logo1.PNG">
        </a>
        <ul class="navbar-nav ml-auto p-5 ">
            <li class="nav-item">
                <a href="#" class="nav-link text-white">About Us</a>
            </li><li class="nav-item">
                <a href="#" class="nav-link text-white">Acdemic</a>
            </li><li class="nav-item">
                <a href="#" class="nav-link text-white">Admission &amp; Exam</a>
            </li><li class="nav-item">
                <a href="#" class="nav-link text-white">Student Service</a>
            </li><li class="nav-item">
                <a href="login.php" class="nav-link text-white">Login</a>
            </li>
        </ul>
    </nav>
   <div class="container-fluide mt-3">
       <div class="row">
           <div class="col-lg-3"></div>
           <div class="col-lg-6">
           <div class="card">
                 <div class="card-header">
                     <div class="heading h4 text-primary">Registration for new Student</div>
                 </div>
                 <div class="card-body bg-info">
                     <form action="insert.php" method="post">
                   <div class="form-group">
                      <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="name" placeholder="Enter ur Full_name" class="form-control"></div>
                       <div class="col-lg-6">
                           <input type="text" name="reg" placeholder="Enter ur Registration Number" class="form-control"></div>
                       </div>
                   </div>
                      <div class="form-group">
                          <div class="row">
                              <div class="col-lg-6">
                                <input type="text" name="father_name" placeholder="Enter ur Father_name" class="form-control"></div>
                              <div class="col-lg-6">
                                <input type="text" name="mother_name" placeholder="Enter ur Mother_name"class="form-control"> </div>
                          </div>
                      </div>  
                      
                      <div class="form-group">
                          <input type="radio" name="male" value="male">Male
                          <input type="radio" name="male" value="female" checked>Female
                      </div>
                      <div class="form-group">
                         <div class="row">
                             <div class="col-lg-6">
                             <input type="number" name="contact1" placeholder="Contact1" class="form-control"></div>
                             <div class="col-lg-6">
                                 <input type="number" name="contact2" placeholder="Contact2" class="form-control">
                             </div>
                         </div>
                          </div>
                          <div class="form-group">
                         <div class="row">
                             <div class="col-lg-6">
                             <input type="email" name="email" placeholder="Email" class="form-control"></div>
                             <div class="col-lg-6">
                                 <input type="password" name="password" placeholder="Password" class="form-control">
                             </div>
                         </div>
                          </div>
                <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                        <input type="text" name="school" placeholder="Your last school" class="form-control"></div>
                      <div class="col-lg-6">
                        <input type="text" name="school_add" placeholder="Your last school address" class="form-control"></div>
                    </div>
                </div>                   
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                          <input type="number" name="last_class" placeholder="Enter ur previous class"class="form-control" ></div>
                    <div class="col-lg-6"> 
                         <input type="number" name="last_marks" placeholder="Enter ur previous class Marks%" class="form-control"></div>
                </div>
                         </div>     
               
            <div class="form-group">
              <div class="row">
                  <div class="col-lg-6">
                  <input type="text" name="address" placeholder="Address"class="form-control">
                    </div>
                  <div class="col-lg-6">
                      <input type="text" name="city" placeholder="City" class="form-control">
                  </div>
              </div>
               </div>
                  <div class="form-group">
                              <div class="row">
                                  <div class="col-lg-6">
                                  <input type="text" name="state" placeholder="State" class="form-control">
                                </div>
                                  <div class="col-lg-6">
                                    <input type="text" name="nationality" placeholder="Nationallity" class="form-control">
                                     </div>
                              </div>
</div>
               
               <div class="form-group">
                   <input type="submit" value="send"  class="btn btn-success" name="send">
                   
               </div>
               
               </form>
               
           </div>
                 </div>
             </div>
               <?php
                if(isset($_POST['send'])){
                    $name=$_POST['name'];
                    $reg=$_POST['reg'];
                    $father_name=$_POST['father_name'];
                    $mother_name=$_POST['mother_name'];
                    $gender=$_POST['male'];
                    $contact1=$_POST['contact1'];
                    $contact2=$_POST['contact2'];
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $school=$_POST['school'];
                    $school_add=$_POST['school_add'];
                    $last_class=$_POST['last_class'];
                    $last_marks=$_POST['last_marks'];
                    $nationality=$_POST['nationality'];
                    $address=$_POST['address'];
                    $city=$_POST['city'];
                    $state=$_POST['state'];
                    $query="insert into sms (name,reg,father_name,mother_name,school,school_add,gender,contact1,contact2,email,password,last_class,last_marks,nationality ,address,city,state) value('$name','$reg','$father_name','$mother_name','$school','$school_add','$gender' ,'$contact1','$contact2' ,'$email','$password','$last_class','$last_marks','$nationality' ,'$address','$city','$state')";
                    $run=mysql_query($query);
                if($run){
                    echo "success";
                }
                else{
                echo "fail";
                }
                }
    
    ?>
           </div>     
       </div>
   
    
</body>
</html>