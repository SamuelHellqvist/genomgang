<link rel="stylesheet" href="adduser.css">
<!DOCTYPE html>
<?php
    $dbserver="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="database";
    $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);

    if (isset($_POST['btn'])){
            $user=$_POST['usr'];
            $pass=md5($_POST['pwd'].$user);
            $earl=$_POST['tea'];
            $sql="INSERT INTO tbluser (Username, password, favoritetea) VALUES ('$user','$pass', '$earl')";
            mysqli_query($conn,$sql);

    }


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add user</title>
    <title>Document</title>
</head>
<body id="adduserbody">
    <form method="post" action="adduser.php">
        <input type="text" name="usr" id="nameinput" placeholder="name">
        <input type="password" name="pwd" id="passinput" placeholder="password">
        <input type="text" name="tea" id="favoriteteainput" placeholder="favorite tea">
        <input type="submit" name="btn" value="sign up" id="adduserbtn">
    </form>
    <div class="home" id="adduserhome">
        <a href="index.php">home</a>
    </div>
    <?php
        $sql="SELECT * FROM tbluser";
        $result=mysqli_query($conn,$sql);

        /*
        while($row=mysqli_fetch_assoc($result)){
            echo "new user added!"."<br>";

        }
        */
        /*echo "add a user"."<br>";*/
        
    ?>
    <!--
    <div>
        <img id="chain" src="https://www.pngkit.com/png/full/2-23721_metal-chain-png-seamless-and-free-iron-chain.png" alt="">
    </div>
    -->
</body>
</html>