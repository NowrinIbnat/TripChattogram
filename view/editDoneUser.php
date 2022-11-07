<?php
session_start();

if (isset($_SESSION['username'])) {
} else {

    header('location: login.php');
}

?>


<!DOCTYPE html>
<html>

 <?php include('headerUser.php')?>




<span style="color: green"> <b> <h1 align="center"><?php echo  "successfully completed ";?></h1> </span>

<body>





</body>
<?php include('footer.php')?>
</html>