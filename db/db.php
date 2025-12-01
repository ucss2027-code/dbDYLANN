<?php
$host = "nozomi.proxy.rlwy.net";
$port = "52881";
$user = "root";
$pass = "GOrYASQLlSxufJUsgwmdGcmivJZlQtxf";
$db   = "railway";

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// echo "Conectado correctamente"; // Solo para pruebas
?>
