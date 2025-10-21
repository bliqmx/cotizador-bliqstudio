<?php
require 'includes/auth.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Panel Admin | Cotizador Bliq Studio</title>
<link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
<header>
  <h1>Panel de Administración</h1>
</header>
<nav>
  <a href="price_lists_import.php">Importar CSV</a> |
  <a href="logout.php">Cerrar sesión</a>
</nav>

<main>
  <h2>Bienvenido</h2>
  <p>Has iniciado sesión correctamente en el sistema de cotizaciones de Bliq Studio.</p>
  <p>Desde este panel puedes importar catálogos, administrar productos y revisar las actualizaciones del sistema.</p>
</main>

<footer>
  <p style="text-align:center; font-size:0.9em; color:#777;">Versión 1.0 – Cotizador Bliq Studio</p>
</footer>
</body>
</html>
