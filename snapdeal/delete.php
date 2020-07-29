<?php
$connect=mysql_connect('localhost','root','');
$db=mysql_select_db('product',$connect);
if(isset($_GET['del'])){
    $del=$_GET['del'];
    $query="delete from  where id='$del'";
    $run=mysql_query($query);
    header("location:manage_cat.php");
}
    ?>