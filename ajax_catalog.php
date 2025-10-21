<?php
require __DIR__ . '/db.php';
header('Content-Type: application/json; charset=utf-8');

$q = $_GET['q'] ?? '';

try {
    if ($q) {
        $stmt = $pdo->prepare("SELECT * FROM catalog WHERE name LIKE ? OR category LIKE ?");
        $stmt->execute(["%$q%", "%$q%"]);
    } else {
        $stmt = $pdo->query("SELECT * FROM catalog ORDER BY category, name");
    }

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);

} catch (Exception $e) {
    echo json_encode(['error' => 'Error al consultar la base de datos']);
}
