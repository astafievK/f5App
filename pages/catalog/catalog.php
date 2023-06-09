<?php
session_start();

if(!isset($_SESSION['id'])) {
    header("Location: ../authorization/authorization.php");
    exit();
}

$idUser = $_SESSION['id'];
$name = $_SESSION['name'];
$surname = substr($_SESSION['surname'], 0, 2);
$roleString = $_SESSION['roleString'];

function printNameSurname($name, $surname)
{
    echo "<span>$name $surname.</span>";
}
function userIsAdmin($roleString){
    if ($roleString == "Администратор")
    {
        echo
        '
    <li class="menu__item">
        <a href="../addproduct/addProduct.php">
            <button class="menu__item-create" type="button" name="createProduct">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                    <path d="M450-200v-250H200v-60h250v-250h60v250h250v60H510v250h-60Z"/>
                </svg>
                <span>Добавить товар</span>
            </button>
        </a>
    </li>
    ';
    }
}
?>

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
            <?php userIsAdmin($roleString); ?>
            <li class="menu__item">
                <a href="../profile/profile.php">
                    <button class="menu__item-profile" type="button" name="profile">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                            <path d="M222-255q63-44 125-67.5T480-346q71 0 133.5 23.5T739-255q44-54 62.5-109T820-480q0-145-97.5-242.5T480-820q-145 0-242.5 97.5T140-480q0 61 19 116t63 109Zm257.814-195Q422-450 382.5-489.686q-39.5-39.686-39.5-97.5t39.686-97.314q39.686-39.5 97.5-39.5t97.314 39.686q39.5 39.686 39.5 97.5T577.314-489.5q-39.686 39.5-97.5 39.5Zm.654 370Q398-80 325-111.5q-73-31.5-127.5-86t-86-127.266Q80-397.532 80-480.266T111.5-635.5q31.5-72.5 86-127t127.266-86q72.766-31.5 155.5-31.5T635.5-848.5q72.5 31.5 127 86t86 127.032q31.5 72.532 31.5 155T848.5-325q-31.5 73-86 127.5t-127.032 86q-72.532 31.5-155 31.5ZM480-140q55 0 107.5-16T691-212q-51-36-104-55t-107-19q-54 0-107 19t-104 55q51 40 103.5 56T480-140Zm0-370q34 0 55.5-21.5T557-587q0-34-21.5-55.5T480-664q-34 0-55.5 21.5T403-587q0 34 21.5 55.5T480-510Zm0-77Zm0 374Z"/>
                        </svg>
                        <?php printNameSurname($name, $surname); ?>
                    </button>
                </a>
            </li>
            <li class="menu__item">
                <form action="../profile/leave.php" method="POST">
                    <a>
                        <button class="menu__item-leave" type="submit" name="leave">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                                <path d="M180-120q-24 0-42-18t-18-42v-600q0-24 18-42t42-18h291v60H180v600h291v60H180Zm486-185-43-43 102-102H375v-60h348L621-612l43-43 176 176-174 174Z"/>
                            </svg>
                        </button>
                    </a>
                </form>
            </li>
        </ul>
    </div>
</header>

<div class="main container-fluid">
    <div class="row">

    </div>
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
        <a class="logo__title" href="https://f5-studio.ru/">
            <span class="logo__label">Digital-агентство F5</span>
        </a>
    </div>
</footer>

<script src="script.js"></script>
<script src="scripts/products.js"></script>
</body>
</html>