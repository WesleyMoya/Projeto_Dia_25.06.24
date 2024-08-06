<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Animal</title>
    <link rel="stylesheet" href="styleCA.css">
</head>
<body>
    <!-- Formulário para cadastro de animais -->
    <form action="cadastrarAnimalExe.php" method="post">
        <!-- Campo de agrupamento de elementos do formulário -->
        <fieldset>
            <!-- Legenda do formulário -->
            <legend>Cadastro de Animais</legend>
            <!-- Divisão para os campos de entrada do formulário -->
            <div>
                <!-- Campo de nome do animal -->
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" required><br>

                <!-- Campo de espécie do animal -->
                <label for="especie">Espécie: </label>
                <input type="text" name="especie" id="especie" required><br>

                <!-- Campo de raça do animal -->
                <label for="raca">Raça: </label>
                <input type="text" name="raca" id="raca" required><br>

                <!-- Campo de data de nascimento do animal -->
                <label for="data_nascimento">Data de Nascimento: </label>
                <input type="date" name="data_nascimento" id="data_nascimento" required><br>

                <!-- Campo de castrado -->
                <label for="castrado">Castrado: </label>
                <input type="checkbox" name="castrado" id="castrado" value="1"><br><br>
            </div>

            <!-- Divisão para o campo de seleção de dono e botão de envio -->
            <div>
                <!-- Campo de seleção para o dono do animal -->
                <label for="dono">Dono: </label>
                <select name="dono" id="dono" required>
                    <?php 
                        include('../include/conexao.php');
                        $sql = "SELECT * FROM pessoa";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<option value='".$row['id']."'>".$row['nome']."</option>";
                        }
                    ?>
                </select>
                <!-- Divisão para o botão de envio -->
                <div>
                    <input type="submit" value="Enviar"> <!-- Botão para enviar o formulário -->
                </div>
                <div>
                    <button><a href="../index.html">Voltar ao Menu</a></button><br> <!-- Botão para voltar ao menu -->
                </div>
            </div>
        </fieldset>
    </form>

</body>
</html>