<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Cidade</title>
    <link rel="stylesheet" href="styleLC.css">
</head>
<body>
    <!-- Botão para voltar ao menu principal -->
    <button><a href="../index.html">Voltar ao Menu</a></button><br>

    <?php
        // Inclui o arquivo de conexão ao banco de dados
        include("../include/conexao.php");

        // Consulta para selecionar todas as cidades
        $sql = "SELECT * FROM cidade";
        $result = mysqli_query($con, $sql);
    ?>

    <!-- Título da página -->
    <h1>Consulta de Cidades</h1>
    
    <!-- Botão para cadastrar uma nova cidade -->
    <button><a href="cadastrarCidade.php">Cadastrar Nova Cidade</a></button>
    
    <!-- Tabela para exibir as cidades -->
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
    <?php
        // Loop para exibir as cidades na tabela
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['estado']."</td>";
            echo "<td><a href='AlterarCidade.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href='DeletarCidade.php?id=".$row['id']."'>Deletar</a></td>";
            echo "</tr>"; // Corrige o fechamento da tag <tr>
        }
    ?>
    </table>
</body>
</html>