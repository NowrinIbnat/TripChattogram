<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

</html>

<div class="container rounded bg-white mt-5 mb-5 table-responsive">

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">User Name</th>
                <th scope="col">Password</th>
                <th scope="col">D.O.B</th>
                <th scope="col">Gender</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>



            <?php

            $con = mysqli_connect('localhost', 'root', '', 'chattogram');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }

            $sql = "SELECT * FROM `user_info` where Role ='User' ";
            $result = mysqli_query($con, $sql);



            while ($row = mysqli_fetch_array($result)) {
                //echo "succes";
                $id = $row["User_Name"];

                echo '<tr>
                        <td>' . $row["Name"] . '</td>
                        <td>' . $row["Email"] . '</td>
                        <td>' . $row["User_Name"] . '</td>
                        <td>' . $row["Password"] . '</td>
                        <td>' . $row["Dob"] . '</td>
                        <td>' . $row["Gender"] . '</td>
                        <td><button class="btn btn-danger profile-button" onclick="deleteUser(\'' . $id . '\')">Delete</button></td>
                    </tr>';
            }





            mysqli_close($con);

            ?>








        </tbody>
    </table>


</div>