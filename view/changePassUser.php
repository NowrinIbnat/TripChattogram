<?php
session_start();

if (isset($_SESSION['username'])) {
} else {

    header('location: login.php');
}

?>



<?php

require_once '../controller/readData.php';
$user = fetchUsers($_SESSION['username']);

?>


<style>
  .error {
    color: #394393;
  }

  .error2 {
    color: #FF0000;
  }
</style>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

</html>



<?php

$passwordErr = "";
$rePasswordErr = "";
$newpass = "";
$check = 0;
$msg = "";


if (isset($_POST['newPass']) && isset($_POST['rePass'])) {

  //password validation


  if (empty($_POST["newPass"])) {
    $passwordErr = " must need to fill password";
  } else
    $newpass = test_input($_POST["newPass"]);


  if (empty($_POST["rePass"])) {
    $rePasswordErr = " must need to re-type password";
  } else
    $renewpass = test_input($_POST["rePass"]);

  //echo $newpass;  
  if (!preg_match("/^[0-9a-zA-Z@%#$]{8,}$/", $newpass)) {
    $passwordErr = "at least one of the special characters (@, #, $, %)";
  } else if ($_POST["newPass"] == $_POST["rePass"]) {


    $_SESSION['newpassword'] = $_POST["rePass"];

    //echo "success";


    header('location:../controller/forgotDone.php');
  } else
    $rePasswordErr = "didn't macth the password ";
}




function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>



<?php include('headerUser.php') ?>


<div class="container rounded bg-white mt-5 mb-5">
  <div class="row">
    <div class="col-md-3 border-right">
      <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="../images/profile.png"><span class="font-weight-bold"><?php echo $user["Name"] ?></span><span class="text-black-50"><?php echo $user["Email"] ?></span><span> </span></div>
    </div>
    <div class="col-md-5 border-right">
      <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h2 class="text-right">Change Password</h2>
        </div>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <!-- <label>Current Password</label>
          <div class="form-group pass_show">
            <input type="password" value="" name="password" id="password" onkeyup="passVal()" class="form-control" placeholder="Current Password">
            <br>
            <span class="error" id="passwordErr">* <?php echo $passwordErr; ?></span>
          </div> -->
          <label>New Password</label>
          <div class="form-group pass_show">
            <input type="password" value="" name="newPass" id="password" onkeyup="passVal()" class="form-control" placeholder="New Password">
            <br>
            <span class="error" id="passwordErr"> <?php echo $passwordErr; ?></span><br>
          </div>
          <label>Confirm Password</label>
          <div class="form-group pass_show">
            <input type="password" value="" name="rePass" id="rePassword" onkeyup="rePassVal()" class="form-control" placeholder="Confirm Password">
            <br>
            <span class="error" id="rePasswordErr"> <?php echo $rePasswordErr; ?></span><br><br>
          </div>
          <div class="form-group pass_show"><button class="btn btn-primary profile-button" type="submit">Change Password</button></div>
        </form>


      </div>
    </div>

  </div>






</div>
</div>

</div>
</div>
</div>
</div>

<body>


  <script type="text/javascript" src="../javascript/regiScript.js"></script>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

<?php include('footer.php'); ?>