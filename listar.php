<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
    <link rel="stylesheet" href="estiloLista.css">
</head> 
<h2>Painel do Administrador</h2>
<table class="div1" border='solid'>
    <thead>
        <tr>
            <td><b>Nome/Email/Telefone</b></td>
            <td><b>Excluir/Alterar</b></td>
        </tr>
    </thead>
    <tbody>
    <a onclick="mudarPagina()">Ir para a tela de cadastro</a>
        <?php
            // Caso queira pegar entradas forneciadas pelo usuário:
            //$nome = $_POST["nome"];
            //$email = $_POST["email"];
            //$senha = $_POST["senha"];

            include("conecta.php");

            $comando = $pdo->prepare("SELECT * FROM usuarios");
            $resultado = $comando->execute();

            while ($linhas = $comando->fetch()) {
                $n = $linhas["nome"];
                $m = $linhas["email"];
                $t = $linhas["telefone"];
                $idUser = $linhas["idUser"];

                echo
                ("
                <form action='alterar.php' method='post'>
                    <tr class='topoPreto'>
                        <td><input type='text' name='nome' value='$n'></td>
                        <td><button class='botao' onclick=\"Deletar($idUser);\">Excluir</button></td>
                    </tr>
                    <tr>    
                        <td><input type='text' name='email' value='$m'></td>
                    </tr>
                    <tr>
                        <td><input type='text' name='telefone' value='$t'></td>
                        <td><button class='botao' name='confirm' onclick=\"alterar($idUser);\">Alterar</button></td>
                    </tr>
                    <tr>
                    </tr>
                </form>
                ");
            }
        ?>
    </tbody>
    <script>
        function Deletar(idUser){
            window.open("deletar.php?idUser="+idUser,"_self")
        }

        function alterar(idUser){
            window.open("deletar.php?idUser="+idUser,"_self")
        }

        function mudarPagina()
        {
            window.location.href = 'index.html'
        }
        </script>
</table>
