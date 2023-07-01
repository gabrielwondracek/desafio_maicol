<?php
include("conecta.php");

$n  = $_POST["nome"];
$m = $_POST["email"];
$t = $_POST["telefone"];
$idUser = $_GET["idUser"];

if (empty($n)) {
    header("Location: listar.php");
}

if(isset($_POST["confirm"])) {
                $comando = $pdo->prepare("UPDATE usuarios SET nome='$n',email='$m',telefone='$t' WHERE idUser='$idUser' ");
                $resultado = $comando->execute();
                header("Location: listar.php");
            }
?>