<?php
session_start();

if (isset($_SESSION['username'])) {
} else {

    header('location: login.php');
}

?>


<!DOCTYPE html>
<html>

 <?php include('header.php')?>




<span style="color: green"> <b> <h2 align="center"><?php echo  "Password Changed Successfully. Please Login Again ";?></h2> </span>

<body>





</body>
<?php include('footer.php')?>
</html>