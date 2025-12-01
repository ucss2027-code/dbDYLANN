<?php
include "db.php";

$idpro = $_POST["idpro"];

$sql = "DELETE FROM productos WHERE idpro=$idpro";
$res = mysqli_query($conn, $sql);

echo $res ? "OK" : "ERROR";
?>
