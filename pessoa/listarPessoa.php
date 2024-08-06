<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Pessoa</title>
    <link rel="stylesheet" href="styleLP.css">
</head>
<body>
    <!-- Botão para voltar ao menu principal -->
    <button><a href="../index.html">Voltar ao Menu</a></button><br>

    <?php
        // Inclui o arquivo de conexão ao banco de dados
        include("../include/conexao.php");

        // Consulta para selecionar todos os dados das pessoas e suas respectivas cidades
        $sql = "SELECT pes.id AS pessoa_id, pes.nome AS pessoa_nome, pes.email AS pessoa_email, 
        pes.endereco AS pessoa_endereco, pes.bairro AS pessoa_bairro, cidade.nome AS cidade_nome,
        pes.cep AS pessoa_cep
        FROM pessoa pes
        LEFT JOIN cidade ON cidade.id = pes.id_cidade;";

        // Executa a consulta
        $result = mysqli_query($con, $sql);
    ?>

    <!-- Título da página -->
    <h1>Consulta de Pessoas</h1>
    
    <!-- Botão para cadastrar uma nova pessoa -->
    <button><a href="cadastrarPessoa.php">Cadastrar Nova Pessoa</a></button>
    
    <!-- Tabela para exibir as pessoas -->
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>CEP</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
    <?php
        // Loop para exibir as pessoas na tabela
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['pessoa_id']."</td>";
            echo "<td>".$row['pessoa_nome']."</td>";
            echo "<td>".$row['pessoa_email']."</td>";
            echo "<td>".$row['pessoa_endereco']."</td>";
            echo "<td>".$row['pessoa_bairro']."</td>";
            echo "<td>".$row['cidade_nome']."</td>";
            echo "<td>".$row['pessoa_cep']."</td>";
            echo "<td><a href='AlterarPessoa.php?id=".$row['pessoa_id']."'>Alterar</a></td>";
            echo "<td><a href='DeletarPessoa.php?id=".$row['pessoa_id']."'>Deletar</a></td>";
            echo "</tr>"; // Corrige o fechamento da tag <tr>
        }
    ?>
    </table>
</body>
</html>