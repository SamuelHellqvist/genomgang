<!DOCTYPE html>

<?php
    $dbserver="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="database";
    $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);

    if (isset($_POST['btn'])){
            $user=$_POST['usr'];
            $pass=md5($_POST['pwd']);
            $sql="INSERT INTO tbluser (Username, password) VALUES ('$user','$pass')";
            mysqli_query($conn,$sql);

    }


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add user</title>
    <title>Document</title>
</head>
<body>
    <form method="post" action="adduser.php">
        <input type="text" name="usr">
        <input type="password" name="pwd">
        <input type="submit" name="btn" value="Add user">
    </form>
    <?php
        $sql="SELECT * FROM tbluser";
        $result=mysqli_query($conn,$sql);

        while($row=mysqli_fetch_assoc($result)){
            echo $row['Username']."<br>";
        }
        
    ?>
</body>
</html>