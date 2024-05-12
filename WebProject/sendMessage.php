<!DOCTYPE html>
<html>
    <head>
    <head>
    <body>
        <?php
        $host = 'localhost';
        $dbname = 'web';
        $username = 'root';
        $password = '';

        echo "<h2>>Üzenet elküldve az alábbinak: ".$_POST["recipient"].":</h2><br>";
        echo "<h3>".$_POST["message"]."</h3>";
        try{
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $conn->prepare("INSERT INTO `messages`(`sender`, `recipient`, `message`) VALUES (:username, :recipient, :message)");
            $stmt->execute(['username' => $username, 'recipient' => $_POST["recipient"], 'message' => $_POST["message"]]);
        }catch(Exception $e){
            echo $e->getMessage();
        }
        

        

        ?>
    </body>
</html>
