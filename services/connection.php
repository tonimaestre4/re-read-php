<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "reread";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EQL;
    echo "Error de depuración: " . mysqli_connect_errno() . PHP_EQL;
    exit;
} else {
    mysqli_connect_charset($conn, "utf8");
}
?>