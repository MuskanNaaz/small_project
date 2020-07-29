<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body class= "bg-secondary" >
    <nav class="navbar nabvar-expand-lg navbar-dark bg-danger">
        <a href="index.php" class="navbar-brand">
            <img src="logo.png">
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="order.php" class="btn btn-danger mr-3">Order Food</a>
            
                <a href="C_details.php" class="btn btn-danger mr-5">Customer_Info</a>
            </li>
        </ul>   
       </nav>
       <div class="container-fluide mt-3 ">
           <div class="row"> 
               <div class="col-lg-4"></div>
               <div class="col-lg-4">
                   <div class="card">
                       <div class="card-header bg-dark">
                           <div class="card-heading h3 text-white"># Customer Details</div>
                       </div>
                       <div class="card-body">
                           <form action="C_details.php" method="post">
                               <div class="form-group">
                                  <div class="row">
                                      <div class="col-lg-4">
                                          <label for="name" class="h6">Customer_Name</label>
                                      </div>
                                      <div class="col-lg-8">
                                          <input type="text" name="name" class="form-control">
                                      </div>
                                  </div> 
                               </div>
                               <div class="form-group">
                                  <div class="row">
                                      <div class="col-lg-4">
                                          <label for="c_mobile" class="h6">C_Mobile No.</label>
                                      </div>
                                      <div class="col-lg-8">
                                          <input type="text" name="c_mobile" class="form-control">
                                      </div>
                                  </div> 
                               </div>
                               <div class="form-group">
                                  <div class="row">
                                      <div class="col-lg-4">
                                          <label for="c_address" class="h6">Customer_Address</label>
                                      </div>
                                      <div class="col-lg-8">
                                          <input type="text" name="c_address" class="form-control">
                                      </div>
                                  </div> 
                               </div>
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-lg-6">
                                           <label for="payment" class="h6">Payment Option</label>
                                       </div>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-lg-6">
                                           <input type="radio" id="payment">
                                           <label for="payment" class="h6">Paypal</label>
                                       </div>
                                          <div class="col-lg-6">
                                           <input type="radio" id="payment">
                                           <label for="payment" class="h6">IDBI Bank</label>
                                       </div>
                                         <div class="col-lg-6">
                                           <input type="radio" id="payment">
                                           <label for="payment" class="h6">Paytm</label>
                                       </div>
                                          <div class="col-lg-6">
                                           <input type="radio" id="payment">
                                           <label for="payment" class="h6">Cash</label>
                                       </div>
                                   </div>
                               </div>
                               
                               <div class="form-group">
                                  
                                      <div class="col-lg-4">
                                          <label for="rating" class="h6">Rate_Us</label></div>
                                      <div class="form-group">
                                      <div class="col-lg-8">
                                         <span  data-rating="1"><i class="fas fa-star fa-2x"></i>
                                             </span>
                                             <span  data-rating="2"><i class="fas fa-star fa-2x"></i>
                                             </span>
                                             <span  data-rating="3"><i class="fas fa-star fa-2x"></i>
                                             </span>
                                             <span  data-rating="4"><i class="fas fa-star-half-alt fa-2x"></i>
                                             </span>
                                             <span  data-rating="5"><i class="far fa-star fa-2x"></i>
                                             </span>
                                             <input type="hidden" name="rating" class="rating-value" value="1.9">
                                          </div>
                                      </div>
                                  </div>
                                 <div class="form-group">
                                     <input type=submit name="send" value="Sumbit" class="btn btn-success">
                                 </div>
                               
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <?php
    if(isset($_POST['send'])){
        $name=$_POST['name'];
        $c_mobile=$_POST['c_mobile'];
        $c_address=$_POST['c_address'];
        $rating=$_POST['rating'];
        $query="insert into c_details(name,c_mobile,c_address,rating)value('$name','$c_mobile','$c_address','$rating')";
        $run=mysql_query($query);
        if($run){
                echo "success";
            }
            else{
            echo "fail";
            }
        
    }
    ?>
</body>
</html>