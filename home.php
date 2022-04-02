<?php include('header.php') ?>
<?php session_start(); ?>

<?php  
if(isset($_SESSION['uname'])){

  echo  "<h2>Hello ".$_SESSION['uname']."</h2>";
}
else{
    
    header('location:index.php?message=You need to login to enter the site');
}
?>


<a href="logout.php" class="btn btn-danger">Log out</a>


<?php include('footer.php')?>