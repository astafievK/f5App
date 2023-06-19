<?php
if(isset($_POST['create'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $pdo = new PDO('mysql:host=localhost;dbname=F5App;charset=utf8mb4', 'root', 'root');

    $stmt = $pdo->prepare('CALL CreateUser(?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$login, $password, $name, $surname, $patronymic, $email, $phone]);

    header('Location: ../authorization/authorization.php');
}