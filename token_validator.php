<?php
require __DIR__ . '/db.php';

function validarToken($token) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM client_tokens WHERE token = ? AND activo = 1 LIMIT 1");
    $stmt->execute([$token]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
