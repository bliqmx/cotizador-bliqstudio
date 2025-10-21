<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Catálogo tipo Flyer | Cotizador Bliq Studio</title>
<link rel="stylesheet" href="assets/styles.css">
<style>
  .flyer {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 15px;
    margin-top: 20px;
  }
  .card {
    background: #fff;
    border-radius: 10px;
    padding: 15px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }
  .card h3 {
    color: #28348F;
    margin-bottom: 5px;
  }
  .card p {
    margin: 3px 0;
  }
</style>
</head>
<body>
<header>
  <h1>Catálogo Tipo Flyer</h1>
</header>
<div class="flyer">
<?php
$stmt = $pdo->query("SELECT * FROM catalog ORDER BY category, name");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo "<div class='card'>";
  echo "<h3>{$row['name']}</h3>";
  echo "<p><strong>Categoría:</strong> {$row['category']}</p>";
  echo "<p><strong>Precio:</strong> $" . number_format($row['price'], 2) . "</p>";
  echo "</div>";
}
?>
</div>
</body>
</html>
