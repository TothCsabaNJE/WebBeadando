<?php
        $host = 'localhost';
        $dbname = 'beadweb';
        $username = 'beadweb';
        $password = 'bead_312';

        echo "<h2>>Üzenet elküldve az alábbinak: ".$_POST["recipient"].":</h2><br>";
        echo "<h3>".$_POST["message"]."</h3>";
        try{
            session_start();
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $conn->prepare("INSERT INTO `messages`(`sender`, `recipient`, `message`) VALUES (:username, :recipient, :message)");
            $stmt->execute(['username' => $_SESSION['user'], 'recipient' => $_POST["recipient"], 'message' => $_POST["message"]]);
        }catch(Exception $e){
            echo $e->getMessage();
        }
        

        

        ?>
