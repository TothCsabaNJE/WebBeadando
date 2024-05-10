<?php
$host = 'localhost';
$dbname = 'web';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->execute(['username' => $username, 'password' => $password]);
/* teszt rész */

    if ($stmt->rowCount() > 0) {
        if(!empty($_POST['remember_me'])){
            $rememberme = $_POST['remember_me'];
            setcookie('username',$username, time()*30);
            setcookie('password',$password, time()*30);
        }else{
            setcookie('username',$username, 3600*24*7);
            setcookie('password',$password, 3600*24*7);
        }
        include("mainpage.php");
    } else {
        echo "Hibas";
    }

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>