<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Portal de Clientes | Cotizador Bliq Studio</title>
<link rel="stylesheet" href="assets/styles.css">
</head>
<body>
<header>
  <h1>Portal de Clientes</h1>
</header>

<section>
  <p style="color:#555;">Bienvenido al portal de clientes. Aquí puedes consultar precios actualizados en tiempo real.</p>
  <input id="search" type="text" placeholder="Buscar productos o categorías...">
  <table id="results"></table>
</section>

<script src="assets/scripts.js"></script>
</body>
</html>
