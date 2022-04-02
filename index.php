<?php include ('header.php') ; ?>


<?php  
        if(isset($_GET['message']))
        echo "<h4>". $_GET['message']."</h4>";
        
        
        ?>
<?php  
        if(isset($_GET['msg']))
        echo "<h4>". $_GET['msg']."</h4>";
        
        
        ?>





<form class="form" action="login_process.php" method="POST">
    <div class="form-group">
        <label for="uname">UserName</label>
        <input type="text" name="uname" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group">

        <input type="submit" name="login" value="Login" class="btn btn-success">

    </div>

</form>
<?php include('footer.php') ; ?>