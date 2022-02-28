<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "curd";
$con = mysqli_connect($server, $username, $password, $database);

if (isset($_POST['done'])) {
    $name = $_POST["name"];
    $pasword = $_POST['password'];

    $encrypted_password = md5($pasword);
    $mysql = "INSERT INTO `curd`.`crudoperation`(`Name`, `Password`) 
            VALUES ('$name','$encrypted_password')";

    $insert_result = mysqli_query($con, $mysql);
    // $result = "SELECT * FROM crudoperation WHERE `Password`=$pasword";
    // $no_rows = mysqli_num_rows();

    // if (true) {
    //     echo "yes";
    // } else {
    //     $pasword = password_hash($pasword, PASSWORD_DEFAULT);
    //     $mysql = "INSERT INTO `crudoperation`(`Name`, `Password`) 
    //         VALUES ('$name','$pasword')";
    // }
}

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserted Form</title>
    <!-- CSS link -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrip -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <br><br>
    <div class="col-lg-6 m-auto">
        <form action="" method="post">
            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Insert Operation</h1>
                </div><br>
                <label for="">UserName:</label>
                <input type="text" name="name" class="form-control">

                <label for="">Password:</label>
                <input type="password" name="password" class="form-control">
                <br>
                <button class="btn btn-outline-success" name="done">SUBMIT</button>
                <br>

                <a class="btn btn-outline-warning text-dark" style="text-decoration: none;" href="insertion.php"> DataBase List</a>
            </div>
        </form>
    </div>
</body>

</html>