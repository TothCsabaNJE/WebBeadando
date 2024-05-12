<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>WebNev</title>
    <?php
        $host = 'localhost';
        $dbname = 'web';
        $username = 'root';
        $password = '';
        ?>
</head>
<div class="container">
    <div class="col-xl-12">
        <nav>
            <ul>
                <li><a href="mainpage.php?page=home">Home</a></li>
                <li><a href="mainpage.php?page=account">Account</a></li>
                <li><a href="mainpage.php?page=chats">Messages</a></li>
                <li><a href="mainpage.php?page=feedback">Feedback</a></li>
                <li><a href="mainpage.php?page=gallery">Gallery</a></li>
                <li><a href="./">Logout</a></li>
            </ul>  
        </nav>
    </div>
</div>

<body>
    <div class="container">
        <div id="content" class="col-xs-12">
            <?php 
                session_start();
                if (isset($_GET['page'])) {
                    if($_GET['page']=="home") include("home.php");
                    if($_GET['page']=="account") include("account.php");
                    if($_GET['page']=="chats") include("chats.php");
                    if($_GET['page']=="feedback") include("feedback.php");
                    if($_GET['page']=="gallery") include("gallery.php");
                    if($_GET['page']=="sendMessage") include("sendMessage.php");
                    if($_GET['page']=="imgUpload") include("imgUpload.php");
                }
                else include("home.php");             
            ?>
        </div>
    </div>
</body>
</html>