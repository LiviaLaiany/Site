<?php

if (!isset($_SESSION['usuario'])) {
    header('location: /');
}

unset($_SESSION['usuario']);
setcookie("PHPSESSID", "", time() - 3600);
session_destroy();
header('location: /');
?>