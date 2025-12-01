<?php
include "db.php";

$idpro  = $_POST["idpro"];
$nompro = $_POST["nompro"];

$sql = "UPDATE productos SET nompro='$nompro' WHERE idpro=$idpro";
$res = mysqli_query($conn, $sql);

echo $res ? "OK" : "ERROR";
?>
