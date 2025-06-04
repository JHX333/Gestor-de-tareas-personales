<?php
session_start();
require_once("C://xampp/htdocs/login/config/db.php");

if (empty($_SESSION['usuario_id'])) {
    echo json_encode([]);
    exit;
}

$usuario_id = $_SESSION['usuario_id'];

$db = new db();
$pdo = $db->conexion();
$stmt = $pdo->prepare("SELECT * FROM tareas WHERE usuario_id = ?");
$stmt->execute([$usuario_id]);

$tareas = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($tareas);