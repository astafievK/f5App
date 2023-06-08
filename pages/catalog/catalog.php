<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>F5App | Каталог</title>
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
    <div class="logo-wrapper">
        <div class="logo">
            <svg viewBox="0 0 842 842" width="70" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M46.556 842H794.114C820.717 842 842 820.717 842 794.114V46.5561C842 21.2828 820.717 0 794.114 0H308.6C138.338 0 -3.64997e-05 138.338 -3.64997e-05 308.6V794.114C-3.64997e-05 820.717 21.2827 842 46.556 842ZM224.799 497.485H536.06C541.381 497.485 545.371 509.457 545.371 525.419C545.371 540.051 541.381 552.022 536.06 552.022H224.799V661.096C224.799 666.417 212.828 670.408 198.196 670.408C183.564 670.408 170.262 666.417 170.262 661.096V377.769V371.222C170.262 364.568 170.262 359.94 170.262 355.156V344.689V334.886C170.262 290.991 195.536 244.752 231.45 214.158C258.054 191.545 301.949 170.262 336.534 170.262H661.096C666.417 170.262 670.408 183.564 670.408 198.196C670.408 212.828 666.417 224.799 661.096 224.799H357.817C287.317 224.799 226.13 281.997 224.799 355.156C224.799 355.156 224.799 356.487 224.799 357.817V365.798C224.799 368.458 224.799 369.788 224.799 372.449V391.071V497.485ZM659.766 339.194C665.087 339.194 669.077 327.223 669.077 311.261C669.077 296.629 665.087 284.657 659.766 284.657H469.551H466.891H464.231H462.9H379.099C323.232 284.657 284.657 329.883 284.657 380.43C284.657 403.043 284.657 421.665 284.657 444.278V445.608H312.591H337.864H344.515C348.505 445.608 352.496 445.608 355.156 445.608C363.137 445.608 372.449 445.608 381.76 445.608C387.081 445.608 393.731 445.608 415.014 445.608H529.409C563.994 445.608 606.559 482.853 606.559 517.438V533.4C606.559 567.984 570.644 606.559 525.419 606.559L284.657 607.889C279.336 607.889 275.346 619.861 275.346 634.493C275.346 649.125 279.336 661.096 284.657 661.096H522.758C594.588 661.096 661.096 605.229 661.096 528.079V526.749C661.096 445.608 599.908 392.401 516.107 392.401H425.656H420.335H415.014H339.194C339.194 383.09 339.194 375.109 341.855 368.458C345.845 353.826 355.156 345.845 365.798 341.855C375.109 337.864 379.099 339.194 388.411 339.194H434.967H437.627C438.957 339.194 441.618 339.194 444.278 339.194H460.24H461.57H462.9H465.561H466.891H469.551H492.164H659.766Z"/>
            </svg>
        </div>
    </div>
    <div class="search-wrapper">
        <input id="search" type="text" placeholder="Поиск по ключевым словам..."/>
    </div>
    <div class="menu-wrapper">
        <ul class="menu">
            <li class="menu__item">
                <a href="../../pages/favorite/favorite.html">
                    <div class="menu__item-favorite" id="favorite" data-tooltip="123">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                            <path d="m480-121-41-37q-105.768-97.121-174.884-167.561Q195-396 154-451.5T96.5-552Q80-597 80-643q0-90.155 60.5-150.577Q201-854 290-854q57 0 105.5 27t84.5 78q42-54 89-79.5T670-854q89 0 149.5 60.423Q880-733.155 880-643q0 46-16.5 91T806-451.5Q765-396 695.884-325.561 626.768-255.121 521-158l-41 37Zm0-79q101.236-92.995 166.618-159.498Q712-426 750.5-476t54-89.135q15.5-39.136 15.5-77.72Q820-709 778-751.5T670.225-794q-51.524 0-95.375 31.5Q531-731 504-674h-49q-26-56-69.85-88-43.851-32-95.375-32Q224-794 182-751.5t-42 108.816Q140-604 155.5-564.5t54 90Q248-424 314-358t166 158Zm0-297Z"/>
                        </svg>
                    </div>
                </a>
            </li>
            <li class="menu__item">
                <div class="menu__item-profile" id="profile">
                    <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                        <path d="M222-255q63-44 125-67.5T480-346q71 0 133.5 23.5T739-255q44-54 62.5-109T820-480q0-145-97.5-242.5T480-820q-145 0-242.5 97.5T140-480q0 61 19 116t63 109Zm257.814-195Q422-450 382.5-489.686q-39.5-39.686-39.5-97.5t39.686-97.314q39.686-39.5 97.5-39.5t97.314 39.686q39.5 39.686 39.5 97.5T577.314-489.5q-39.686 39.5-97.5 39.5Zm.654 370Q398-80 325-111.5q-73-31.5-127.5-86t-86-127.266Q80-397.532 80-480.266T111.5-635.5q31.5-72.5 86-127t127.266-86q72.766-31.5 155.5-31.5T635.5-848.5q72.5 31.5 127 86t86 127.032q31.5 72.532 31.5 155T848.5-325q-31.5 73-86 127.5t-127.032 86q-72.532 31.5-155 31.5ZM480-140q55 0 107.5-16T691-212q-51-36-104-55t-107-19q-54 0-107 19t-104 55q51 40 103.5 56T480-140Zm0-370q34 0 55.5-21.5T557-587q0-34-21.5-55.5T480-664q-34 0-55.5 21.5T403-587q0 34 21.5 55.5T480-510Zm0-77Zm0 374Z"/>
                    </svg>
                </div>
            </li>
            <li class="menu__item">
                <a href="../cart/cart.php">
                    <div class="menu__item-cart" id="cart">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                            <path d="M196-120q-16 0-28.5-9.5T151-154L38-561q-4-15 5.5-27T69-600h200l185-270q5-6 11-9.5t14-3.5q8 0 14 3.5t11 9.5l184 270h205q15 0 24.5 12t5.5 27L809-154q-4 15-16.5 24.5T764-120H196Zm10-60h548l101-360H106l100 360Zm274-120q25 0 42.5-17.5T540-360q0-25-17.5-42.5T480-420q-25 0-42.5 17.5T420-360q0 25 17.5 42.5T480-300ZM342-600h273L479-800 342-600ZM206-180h548-548Z"/>
                        </svg>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</header>

