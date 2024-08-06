<?php
    include('../include/conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];


    $sql = "INSERT INTO pessoa(nome, email, endereco, bairro, id_cidade, cep) VALUES('$nome', '$email', '$endereco', '$bairro', '$cidade', '$cep')";
    $result = mysqli_query($con, $sql);
    if($result)
    {
        echo "Cadastro efetuado com sucesso!";
    }
    else
    {
        echo "Erro ao efetuar o cadastro!".mysqli_error($con);
    }

?>