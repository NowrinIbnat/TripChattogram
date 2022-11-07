

<?php

session_start()

?>



<?php
    

    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $birthdateErr= $degreeErr = $bloodgroupErr = $newpassErr = $renewpassErr = $usernameErr = "";

    $name = $email = $gender = $birthdate = $degree1 = $degree2 = $degree3 = $degree4= $bloodgroup =$newpass = $renewpass = $username = "";

    $check=0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      
      



      //email validation//email validation//email validation
    
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } 
      else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Must be a valid email_address : anything@example.Com";
        }
        else
          $check++;
      }
      


      //password validation//password validation//password validation

      if(empty($_POST["newpass"])){
        $newpassErr=" must need to fill password";
      }else
        $newpass=test_input($_POST["renewpass"]);


      if(empty($_POST["renewpass"])){
        $renewpassErr=" must need to fill confirm password";
      }else
        $renewpass=test_input($_POST["renewpass"]);
      

      if (!preg_match("/^[0-9a-zA-Z@%#$]+$/",$newpass)) {
            $newpassErr = "At least 8 and No use of special characters (space,@, #, $, %)";
      }else if($_POST["newpass"]==$_POST["renewpass"]){
          $check++; 
      }
      else
        $renewpassErr="didn't macth the password ";





      //gender validation//gender validation//gender validation

      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } 
      else {
        $gender = test_input($_POST["gender"]);
        $check++;
      }
      

      //date validation 
      if(empty($_POST["birthdate"])){
        $birthdateErr = " select up year, month, date ";
      }
      else{
        $birthdate = test_input($_POST["birthdate"]);
        $check++;
      }
      

      //form changing 
      if ($check == 4) {
          $_SESSION['name']=$_REQUEST['name'];
          $_SESSION['email']=$_REQUEST['email'];
          $_SESSION['username']=$_REQUEST['username'];
          $_SESSION['pass']=$_REQUEST['newpass'];
          $_SESSION['dob']=$_REQUEST['birthdate'];
          $_SESSION['gender']=$_REQUEST['gender'];
          header('location:../controller/registrationDone.php');
      }
  }
  

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>




<!DOCTYPE html>

<style>
.error {color: #FF0000;}
</style>





<html lang="en">
<title>Registration</title>


<?php include('header.php')?>

<center>
  <fieldset id="regiContent" style="COLOR:white">
    
   <div class="container-fluid">
    
    <div class="row justify-content-center">
      <div class="form_container col-md-4 co-sm-4 col-xs-12">
        
          <h1 align = "center" id="reg" ><b>REGISTRATION</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data"><br/>

                  <div class="form-group">
                      Name
                      <input name="name" type="text" id="name" required class="form-control">
                      <span class="error" id="nameErr"><?php echo $nameErr;?></span>
                  </div>
                  <hr/>
                  <div class="form-group">
                      Email
                      <input name="email" type="text" id="email" onkeyup="emailVal()" class="form-control">
                      <abbr title="hint: sample@example.com"><b></b></abbr>
                      <div><span class="error" id="emailErr"><?php echo $emailErr;?></span></div> 
                      <hr/>                 
                  </div>

                  <div class="form-group">
                      User Name
                      <input name="username" type="text" id="userName" required class="form-control">
                      <span class="error" id="usernameErr"><?php echo $usernameErr;?></span>
                    
                  </div>
                      
                  <hr/>
                    
                      Password
                      
                      <input name="newpass" type="text"  id="password" onkeyup="passVal()" class="form-control">
                      <div><span align="right" class="error" id="passwordErr"><?php echo $newpassErr;?></span></div>
                    <hr/>
                      Confirm Password
                      
                      <input name="renewpass" type="text" id="rePassword" onkeyup="rePassVal()" class="form-control">
                    <div><span class="error" id="rePasswordErr"><?php echo $renewpassErr;?></span></div>
                    <hr/>
                          <h3><b>Gender </h3><br><br>    
                          <input name="gender" name="male" type="radio" value="male">Male
                          <input name="gender"  name="female" type="radio" value="female">Female
                          <input name="gender"  name="other" type="radio" value="other">Other
                      <div><span class="error"><?php echo $genderErr;?></span></div>
                    <hr/>


                          <h3><b>Date Of Birth</h3><br>
                          <input style="color:Black" type="date" min="1953-01-01" max="1998-12-31" id="birthdate" name="birthdate"><br><br>

                    <div><span class="error"><?php echo $birthdateErr;?></span></div>

                  <hr/>

                  <input type="submit" name="submit" value="REGISTER" class="btn btn-outline-success btn-block mt-3 font-weight-bold bg-primary">
                  <input style="background-color:#3d697a" type="reset" value="RESET" class="btn btn-outline-success btn-block mt-3 font-weight-bold">
                </form>
        </div>
      </div>
    </div>
            	
</fieldset>
</center>




<body>



<script type="text/javascript" src="../javascript/regiScript.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>



<?php include('footer.php');?>


</html>