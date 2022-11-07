<?php
session_start();

if (isset($_SESSION['username'])) {
} else {

    header('location: login.php');
}

include('headerUser.php');

include('homepage.php');


include('footer.php');

?>
