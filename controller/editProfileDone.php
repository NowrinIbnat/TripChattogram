<?php
session_start();

if (isset($_SESSION['username'])) {
} else {

    header('location: login.php');
}

?>


<?php

require_once '../model/model.php';


$data['Name1']                     =     $_SESSION['name1'];
$data['email1']                 =        $_SESSION['email1'];
$data['username']                 =      $_SESSION['username'];



if (updateUsers($data)) {
    echo 'Successfully updated!!';
    
    if($_SESSION['role'] == "Admin"){
        header('location:../view/editDoneAdmin.php');
    }
    else if($_SESSION['role'] == "User"){
        header('location:../view/editDoneUser.php');
    }
    
   
} else {
    echo 'You are not allowed to access this page.';
}

?>