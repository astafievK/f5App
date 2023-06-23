<?php
session_start();

if(isset($_POST['enter'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $pdo = new PDO('mysql:host=localhost;dbname=F5App;charset=utf8mb4', 'root', 'root');

    if($pdo){
        $sql = "SELECT CheckUser(?, ?) AS result";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$login, $password]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC)['result'];

        if($result) {
            $userInfo = getUserInfo($pdo, $login);
            $_SESSION['id'] = $userInfo[0];
            $_SESSION['name'] = $userInfo[1];
            $_SESSION['surname'] = $userInfo[2];
            $_SESSION['roleId'] = $userInfo[3];
            $_SESSION['roleString'] = $userInfo[4];
            header('Location: ../catalog/catalog.php');
            exit();
        }
    }
    header('Location: ../registration/registration.php');
    exit();
}

function getUserInfo($pdo, $login) {
    $query = "SELECT user.idUser, user.name, user.surname, role.idRole, role.title FROM user
INNER JOIN role ON user.idRole = role.idRole WHERE user.login = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$login]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();

    return array($result['idUser'], $result['name'], $result['surname'], $result['idRole'], $result['title']);
}
