<?php

session_start();
if($_SESSION['roleString'] != "Администратор"){
    header("Location: ../catalog/catalog.php");
}

$mysqli = new mysqli("localhost", "root", "root", "F5App");

if(isset($_POST['create'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $mysqli->query("CALL AddProduct('$title', '$description', '$price')");

    echo "<script>alert('Товар успешно добавлен')</script>";
    $_POST['title'] = "";
    $_POST['description'] = "";
    $_POST['price'] = "";
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>F5App | Добавление продукта</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/libraries/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="../../assets/images/icon.png" type="image/x-icon">
    <script src="../../assets/libraries/jquery-3.7.0.min.js"></script>
</head>
<body>
<div class="add__product-wrapper">
    <span class="title">Добавление продукта</span>

    <form method="POST" action="addProduct.php" id="addProductForm">
        <div class="form__item form__item-title">
            <input type="text" placeholder="Заголовок товара" name="title" required>
        </div>

        <div class="form__item form__item-description">
            <textarea placeholder="Описание продукта" name="description" required></textarea>
        </div>

        <div class="form__item form__item-price">
            <input type="text" placeholder="Цена" name="price" required>
        </div>

        <div class="add__button-wrapper">
            <button class="add_button" type="submit" name="create">Добавить</button>
        </div>
    </form>

    <a href="../catalog/catalog.php">
        <div class="cancel__button-wrapper">
            <button class="cancel_button">Отмена</button>
        </div>
    </a>
</div>
</body>
</html>