<?php

session_start();
if(!isset($_SESSION['id'])) {
    header("Location: ../authorization/authorization.php");
    exit();
}

$conn = new mysqli("localhost", "root", "root", "F5App");
$userId = $_SESSION['id'];

$queryOrders = "SELECT * FROM UserOrderProduct WHERE idUser = $userId";
$resultOrders = mysqli_query($conn, $queryOrders);

$queryOrdersCount = "SELECT ordersCount FROM user WHERE idUser = $userId";
$resultOrdersCount = mysqli_query($conn, $queryOrdersCount);

$queryUserInfo = "SELECT * FROM user WHERE idUser = $userId";
$resultUserInfo = mysqli_query($conn, $queryUserInfo);

function printOrders($resultOrders){
    while ($row = mysqli_fetch_array($resultOrders)) {
        echo
            '
            <div class="product__card-wrap row">
                <span class="product__card-title col-4">'.$row["title"].'</span>
                <span class="product__card-date col-4">'.$row["date"].'</span>
                <span class="product__card-price col-4">'.$row["price"].' ₽</span>
            </div>
    ';
    }
}

function printOrdersCount($resultOrdersCount){
    while ($row = mysqli_fetch_array($resultOrdersCount)) {
        echo $row['ordersCount'];
    }
}

function printUserInfo($resultUserInfo){
    while ($row = mysqli_fetch_array($resultUserInfo)) {
        echo
        '
        <div class="info col-7">
            <span class="login-title row">Логин: <label class="login">'.$row['login'].'</label></span>
            <span class="name-title row">ФИО: <label class="name">'.$row['surname'].' '.$row['name'].' '.$row['patronymic'].'</label></span>
            <span class="email-title row">Эл. почта: <label class="email">'.$row['email'].'</label></span>
            <span class="phone-title row">Контактный номер: <label class="phone">'.$row['phone'].'</label></span>
        </div>
        <div class="image col-5">
            <img src="../../assets/images/profile/'.$row['picture'].'" alt="Изображение профиля">
        </div>
        ';
    }
}

if (isset($_POST['leave'])) {
    session_destroy();
    header('Location: ../authorization/authorization.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>F5App | Профиль</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/libraries/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="../../assets/images/icon.png" type="image/x-icon">
    <script src="../../assets/libraries/jquery-3.7.0.min.js"></script>
</head>
<body>
<header>
    <div class="container">
        <a href="../catalog/catalog.php"><button class="btn-back" id="back">Каталог</button></a>
        <form action="leave.php" method="POST">
            <button class="leave-button" name="leave">Выйти</button>
        </form>
    </div>
</header>
<div class="container">
    <span class="profile-title">Профиль</span>

    <div class="row">
        <div class="info-wrap row">
            <?php printUserInfo($resultUserInfo); ?>
        </div>
    </div>

    <span class="orders-title">Заказы</span>

    <div class="row">
        <div class="orders-wrap">
            <span class="orders__count-title">Количество заказов: <label class="orders__count"><?php printOrdersCount($resultOrdersCount); ?></label></span>
            <?php printOrders($resultOrders); ?>
        </div>
    </div>
</div>
</body>
</html>