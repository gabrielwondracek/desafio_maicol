<?php
    include("conecta.php");

    $nome  = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $comando = $pdo->prepare("INSERT INTO usuarios(nome,email,telefone) VALUES('$nome','$email','$telefone')");
    $resultado = $comando->execute();

    //Para voltar no forms
    header("Location: index.html");
    echo('
    <script>
    window.alert("cadastrado")
    </script>
    ')
?>
