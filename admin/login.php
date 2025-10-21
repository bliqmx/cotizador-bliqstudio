<?php
session_start();
require '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $pass = $_POST['password'] ?? '';

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($pass, $user['password_hash'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['last_activity'] = time();
        header("Location: index.php");
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Login | Cotizador Bliq Studio</title>
<link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
  <div class="login-container">
    <h2>Acceso al Panel</h2>
    <form method="post">
      <input type="email" name="email" placeholder="Correo electrónico" required><br>
      <input type="password" name="password" placeholder="Contraseña" required><br>
      <button type="submit">Entrar</button>
      <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    </form>
  </div>
</body>
</html>
