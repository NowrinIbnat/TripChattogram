



<?php

session_start();

$q = $_GET["q"];

// $_SESSION['username']

if ($q == $_SESSION['username']) {

    echo '<script>alert("Welcome to Geeks for Geeks")</script>';



} else {



    $con = mysqli_connect('localhost', 'root', '', 'chattogram');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    $sql = "DELETE  FROM user_info WHERE User_Name ='$q'";
    echo '<h1>' . $q . '</h1>';
    $result = mysqli_query($con, $sql);


    if ($result) {
        echo '<h1>deleted</h1>';
    }




    mysqli_close($con);
}

?>