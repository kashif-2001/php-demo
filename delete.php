 <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "curd";

    $con = mysqli_connect($server, $username, $password, $database);
    $id = $_GET['id'];


    $mysql = "DELETE FROM `crudoperation` WHERE id=$id";
    $query = mysqli_query($con, $mysql);

    header('location:insertion.php');
    ?>
