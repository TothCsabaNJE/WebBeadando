<?php
$host = 'localhost';
$dbname = 'beadweb';
$username = 'beadweb';
$password = 'bead_312';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->execute(['username' => $username, 'password' => $password]);
/* teszt rész */

    if ($stmt->rowCount() > 0) {
        session_start();
        if(!empty($_POST['remember_me'])){
            $rememberme = $_POST['remember_me'];
            setcookie('username',$username, time()*30);
            setcookie('password',$password, time()*30);
        }else{
            setcookie('username',$username, 3600*24*7);
            setcookie('password',$password, 3600*24*7);
        }
        $_SESSION['user'] =$username;
        include("mainpage.php");
    } else {
        echo "Hibás";
    }

} catch(PDOException $e) {
    echo " Sikertelen csatlakozás: " . $e->getMessage();
}

?>
