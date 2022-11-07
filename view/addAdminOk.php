<?php
session_start();

if (isset($_SESSION['username']) && $_SESSION['role']=="Admin") {
} else {

    header('location: login.php');
}

?>


<!DOCTYPE html>
<html>

 <?php include('headerAdmin.php')?>




<span style="color: green"> <b> <h1 align="center"><?php echo  "successfully completed ";?></h1> </span>

<body>





</body>
<?php include('footer.php')?>
</html>