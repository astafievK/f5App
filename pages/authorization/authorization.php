<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>F5App | Вход</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/libraries/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="../../assets/images/icon.png" type="image/x-icon">
    <script src="../../assets/libraries/jquery-3.7.0.min.js"></script>
</head>
<body>
<div class="login-wrapper">
    <span class="title">Авторизация</span>

    <span class="subtitle">Заполните форму и продолжайте покупки</span>

    <form method="POST" action="login.php" id="loginForm">
        <div class="form__item">
            <img src="../../assets/images/login/login.svg" alt="">
            <input type="text" placeholder="Логин" id="loginLogin" name="login" required>
        </div>

        <div class="form__item">
            <img src="../../assets/images/login/password.svg" alt="">
            <input type="password" placeholder="Пароль" id="passwordLogin" name="password" required>
        </div>

        <div class="login__button-wrapper">
            <button class="login__button" id="btnLogin" name="enter">Войти</button>
        </div>
    </form>

    <div class="create__button-wrapper">
        <a href="../registration/registration.php">
            <button class="create__button" id="btnCreateAccount">Создать аккаунт</button>

        </a>
    </div>
</div>
</body>
</html>