<div class="main container-fluid">
    <div class="row">
    </div>
</div>

<div class="modal" id="modalProfile" style="display: none">
    <div class="login-wrapper">
        <span class="title">Авторизация</span>

        <span class="subtitle">Заполните форму и продолжайте покупки</span>

        <form method="POST" action="" id="loginForm">
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

            <div class="create-wrapper">
                <button class="create__button" id="btnCreateAccount" name="enter">Создать аккаунт</button>
            </div>
        </form>
    </div>
    <div class="registration-wrapper" style="display: none">
        <span class="title">Регистрация</span>

        <form method="POST" action="" id="registrationForm">
            <div class="form__item">
                <img src="../../assets/images/login/login.svg" alt="">
                <input type="text" placeholder="Логин" id="loginRegistration" required>
            </div>

            <div class="form__item">
                <img src="../../assets/images/login/login.svg" alt="">
                <input type="text" placeholder="Пароль" id="passwordRegistration" required>
            </div>

            <div class="form__item">
                <img src="../../assets/images/login/login.svg" alt="">
                <input type="text" placeholder="Почта" id="emailRegistration" required>
            </div>

            <div class="form__item">
                <img src="../../assets/images/login/password.svg" alt="">
                <input type="password" placeholder="Фамилия" id="surnameRegistration" required>
            </div>

            <div class="form__item">
                <img src="../../assets/images/login/password.svg" alt="">
                <input type="password" placeholder="Имя" id="nameRegistration" required>
            </div>

            <div class="form__item">
                <img src="../../assets/images/login/password.svg" alt="">
                <input type="password" placeholder="Отчество" id="patronymicRegistration" required>
            </div>

            <div class="form__item">
                <img src="../../assets/images/login/password.svg" alt="">
                <input type="password" placeholder="Номер телефона" id="numberRegistration" required>
            </div>

            <div class="registration__button-wrapper">
                <button class="registration__button" type="submit" id="btnRegistration">Регистрация</button>
            </div>
        </form>
    </div>
    <div class="modal-overlay" id="overlayProfile"></div>
