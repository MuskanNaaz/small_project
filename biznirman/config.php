<?php
$connect = mysql_connect('localhost','root','');
$db= mysql_select_db('bms',$connect);

function insert_data($table,$fields){
    $keys= implode(",",array_keys($fields));
    $values=implode("','",array_values($fields));
    $query = "INSERT INTO $table ($keys) value ('$values')";
    $run = mysql_query($query);
}
//calling  
function calling_data($table){
    $array =[];
    $query = "SELECT * FROM $table";
    $run = mysql_query($query);
    while($row = mysql_fetch_array($run)){
        $array[] = $row;
    }
    return $array;
}
function redirect($page){
    echo"<script>window.open('$page.php','_self')</script>";
}

function count_data($table){
    $query="SELECT * FROM $table";
    $run = mysql_query($query);
    $count = mysql_num_rows($run);
    return $count;
    
}

?>