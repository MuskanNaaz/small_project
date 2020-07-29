<?php
$connect=mysql_connect('localhost','root','');
$db=mysql_select_db('data2',$connect);
if(isset($_GET['del'])){
    $del=$_GET['del'];
    $query="delete from post where id='$del'";
    $run=mysql_query($query);
    header("location:manage.php");
    
}
    ?>