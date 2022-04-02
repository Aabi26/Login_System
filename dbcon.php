<?php  
$server="localhost";
$username="root";
$password="";
$database="login_system";


$connection=mysqli_connect($server,$username,$password,$database);

if(!$connection){
    die("connection failed".mysqli_connect_error());
}




?>