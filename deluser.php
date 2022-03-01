<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="toni.css">

    <?php
    $dbserver="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="database";
    $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
    $id=$_GET["del"];
    $sql="DELETE FROM tbluser WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    header("Location: listuser.php");
    ?>

</head>
<body>
    <h1>User deleted</h1>
    <div class="home">
        <a href="index.php">Home</a>
    </div>
    <div class="home">
        <a href="listuser.php">User list</a>
    </div>
</body>
</html>