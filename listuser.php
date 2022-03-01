<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listuser.css">
    <title>Document</title>
    <?php
        $dbserver="localhost";
        $dbuser="root";
        $dbpass="";
        $dbname="database";
        $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);

        $sql="SELECT * FROM tbluser";
        $result=mysqli_query($conn,$sql);
        
    ?>
</head>
<body>
    <h1>Users: </h1>
    <div class="list">
        <?php while($row=mysqli_fetch_assoc($result)){ ?>
            <div class="row">
                Username: <span class="user"><?=$row['Username']?></span><br> 
                Level: <?=$row['level']?><br>
                <!--<span class="pass"><?=$row['password']?></span><br>-->
                Favorite tea: <span class="tea"><?=$row['favoritetea']?></span><br>
                <a class="deletea"href="deluser.php?del=<?=$row['ID']?>">Delete</a><br>
            </div>
        <?php  } ?>
    </div>

    <div class="home">
        <a id="listuserhome"href="index.php">home</a>
    </div>
</body>
</html>