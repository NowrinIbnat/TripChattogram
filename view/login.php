<?php

session_start();

if (isset($_POST["submit"])) {

    $_SESSION['username'] = $_REQUEST['username'];
    $_SESSION['password'] = $_REQUEST['password'];
}

?>


<?php
require_once '../controller/readData.php';

if (isset($_REQUEST['username'])) {
    $users = fetchAllUsers($_REQUEST['username']);
}

//$user = fetchUsers($_SESSION['username']);
?>



<?php
$username = $password = "";
$usernameErr = $passwordErr = "";
$check = $flag = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {



    //password validation
    if (empty($_POST["password"])) {
        $passwordErr = "invalid password";
    } else {
        $password = test_input($_POST["password"]);
        //validating alphabet
        if (!preg_match("/^[0-9a-zA-Z@%#$]{8,}$/", $password)) {
            $passwordErr = "At least 8 and No use of special characters (space,@, #, $, %)";
        } else
            $check++;
    }


    if ($check == 1) {

        $_SESSION['username'] = $_REQUEST['username'];
        $_SESSION['password'] = $_REQUEST['password'];

        foreach ($users as $row) {
            if ($_SESSION['username'] == $row["User_Name"] && $_SESSION['password'] == $row["Password"]) {
               
                $flag = 1;
                $_SESSION['role']=$row["Role"];

                if (!empty($_POST["remember"])) {
                    setcookie("username", $_POST["username"], time() + 1000);
                    setcookie("password", $_POST["password"], time() + 1000);
                    echo "<h1>Cookies Set Successfuly</h1>";
                } else {
                    setcookie("username", "");
                    setcookie("password", "");
                    //echo "<h1>Cookies Not Set</h1>";
                }
                if($row["Role"] == "User"){
                    header('location:../view/homepageUser.php');
                }
                else if($row["Role"] == "Admin"){
                    header('location:../view/homepageAdmin.php');
                }
                
            } else
                $flag = 0;
        }
    }
    //if($flag==0)    
    //echo '<p><br></p><p><br></p><p><br></p><h1 align="center" style="color: red;" >wrong passwor and username </h1>';



}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>


<!DOCTYPE html>





<html lang="en">

<title>Login</title>




<style>
    .error {
        color: #FF0000;
    }
</style>





<?php include('header.php') ?>
<center>
    <fieldset id="">

        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="form_container col-md-4 co-sm-4 col-xs-12">
                    <h1 id="log" align="center"><b>LOGIN</h1><br>


                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                        <div class="form-group">
                            <span style="color:white">User Name</span>
                            <input type="text" name="username" value="<?php if (isset($_COOKIE["username"])) {
                                                                            echo $_COOKIE["username"];
                                                                        } ?>" id="userName" required class="form-control"><br><br>
                            <span class="error" id="usernameErr"><?php echo $usernameErr; ?></span><br>
                        </div>

                        <div class="form-group">
                            <span style="color:white">Password</span>
                            <input type="password" name="password" value="<?php if (isset($_COOKIE["password"])) {
                                                                                echo $_COOKIE["password"];
                                                                            } ?>" id="password" onkeyup="passVal()" class="form-control">
                        </div>
                        <span class="error" id="passwordErr"><?php echo $passwordErr; ?></span>
                        <hr />
                        <br>
                        <input name="remember" type="checkbox"><span style="color:white">Remember Me</span>
                        <br /><br />
                        <input type="submit" name="submit" value="LOGIN" class="btn btn-outline-success btn-block mt-3 font-weight-bold bg-primary">
                        &nbsp;&nbsp;
                        <input style="background-color:#3d697a" type="reset" value="RESET" class="btn btn-outline-success btn-block mt-3 font-weight-bold">
                    </form>
                </div>
            </div>
        </div>

        <p><br></p>
    </fieldset>

</center>





<body>


    <script type="text/javascript" src="../javascript/loginn.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

<?php include('footer.php'); ?>


</html>