<?php
$server = "localhost";
$username = "root";
$password = '';
$database = "curd";

$con = mysqli_connect($server, $username, $password, $database);

$id = $_GET['id'];

$query = "SELECT * FROM crudoperation WHERE id=$id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
$Name = $row['Name'];
$Password = $row['Password'];



if (isset($_POST['done'])) {
    $name = $_POST["name"];
    $pasword = $_POST['password'];
    $mysql = "UPDATE `crudoperation` SET id=$id,Name='$name',Password='$pasword' WHERE id=$id";

    $query = mysqli_query($con, $mysql);
    header('location:insertion.php');
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
                    <h1 class="text-white text-center">Update Operation</h1>
                </div><br>
                <label for="">UserName:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $Name; ?>">

                <label for="">Password:</label>
                <input type="password" name="password" class="form-control" value="<?php echo $Password; ?>">
                <br>
                <button class="btn btn-outline-success" name="done">SUBMIT</button>
                <br>
            </div>
        </form>
    </div>
</body>

</html>