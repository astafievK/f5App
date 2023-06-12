<?php
session_start();

if(isset($_POST['enter'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $pdo = new PDO('mysql:host=localhost;dbname=F5App;charset=utf8mb4', 'root', 'root');

    $sql = "SELECT CheckUser(?, ?) AS result";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$login, $password]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC)['result'];

    if($result == 1) {
        $_SESSION['id'] = getLogin($login);
        header('Location: ../catalog/catalog.php');
        exit();
    } else {
        header('Location: ../registration/registration.php');
        exit();
    }
}

function getLogin($login){
    $connection = mysqli_connect('localhost', 'root', 'root', 'F5App');
    $query = "SELECT getUserIdByLogin('$login') AS idUser";
    echo $query;
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['idUser'];
}