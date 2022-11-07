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




<?php //include('header.php') ?>


<body onload="getAllRestaurant()">

    <br><br>

    <!-- Search form -->
    <div class="active-pink-3 active-pink-4 mb-4 col-lg-4 col-lg-offset-4">
        <input class="form-control" type="text" placeholder="Search" name="search" id="search" onkeyup="getRestaurant(this.value)">
    </div>

    <br><br>


    



    <div id="Restaurant">




    </div>









    <script type="text/javascript" src="../javascript/regiScript.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../javascript/aajax.js"></script>
</body>




<?php //include('footer.php'); ?>