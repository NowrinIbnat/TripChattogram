<?php
session_start();

if (isset($_SESSION['username']) && $_SESSION['role']=="Admin") {
} else {

    header('location: login.php');
}

include('headerAdmin.php');

include('homepage.php');


include('footer.php');

?>


