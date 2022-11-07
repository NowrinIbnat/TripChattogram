

<?php

    session_start();
     
    require_once '../model/model.php';


     $data['password']                 =     $_SESSION['newpassword'];
     $data['username']                    =     $_SESSION['username'];


    if (updatePassword($data)) {
        //echo 'Successfully updated!!';
        include("../view/Logout.php");
        header('location:../view/changePassOk.php');

    } else {
        echo 'You are not allowed to access this page.';    
    }
            
?>