</div>


<div class="modal" id="modalProduct" style="display: none">
    <div class="product-wrapper">
        <span class="title"></span>
        <span class="price"></span>
        <span class="description"></span>
    </div>
    <div class="modal-overlay" id="overlayProduct"></div>
</div>



<div id="goTop">
    <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
        <path d="M450-160v-526L202-438l-42-42 320-320 320 320-42 42-248-248v526h-60Z" fill="#FFFFFF"/>
    </svg>
</div>

<footer>
    <div class="logo">
        <svg class="logo__icon" viewBox="0 0 842 842" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M46.556 842H794.114C820.717 842 842 820.717 842 794.114V46.5561C842 21.2828 820.717 0 794.114 0H308.6C138.338 0 -3.64997e-05 138.338 -3.64997e-05 308.6V794.114C-3.64997e-05 820.717 21.2827 842 46.556 842ZM224.799 497.485H536.06C541.381 497.485 545.371 509.457 545.371 525.419C545.371 540.051 541.381 552.022 536.06 552.022H224.799V661.096C224.799 666.417 212.828 670.408 198.196 670.408C183.564 670.408 170.262 666.417 170.262 661.096V377.769V371.222C170.262 364.568 170.262 359.94 170.262 355.156V344.689V334.886C170.262 290.991 195.536 244.752 231.45 214.158C258.054 191.545 301.949 170.262 336.534 170.262H661.096C666.417 170.262 670.408 183.564 670.408 198.196C670.408 212.828 666.417 224.799 661.096 224.799H357.817C287.317 224.799 226.13 281.997 224.799 355.156C224.799 355.156 224.799 356.487 224.799 357.817V365.798C224.799 368.458 224.799 369.788 224.799 372.449V391.071V497.485ZM659.766 339.194C665.087 339.194 669.077 327.223 669.077 311.261C669.077 296.629 665.087 284.657 659.766 284.657H469.551H466.891H464.231H462.9H379.099C323.232 284.657 284.657 329.883 284.657 380.43C284.657 403.043 284.657 421.665 284.657 444.278V445.608H312.591H337.864H344.515C348.505 445.608 352.496 445.608 355.156 445.608C363.137 445.608 372.449 445.608 381.76 445.608C387.081 445.608 393.731 445.608 415.014 445.608H529.409C563.994 445.608 606.559 482.853 606.559 517.438V533.4C606.559 567.984 570.644 606.559 525.419 606.559L284.657 607.889C279.336 607.889 275.346 619.861 275.346 634.493C275.346 649.125 279.336 661.096 284.657 661.096H522.758C594.588 661.096 661.096 605.229 661.096 528.079V526.749C661.096 445.608 599.908 392.401 516.107 392.401H425.656H420.335H415.014H339.194C339.194 383.09 339.194 375.109 341.855 368.458C345.845 353.826 355.156 345.845 365.798 341.855C375.109 337.864 379.099 339.194 388.411 339.194H434.967H437.627C438.957 339.194 441.618 339.194 444.278 339.194H460.24H461.57H462.9H465.561H466.891H469.551H492.164H659.766Z"/>
        </svg>
        <span class="logo__label">
            Digital-агентство F5
        </span>
    </div>
</footer>

<script src="script.js"></script>
<script src="scripts/products.js"></script>
</body>
</html>