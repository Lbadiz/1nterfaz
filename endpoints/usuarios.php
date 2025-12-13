<?php
require_once '../admn/config.php';
require_once '../helpers/response.php';

$pdo = getPDO();

// Parámetro opcional: status=activo/inactivo
$status = $_GET['status'] ?? null;

$sql = "SELECT id, nombre, rol, status FROM usuarios";
$params = [];

if ($status) {
    $sql .= " WHERE status = :status";
    $params['status'] = $status;
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$usuarios = $stmt->fetchAll();

if ($usuarios) {
    jsonResponse("success", $usuarios);
} else {
    jsonResponse("error", null, "No se encontraron usuarios", 404);
}
?>

karime tomas
mazatlan

Programa de Jovenes
Establo

Cesar
Sorianita
