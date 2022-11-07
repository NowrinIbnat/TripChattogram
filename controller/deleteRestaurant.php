



<?php

$q = $_GET["q"];


$con = mysqli_connect('localhost', 'root', '', 'chattogram');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql = "DELETE  FROM `restaurant` WHERE Name='$q'";
echo '<h1>' . $q . '</h1>';
$result = mysqli_query($con, $sql);


if ($result) {
    echo '<h1>deleted</h1>';
}




mysqli_close($con);


?>