<?php
$host = "localhost";
$user = "root";       // Tu usuario de MySQL en XAMPP
$password = "";       // Contraseña (por defecto en XAMPP va vacía)
$dbname = "emdigitalve_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?>