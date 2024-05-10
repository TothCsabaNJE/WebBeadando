<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebNev</title>
    <?php
        $host = 'localhost';
        $dbname = 'web';
        $username = 'root';
        $password = '';
        ?>
</head>
<nav>
    <div class="hornav">
    <ul>
        <li><a href="mainpage.php?page=home">Home</a></li>
        <li><a href="mainpage.php?page=account">Account</a></li>
        <li><a href="mainpage.php?page=chats">Messages</a></li>
        <li><a href="mainpage.php?page=feedback">Feedback</a></li>
        <li><a href="mainpage.php?page=gallery">Gallery</a></li>
        <li><a href="./">Logout</a></li>
    </ul>   
    </div>
</nav>

<body>
    <div id="content">
            <?php 
                session_start();
                if (isset($_GET['page'])) {
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
</body>
</html>