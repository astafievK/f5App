<?php

session_start();

if (isset($_POST['leave'])) {
    session_unset();
    session_destroy();

    header("Location: ../authorization/authorization.php");
    exit();
}