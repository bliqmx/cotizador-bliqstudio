<?php
session_start();
$timeout = 1800; // 30 minutos

// Verifica si el usuario no ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

// Verifica inactividad
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
    session_unset();
    session_destroy();
    header("Location: ../login.php?expired=1");
    exit;
}

// Actualiza tiempo de actividad
$_SESSION['last_activity'] = time();
