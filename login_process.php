<?php  include('dbcon.php'); ?>
<?php session_start(); ?>
<?php  
 
 if(isset($_POST['login'])){

    $username=$_POST['uname'];
    $email=$_POST['email'];
 }
 $query="select * from `users` where `username`='$username' and `email`='$email' ";

 $result=mysqli_query($connection,$query);
 if(!$result){

    die("query failed".mysqli_error($connection));
 }
 else{

    $row=mysqli_num_rows($result);
   if($row==1){

$_SESSION['uname']=$username;
header('location:home.php');
   }
   else{
    header('location:index.php?message=sorry your username or Email id is invalid');
   }
 }




?>