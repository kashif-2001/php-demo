<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion List</title>
    <!-- Bootstrip -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="col-lg-12">
            <br><br>
            <h1 class="text-center text-warning">Display Table Data</h1>
            <br>
            <table class="table table-striped table-hover table-bordered">
                <tr class="text-center bg-dark">
                    <th class="text-white">ID</th>
                    <th class="text-white">Username</th>
                    <th class="text-white">Password</th>
                    <th class="text-white">Delete</th>
                    <th class="text-white">Update</th>
                </tr>


                <tr>

                    <?php
                    $server = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "curd";

                    $con = mysqli_connect($server, $username, $password, $database);
                    $mysql = "select * from crudoperation";
                    $query = mysqli_query($con, $mysql);

                    while ($res = mysqli_fetch_array($query)) {


                    ?>


                </tr>

                <style>
                    a {
                        text-decoration: none;
                    }
                </style>
                <tr class="text-center">
                    <td><?php echo $res['id'];  ?> </td>
                    <td><?php echo $res['Name'];  ?></td>
                    <td><?php echo $res['Password'];  ?></td>
                    <td><button class="btn btn-danger"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></td>
                    <td><button class="btn btn-primary"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a></button></td>

                </tr>
            <?php
                    }
            ?>


            </table>


        </div>
    </div>

    </div>
    </div>

</body>

</html>