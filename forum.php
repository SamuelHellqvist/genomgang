<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    session_start();
    $dbserver="localhost";
    $dbuser="root";
    $dbpass="";
    $db="database";
    $conn=mysqli_connect($dbserver, $dbuser, $dbpass, $db);
    $msg=" ";
    if(isset($_POST['btn'])){
        $newtext=$_POST['thetext'];
        $msg=$newtext;
        $user=$_SESSION['user'];
        $sql="INSERT INTO forum (txt,user) VALUES ('$newtext', '$user')";
        mysqli_query($conn,$sql);
    }
    ?>

    <?php
    $sql="SELECT * FROM forum";
    $result=mysqli_query($conn,$sql);
    ?>
    <link rel="stylesheet" href="forum.css">
</head>
<body>

    <div class="posts">
        <form action="forum.php" method="post">
            <div class="list">
            <?php while($row=mysqli_fetch_assoc($result)){ ?>
                <div class="row">
                    Username: <span><?=$row['user']?></span><br> 
                    : <span><?=$row['txt']?></span><br>
                </div>
            <?php  } ?>
            </div>
            <input type="text" name="thetext">
            <input type="submit" name="btn" id="thebtn">
        </form>
    </div>
            
    <div class="sliding">
        <?=$msg?>
    </div>

    <div class="home" id="adduserhome">
        <a href="index.php">home</a>
    </div>

    <div id="mylittleinfoframe">
        <h1>To use this function, you need to be logged in!</h1>
    </div>

</body>
</html>