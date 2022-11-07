<?php
session_start();

if (isset($_SESSION['username']) && $_SESSION['role']=="Admin") {
} else {

    header('location: login.php');
}

?>






<?php 
include('headerAdmin.php');
include('spotDel.php');
include('footer.php');
?>




