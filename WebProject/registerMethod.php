<?php
$host = 'localhost';
$dbname = 'web';
$username = 'root';
$password = '';

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newUsername = $_POST['username'];
        $newPassword = $_POST['password'];

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->execute(['username' => $newUsername, 'password' => $newPassword]);

        include("index.php");
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
