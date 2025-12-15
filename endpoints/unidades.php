<?php
require_once "../helpers/response.php";
require_once "../admn/config.php";

// Leer datos enviados en JSON
$input = json_decode(file_get_contents("php://input"), true);

$nombre = $input["nombre"] ?? null;
$modelo = $input["modelo"] ?? null;
$capacidad = $input["capacidad"] ?? null;

// Validar datos
if (!$nombre || !$modelo || !$capacidad) {
    jsonResponse("error", null, "Datos incompletos", 400);
}

try {
    $pdo = getPDO();

    // Preparar sentencia SQL con parámetros
    $stmt = $pdo->prepare("INSERT INTO unidades (uni_nombre, uni_modelo, uni_capacidad, uni_estado) VALUES (:nombre, :modelo, :capacidad, 1)");
    $stmt->bindParam(":nombre", $nombre);
    $stmt->bindParam(":modelo", $modelo);
    $stmt->bindParam(":capacidad", $capacidad);

    $stmt->execute();

    // Obtener el ID insertado
    $unidadId = $pdo->lastInsertId();

    // Respuesta exitosa
    jsonResponse("ok", ["id" => $unidadId], "Unidad guardada correctamente");
} catch (PDOException $e) {
    jsonResponse("error", null, "Error al guardar: " . $e->getMessage(), 500);
}
