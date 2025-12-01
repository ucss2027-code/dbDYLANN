<?php
include "db.php";

$nompro = $_POST["nompro"];

$sql = "INSERT INTO productos (nompro) VALUES ('$nompro')";
$res = mysqli_query($conn, $sql);

echo $res ? "OK" : "ERROR";
?>
