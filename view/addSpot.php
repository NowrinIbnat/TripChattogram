<?php
session_start();

if (isset($_SESSION['username']) && $_SESSION['role']=="Admin") {
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
  <title>Add Spot</title>
</head>

</html>



<?php

// define variables and set to empty values

$sMsg = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {


  $data['name'] = $_REQUEST['name'];
  $data['description'] = $_REQUEST['description'];
  $data['location'] = $_REQUEST['location'];

  

  // echo $data['name'].$data['description'].$data['location'] ;



  $data['image'] = basename($_FILES["image"]["name"]);

  $data['tmp_name'] = $_FILES["image"]["tmp_name"];
  $data['dir'] = "../images/";
  $data['target_file'] = $data['dir'] . $data['image'];


  if (addSpot($data)) {

    $sMsg = '
      <div class="alert alert-success">
        <strong>Success! </strong>Successfully Added
      </div>
      ';
  }
  else{
    $sMsg = '
      <div class="alert alert-danger">
        <strong>Soryy! Failed! </strong>Failed 
      </div>
      ';
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




?>



<?php include('headerAdmin.php') ?>




<div class="container rounded bg-white mt-5 mb-5">
  <div class="row">
    <div class="col-md-3 border-right">
      <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="200px" src="../images/hotel.png"><span> </span></div>
    </div>
    <div class="col-md-5 border-right">
      <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h2 class="text-right">Tourist Spot Information</h2>
        </div>
        <?php echo $sMsg; ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
          <div class="row mt-3">
            <div class="col-md-12"><label class="control-labels">Tourist Spot Name</label><input type="text" name="name" id="name" class="form-control" placeholder="Name" required></div>
            <br><br><br>
            <br><br>

            <label class="col-md-12 control-label">Spot Decription</label>
            <div class="col-md-12">
              <textarea class="form-control" id="description" name="description" placeholder="Description" required></textarea>
            </div>
            <br><br><br><br>

            <div class="col-md-12"><label class="control-labels">Location</label><input type="text" name="location" id="location" class="form-control" placeholder="Address" required></div>
            <br><br><br><br>

            <label class="col-md-12 control-label">Profile Picture</label>
            <div class="col-md-4">
              <input id="image" name="image" class="input-file" type="file" required>
            </div>
            <br><br>
            <br><br>
            <div class="col-md-12"><button class="btn btn-primary profile-button" type="submit">Add Hotel</button></div>
        </form>
      </div>
    </div>

  </div>




  <!--3rd Section-->
  <div class="col-md-4">
    <div class="p-4 py-5">


      <!-- <div class="alert alert-success">
        <strong>Success!</strong> Indicates a successful or positive action.
      </div> -->




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