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
            $userInfo = getUserInfo($login);
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

function getUserInfo($login){
    $connection = mysqli_connect('localhost', 'root', 'root', 'F5App');
    $query = "SELECT user.idUser, user.name, user.surname, role.idRole, role.title FROM user 
              INNER JOIN role ON user.idRole = role.idRole WHERE user.login = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('s', $login);
    $stmt->execute();
    $stmt->bind_result($idUser, $name, $surname, $idRole, $title);
    $stmt->fetch();
    $stmt->close();
    return array($idUser, $name, $surname, $idRole, $title);
}