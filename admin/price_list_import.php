<?php
require 'includes/auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $tmp = $_FILES['file']['tmp_name'];
    $rows = [];

    if (($f = fopen($tmp, 'r')) !== false) {
        $header = fgetcsv($f);
        while (($line = fgetcsv($f)) !== false) {
            $rows[] = array_combine($header, $line);
        }
        fclose($f);
    }

    $msg = "Archivo importado correctamente (" . count($rows) . " registros).";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Importar Lista de Precios | Cotizador Bliq Studio</title>
<link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
<header>
  <h1>Importar Lista de Precios</h1>
</header>
<nav>
  <a href="index.php">Volver al panel</a> |
  <a href="logout.php">Cerrar sesión</a>
</nav>

<main>
  <form method="post" enctype="multipart/form-data">
    <input type="file" name="file" accept=".csv" required>
    <button type="submit">Importar</button>
  </form>

  <?php if (!empty($msg)): ?>
  <p style="color:green;"><?php echo $msg; ?></p>
  <?php endif; ?>
</main>
</body>
</html>
