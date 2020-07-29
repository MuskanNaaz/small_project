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
  <div class="container-fluid mt-4">
      <div class="row">
          <div class="col-lg-12">
          <table class=" table table-striped">
             <thead>
              <tr>
                      <th colspan="3"  class="text-center bg-primary text-white h5">CASH MEMO
                      <button type="button" class="btn btn-danger d-print-none float-right" onclick="window.print()">Print</button>
                      
                      </th>
                  </tr>
                 <tr>
                      <th>Samosa</th>
                      <th>Gulabjamun</th>  
                      <th>Pakora</th>
                      <th>hotchocolate</th>
                      <th>cutlet</th>
                      <th>coffee</th>    
                      <th>jeerarice</th>
                      <th>colddrink</th>
                     <th>dalmakhani</th>
                      <th>plainpizza</th>
                      <th>butternaan</th>
                      <th>tandoori</th>
                      <th>veg</th>
                      <th>burger</th>
                      <th>Total</th>
                      </tr>
              </thead>
              <tbody>
                  <?php
        $query = mysql_query("select * from hotel");
            $row = mysql_fetch_array($query);
            $reference=$row['reference'];
            $samosa=$row['samosa'];
            $gulabjamun=$row['gulabjamun'];
            $pakora=$row['pakora'];
            $hotchocolate=$row['hotchocolate'];
            $cutlet=$row['cutlet'];
            $coffee=$row['coffee'];
            $jeerarice=$row['jeerarice'];
            $colddrink=$row['colddrink'];
            $dalmakhani=$row['dalmakhani'];
            $plainpizza=$row['plainpizza'];
            $butternaan=$row['butternaan'];
            $tandoori=$row['tandoori'];
            $veg=$row['veg'];
            $burger=$row['burger'];
            $total=$row['total'];
    
                  ?>
              </tbody>
          </table>
          </div>
      </div>
    </div>
    
    </body>
</html>
