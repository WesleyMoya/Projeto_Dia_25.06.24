<?php   
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $data_nascimento = $_POST['data_nascimento'];
    $castrado = isset($_POST['castrado']);
    $dono = $_POST['dono'];

    $nascimento = new DateTime($data_nascimento);
    $atual = new DateTime();
    $idade = $atual -> diff($nascimento)->y;

    include("../include/conexao.php");

    $sql = "INSERT INTO animal(nome, especie, raca, data_nascimento, idade, castrado, id_pessoa) 
    VALUES ('$nome', '$especie', '$raca', '$data_nascimento', '$idade', '$castrado', '$dono')";
        echo $sql;
        $result = mysqli_query($con, $sql);
        if($result)
        {
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        }
        else
        {
            echo "<h2>Erro ao cadastrar!</h2>";
            mysqli_error($con);
        }
?>