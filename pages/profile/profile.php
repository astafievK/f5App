<?php
$conn = new mysqli("localhost", "root", "root", "f5App");

$userId = 1;

$queryOrders = "SELECT * FROM OrdersProducts WHERE idUser = $userId";
$resultOrders = mysqli_query($conn, $queryOrders);

$queryOrdersCount = "SELECT ordersCount FROM users WHERE idUser = $userId";
$resultOrdersCount = mysqli_query($conn, $queryOrdersCount);

$queryUserInfo = "SELECT * FROM users WHERE idUser = $userId";
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
        <span class="login-title row">Логин: <label class="login">'.$row['login'].'</label></span>
        <span class="name-title row">Имя: <label class="name">'.$row['name'].'</label></span>
        <span class="surname-title row">Фамилия: <label class="surname">'.$row['surname'].'</label></span>
        <span class="patronymic-title row">Отчество: <label class="patronymic">'.$row['patronymic'].'</label></span>
        <span class="email-title row">Эл. почта: <label class="email">'.$row['email'].'</label></span>
        <span class="phone-title row">Номер телефона: <label class="phone">'.$row['phone'].'</label></span>
        ';
    }
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
<div class="container">
    <a href="../catalog/catalog.php"><button class="btn-back" id="back">Каталог</button></a>
    <span class="profile-title">Профиль</span>

    <div class="row">
        <div class="info-wrap row">
            <div class="info col-7">
                <?php printUserInfo($resultUserInfo); ?>
            </div>

            <div class="image col-5">
                <img src="#" alt="Изображение профиля">
            </div>
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
<script src="scripts/script.js"></script>
</body>
</html>