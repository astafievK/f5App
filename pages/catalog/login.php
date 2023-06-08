<?php
session_start();

$host = 'localhost';
$dbname = 'f5App';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
} catch (PDOException $e) {
    echo "Ошибка подключения к бд: " . $e->getMessage();
    exit;
}

if(isset($_POST['enter'])){
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $pdo->prepare("SELECT * FROM users WHERE login = $username AND password = $password");
        $stmt->execute([$username, $password]);
        $user = $stmt->fetch();

        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            header('Location: ../profile/profile.php');
            exit;
        } else {
            echo "Неверный логин и/или пароль";
        }
    }
}