<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pessoa</title>
    <link rel="stylesheet" href="styleCP.css">
</head>
<body>
    <!-- Formulário para cadastro de pessoas -->
    <form action="cadastrarPessoaExe.php" method="post">
        <!-- Campo de agrupamento de elementos do formulário -->
        <fieldset>
            <!-- Legenda do formulário -->
            <legend>Cadastro de Pessoa</legend>
            <!-- Divisão para os campos de entrada do formulário -->
            <div>
                <!-- Campo de nome da pessoa -->
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" required><br>

                <!-- Campo de e-mail da pessoa -->
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" required><br>

                <!-- Campo de endereço da pessoa -->
                <label for="endereco">Endereço: </label>
                <input type="text" name="endereco" id="endereco" required><br>

                <!-- Campo de bairro da pessoa -->
                <label for="bairro">Bairro: </label>
                <input type="text" name="bairro" id="bairro" required><br>
            </div>

            <!-- Divisão para o campo de seleção de cidade e outros campos -->
            <div>
                <!-- Campo de seleção para a cidade -->
                <label for="cidade">Cidade: </label>
                <select name="cidade" id="cidade" required>
                    <?php 
                        include('../include/conexao.php');
                        $sql = "SELECT * FROM cidade";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<option value='".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                        }
                    ?>
                </select>

                <!-- Campo de CEP da pessoa -->
                <div>
                    <label for="cep">CEP: </label>
                    <input type="text" name="cep" id="cep" required>
                </div>
                <!-- Divisão para o botão de envio -->
                <div>
                    <input type="submit" value="Enviar"> <!-- Botão para enviar o formulário -->
                </div>
                <!-- Divisão para o botão de voltar ao menu -->
                <div>
                    <button><a href="../index.html">Voltar ao Menu</a></button><br>
                </div>
            </div>
        </fieldset>
    </form>
</body>
</html>