<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Animal</title>
    <link rel="stylesheet" href="styleLA.css">
</head>
<body>
    <!-- Botão para voltar ao menu principal -->
    <button><a href="../index.html">Voltar ao Menu</a></button><br>

    <?php
        // Inclui o arquivo de conexão ao banco de dados
        include("../include/conexao.php");

        // Consulta para selecionar todos os dados dos animais e seus respectivos donos
        $sql = "SELECT ani.id AS animal_id, ani.nome AS animal_nome, ani.especie AS animal_especie, ani.raca AS animal_raca, 
        ani.data_nascimento AS animal_nascimento, ani.idade AS animal_idade, ani.castrado AS animal_castrado, pessoa.nome AS nome_dono
        FROM animal ani
        LEFT JOIN pessoa ON ani.id_pessoa = pessoa.id;";

        // Executa a consulta
        $result = mysqli_query($con, $sql);
    ?>

    <!-- Título da página -->
    <h1>Consulta de Animais</h1>
    
    <!-- Botão para cadastrar um novo animal -->
    <button><a href="cadastrarAnimal.php">Cadastrar Novo Animal</a></button>
    
    <!-- Tabela para exibir os animais -->
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Raça</th>
            <th>Data de Nascimento</th>
            <th>Idade</th>
            <th>Castrado</th>
            <th>Nome do Dono</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
    <?php
        // Loop para exibir os animais na tabela
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['animal_id']."</td>";
            echo "<td>".$row['animal_nome']."</td>";
            echo "<td>".$row['animal_especie']."</td>";
            echo "<td>".$row['animal_raca']."</td>";
            echo "<td>".$row['animal_nascimento']."</td>";
            echo "<td>".$row['animal_idade']."</td>";
            echo "<td>".($row['animal_castrado'] ? 'Sim' : 'Não')."</td>"; // Converte o valor do checkbox para 'Sim' ou 'Não'
            echo "<td>".$row['nome_dono']."</td>";
            echo "<td><a href='AlterarAnimal.php?id=".$row['animal_id']."'>Alterar</a></td>";
            echo "<td><a href='DeletarAnimal.php?id=".$row['animal_id']."'>Deletar</a></td>";
            echo "</tr>"; // Corrige o fechamento da tag <tr>
        }
    ?>
    </table>
</body>
</html>