<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

</html>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-lg-8 text-center mx-auto">
            <h1 class="display-4">Hotel List</h1>
        </div>


        <div class="col-lg-8 mx-auto ">
            <!-- List group-->
            <ul class="list-group shadow">







                <?php


                $q = $_GET["q"];


                $check=0;

                $con = mysqli_connect('localhost', 'root', '', 'chattogram');
                if (!$con) {
                    die('Could not connect: ' . mysqli_error($con));
                }

                $sql = "SELECT * FROM `hotel` WHERE Name LIKE '%{$q}%'";
                $result = mysqli_query($con, $sql);



                while ($row = mysqli_fetch_array($result)) {
                    //echo "succes";
                    $check=1;
                    echo '<!-- list group item-->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h3 class="mt-0 font-weight-bold mb-2">' . $row["Name"] . '</h3>
                                <p class="font-italic text-muted mb-0 medium">' . $row["Description"] . '</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h4 class="font-weight-bold my-2">' . $row["Location"] . '</h4> 
                                    <a href="' . $row["Website"] . '"><h4 class="font-weight-bold my-2">Website</h4></a>
                                </div>
                                <a style="color:#DF7401" href="review.php?q='.$row["Name"].'">Ratings & Review</a>
                            </div><img src="../images/'.$row['Images'].'" alt="Generic placeholder image" width="150" height="150" class="ml-lg-5 order-1 order-lg-2">
                        </div> <!-- End -->
                    </li> <!-- End -->
                    <!-- list group item-->';

                }


                if($check==0){
                    echo '<h2 >No match found</h2>';
                }

                    


                mysqli_close($con);

                ?>











            </ul> <!-- End -->
        </div>
    </div>
</div>

</div>