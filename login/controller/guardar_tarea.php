<?php
session_start();
require_once("C://xampp/htdocs/login/config/db.php");

if (empty($_SESSION['usuario_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'No autenticado']);
    exit;
}

$titulo = $_POST['titulo'] ?? '';
$descripcion = $_POST['descripcion'] ?? '';
$prioridad = $_POST['prioridad'] ?? '';
$usuario_id = $_SESSION['usuario_id'];

if (empty($titulo) || empty($prioridad)) {
    echo json_encode(['status' => 'error', 'message' => 'Faltan datos']);
    exit;
}

$db = new db();
$pdo = $db->conexion();
$stmt = $pdo->prepare("INSERT INTO tareas (usuario_id, titulo, descripcion, prioridad) VALUES (?, ?, ?, ?)");
$result = $stmt->execute([$usuario_id, $titulo, $descripcion, $prioridad]);

echo json_encode(['status' => $result ? 'ok' : 'error']);