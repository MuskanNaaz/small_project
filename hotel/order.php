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
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-9">
              <div class="card">
                  <div class="card-header bg-success text-white h3">
                      <div class="card-heading ">@Order Ur Food item
                      </div>
                  </div>
                  <div class="card-body  bg-light">
                      <form action="order.php" method="post" class="" role="form">
                          <div class="form-group">
                              <div class="row">
                                  <div class="col-lg-3">
                                      <label for="reference" class="h5 ">Reference</label>
                                  </div>
                                      <div class="col-lg-3">
                                      <input type="text" name="reference" class="form-control mt-1">
                                  </div>
                                  <div class="col-lg-6">
                                      <label for="drinks" class="h3 ml-5 text-primary ">@DESSERT</label>
                                  </div>
                                  
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="row">
                            <div class="col-lg-3">
                                <label for="menu" class="h5 text-info">Menu</label>
                            </div>
                               <div class="col-lg-3">
                                <label for="quantity" class="h5 text-info">Quantity</label>
                            </div> 
                               <div class="col-lg-3">
                                <label for="menu" class="h5 text-info ml-5">Menu</label>
                            </div>
                               <div class="col-lg-3">
                                <label for="quantity" class="h5 text-info">Quantity</label>
                            </div> 
                          </div>
                          </div>
                          <div class="form-group">
                              <div class="row">
                                  <div class="col-lg-3">
                                      <label for="samosa" class="h5">Samosa</label>
                                  </div>
                                  <div class="col-lg-3">
                                      <input type="text" name="samosa" class="form-control">
                                  </div>
                                  <div class="col-lg-3">
                                      <label for="gulabjamun" class="ml-5 h5">Gulab Jamun</label>
                                  </div>
                                  <div class="col-lg-3">
                                      <input type="text" name="gulabjamun" class="form-control">
                                  </div>
                              </div>
                          </div>
                           <div class="form-group">
                              <div class="row">
                                  <div class="col-lg-3">
                                      <label for="pakora" class="h5">Pakora</label>
                                  </div>
                                  <div class="col-lg-3">
                                      <input type="text" name="pakora" class="form-control">
                                  </div>
                                  <div class="col-lg-3">
                                      <label for="hotchocolate" class="ml-5 h5">Hot Chocolate</label>
                                  </div>
                                  <div class="col-lg-3">
                                      <input type="text" name="hotchocolate" class="form-control">
                                  </div>
                              </div>
                          </div>
                           <div class="form-group">
                              <div class="row">
                                  <div class="col-lg-3">
                                      <label for="cutlet" class="h5">Cutlet</label>
                                  </div>
                                  <div class="col-lg-3">
                                      <input type="text" name="cutlet" class="form-control">
                                  </div>
                                  <div class="col-lg-3">
                                      <label for="coffee" class="ml-5 h5">Coffee</label>
                                  </div>
                                  <div class="col-lg-3">
                                      <input type="text" name="coffee" class="form-control">
                                  </div>
                              </div>
                          </div>
                           <div class="form-group">
                              <div class="row">
                                  <div class="col-lg-3">
                                      <label for="jeerarice" class="h5">Jeera Rice</label>
                                  </div>
                                  <div class="col-lg-3">
                                      <input type="text" name="jeerarice" class="form-control">
                                  </div>
                                  <div class="col-lg-3">
                                      <label for="colddrink" class="ml-5 h5">Cold Drink</label>
                                  </div>
                                  <div class="col-lg-3">
                                      <input type="text" name="colddrink" class="form-control">
                                  </div>
                              </div>
                          </div>
                           <div class="form-group">
                              <div class="row">
                                  <div class="col-lg-3">
                                      <label for="dalmakhani" class="h5">Dal Makhani</label>
                                  </div>
                                  <div class="col-lg-3">
                                      <input type="text" name="dalmakhani" class="form-control">
                                  </div>
                                  <div class="col-lg-3">
                                      <label for="plainpizza" class="ml-5 h5">Plain Pizza</label>
                                  </div>
                                  <div class="col-lg-3">
                                      <input type="text" name="plainpizza" class="form-control">
                                  </div>
                              </div>
                          </div>
                           <div class="form-group">
                              <div class="row">
                                  <div class="col-lg-3">
                                      <label for="butternaan" class="h5">Butter Naan</label>
                                  </div>
                                  <div class="col-lg-3">
                                      <input type="text" name="butternaan" class="form-control">
                                  </div>
                                  <div class="col-lg-3">
                                      <label for="tandoori" class="ml-5 h5">Tandoori Pizza</label>
                                  </div>
                                  <div class="col-lg-3">
                                      <input type="text" name="tandoori" class="form-control">
                                  </div>
                              </div>
                          </div>
                           <div class="form-group">
                              <div class="row">
                                  <div class="col-lg-3">
                                      <label for="veg" class="h5">Veg Biryani</label>
                                  </div>
                                  <div class="col-lg-3">
                                      <input type="text" name="veg" class="form-control">
                                  </div>
                                  <div class="col-lg-3">
                                      <label for="burger" class="ml-5 h5">Burger</label>
                                  </div>
                                  <div class="col-lg-3">
                                      <input type="text" name="burger" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="row">
                                 <div class="col-lg-3"></div>
                                  <div class="col-lg-2 h5">Total Amount:</div>
                                  <div class="col-lg-3">
                                      <input type="text" name="total" class="form-control">
                                  </div>
                                  <div class="col-lg-4">
                                      <input type="submit" name="add" value="ADD" class="btn btn-info">
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="row">
                                  <div class="col-lg-6">
                                    <input type="submit" class="btn btn-success form-control" name="send" value="Submit">
                                     
                                  </div>
                              </div>
                          </div>
                     </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <?php
    
    
    
    ?>
  <?php
    if(isset($_POST['send'])){
        $reference=$_POST['reference'];
        $samosa=$_POST['samosa'];
        $gulabjamun=$_POST['gulabjamun'];
        $pakora=$_POST['pakora'];
        $hotchocolate=$_POST['hotchocolate'];
        $cutlet=$_POST['cutlet'];
        $coffee=$_POST['coffee'];
        $jeerarice=$_POST['jeerarice'];
        $colddrink=$_POST['colddrink'];
        $dalmakhani=$_POST['dalmakhani'];
        $plainpizza=$_POST['plainpizza'];
        $butternaan=$_POST['butternaan'];
        $tandoori=$_POST['tandoori'];
        $veg=$_POST['veg'];
        $burger=$_POST['burger'];
        
        
    function add($a=0,$b=0,$c=0,$d=0,$e=0,$f=0,$g=0,$h=0,$i=0,$j=0,$k=0,$l=0,$m=0,$n=0){
        
       return $total = ($a*7)+($b*10)+($c*7)+($d*25)+($e*7)+($f*10)+($g*70)+($h*30)+($i*60)+($j*90)+($k*40)+($l*80)+($m*65)+($n*45);
    }
        $total = add($samosa,$gulabjamun,$pakora,$hotchocolate,$cutlet,$coffe,$jeerarice,$colddrink,$dalmakhani,$plainpizza,$butternaan,$tandoori,$veg,$burger); 
         
        $query="insert into hotel(reference,samosa,gulabjamun,pakora,hotchocolate,cutlet,coffee,jeerarice,colddrink,dalmakhani,plainpizza,butternaan,tandoori,veg,burger,total) value('$reference','$samosa','$gulabjamun','$pakora','$hotchocolate','$cutlet','$coffee','$jeerarice','$colddrink','$dalmakhani','$plainpizza','$butternaan','$tandoori','$veg','$burger','$total')";
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