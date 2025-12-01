<?php
include "db.php";

$idpro = $_GET["idpro"];

$sql = "SELECT * FROM productos WHERE idpro = $idpro";
$res = mysqli_query($conn, $sql);

$data = mysqli_fetch_assoc($res);

echo json_encode($data);
?>
