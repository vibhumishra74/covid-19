<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "coronadb";
$con = mysqli_connect($server,$user,$password,$database);
if(!$con){
   
    echo "connection not successfull".mysqli_connect_error($con);
}else{
    echo "conncted ";
}



?>