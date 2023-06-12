<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>F5App | Регистрация</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/libraries/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="../../assets/images/icon.png" type="image/x-icon">
    <script src="../../assets/libraries/jquery-3.7.0.min.js"></script>
</head>
<body>
<div class="registration-wrapper">
    <span class="title">Регистрация</span>

    <form method="POST" action="create.php" id="registrationForm">
        <div class="form__item">
            <img src="../../assets/images/login/login.svg" alt="">
            <input type="text" placeholder="Логин" name="login" id="login" required>
        </div>

        <div class="form__item">
            <img src="../../assets/images/login/login.svg" alt="">
            <input type="password" placeholder="Пароль" name="password" id="password" required>
        </div>

        <div class="form__item">
            <img src="../../assets/images/login/password.svg" alt="">
            <input type="text" placeholder="Имя" name="name" id="name" required>
        </div>

        <div class="form__item">
            <img src="../../assets/images/login/password.svg" alt="">
            <input type="text" placeholder="Фамилия" name="surname" id="surname" required>
        </div>

        <div class="form__item">
            <img src="../../assets/images/login/password.svg" alt="">
            <input type="text" placeholder="Отчество" name="patronymic" id="patronymic" required>
        </div>

        <div class="form__item">
            <img src="../../assets/images/login/login.svg" alt="">
            <input type="text" placeholder="Почта" name="email" id="email" required>
        </div>

        <div class="form__item">
            <img src="../../assets/images/login/password.svg" alt="">
            <input type="text" placeholder="Контактный номер" name="phone" id="number" required>
        </div>

        <div class="registration__button-wrapper">
            <button class="registration__button" type="submit" name="create">Регистрация</button>
        </div>
    </form>

    <div class="login__button-wrapper">
        <a href="../authorization/authorization.php">
            <button class="login__button">Уже есть аккаунт</button>
        </a>
    </div>
</div>
<script src="scripts/script.js"></script>
</body>
</html>