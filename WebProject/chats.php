<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Send message:</h1>
        <form action="mainpage.php?page=sendMessage" method="post">
            <label><h2>Send To:</h2></label>
            <input type="text" name="recipient" id="recipient" required><input type="button" value="Send to Developer" onclick="defaultAdd()">
            <label><h2>Message:</h2></label>
            <input type="text" name="message"><br>
            <input type="submit" name="submit">
        </form>
        <script>
            function defaultAdd(){
                let recipient=document.getElementById("recipient");
                recipient.value="Developer";
            }
        </script>
    </body>
</html>