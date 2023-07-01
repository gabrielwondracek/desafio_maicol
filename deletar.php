<?php
include("conecta.php");
$idUser = $_GET["idUser"];
$comando = $pdo->prepare("DELETE FROM usuarios WHERE idUser=$idUser");
$resultado = $comando->execute();

header("Location: listar.php");

?>