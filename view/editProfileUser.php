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

// define variables and set to empty values
$nameErr  = $emailErr = "";

$name  = $email = "";

$passwordErr = "";
$rePasswordErr = "";
$newpass = "";

$check = 0;


if ($_SERVER["REQUEST_METHOD"] == "POST") {



  //email validation//email validation//email validation

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Must be a valid email_address : anything@example.Com";
    } else
      $check++;
  }
}


if ($check == 1) {


  $_SESSION['name1'] = $_REQUEST['name'];
  $_SESSION['email1'] = $_REQUEST["email"];

  header('location:../controller/editProfileDone.php');
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
          <h2 class="text-right">Profile Settings</h2>
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="row mt-3">
            <div class="col-md-12"><label class="control-labels">Name</label><input type="text" name="name" id="name" required class="form-control" placeholder="Name" value="<?php echo $user["Name"] ?>"></div>
            <br><br><br>
            <span class="col-md-12 error2" id="nameErr"><?php echo $nameErr; ?></span>
            <br><br><br><br>
            <div class="col-md-12"><label class="control-labels">Email Address</label><input type="text" name="email" id="email" onkeyup="emailVal()" class="form-control" placeholder="User Name" value="<?php echo $user["Email"] ?>"></div>
            <br><br><br>
            <span class="col-md-12 error2" id="emailErr"><?php echo $emailErr; ?></span>
            <br><br><br><br>
            <div class="col-md-12"><button class="btn btn-primary profile-button" type="submit">Save
                Profile</button></div>
        </form>
      </div>
    </div>

  </div>




  <!-- change password -->
  <div class="col-md-4">
    <div class="p-4 py-5">


      <div class="mt-2 text-cenetr">
        <a href="changePassUser.php">
          <button class="btn btn-primary profile-button" href type="button">Change Password</button>
        </a>
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