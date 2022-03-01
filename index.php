<!DOCTYPE html>

<?php
    session_start();
    $dbserver="localhost";
    $dbuser="root";
    $dbpass="";
    $db="database";
    $conn=mysqli_connect($dbserver, $dbuser, $dbpass, $db);
    $msg="";
    if(isset($_POST['btn'])){
        $user=$_POST['usr'];
        $pass=md5($_POST['pwd'].$user);
        $sql="SELECT * FROM tbluser WHERE Username='$user' and Password='$pass'";
        $result=mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result)==1){
            $raden=mysqli_fetch_assoc($result);
            $_SESSION['user']=$raden['Username'];
            $_SESSION['level']=$raden['level'];
            $msg="Välkommen ".$raden['Username']."!";
        }else{
            $_SESSION['user']=$raden[''];
            $_SESSION['level']=$raden[''];
            $msg="Fel användarnamn elle lösenord";
        }

    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="toni.css">
</head>
<body>
    <header>
        <h1>☕  The tea party!  ☕</h1>
    </header>
    <nav>
        <ul>
            <a href="adduser.php">sign up</a>
            <a href="listuser.php">list all users</a>
            <a href="forum.php">read the latest posts</a>
        </ul>
    </nav>
    <form method="post" action="index.php">
        <input class="blue"type="text" name="usr" placeholder="username">
        <input class="blue"type="password" name="pwd" placeholder="password">
        <input class="blue"type="submit" name="btn" value="log in">
    </form>
    <div .blue>
        <?=$msg?>
    </div>
    <!--<div class="cat"><img src="https://c.tenor.com/MlohMdhC8NoAAAAC/khat-dancing-cat.gif" alt=""></div>-->
</body>
</html>