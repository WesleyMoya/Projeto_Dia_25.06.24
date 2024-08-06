<?php
        include("../include/conexao.php");

        $nome = $_POST["nome"];
        $estado = $_POST["estado"];

        $sql = "INSERT INTO cidade(nome, estado) VALUES ('$nome', '$estado')";
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