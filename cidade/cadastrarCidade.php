<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cidade</title>
    <link rel="stylesheet" href="styleCC.css">
</head>
<body>
    <!-- Formulário para cadastro de cidades -->
    <form action="cadastrarCidadeExe.php" method="post">
        <!-- Campo de agrupamento de elementos do formulário -->
        <fieldset>
            <!-- Legenda do formulário -->
            <legend>Cadastro de Cidades</legend>
            <!-- Divisão para o campo de nome -->
            <div>
                <label for="nome">Nome</label> <!-- Rótulo para o campo de texto -->
                <input type="text" name="nome" id="nome" required> <!-- Campo de texto para o nome da cidade -->
            </div>
            <!-- Divisão para o campo de estado -->
            <div>
                <label for="estado">Estado</label> <!-- Rótulo para o campo de seleção -->
                <select name="estado" id="estado" required> <!-- Campo de seleção para o estado -->
                    <option value="SP">SP</option>
                    <option value="RJ">RJ</option>
                    <option value="MG">MG</option>
                </select>
            </div>
            <!-- Divisão para o botão de envio -->
            <div>
                <input type="submit" value="Enviar"> <!-- Botão para enviar o formulário -->
            </div>
            <div>
                <button><a href="../index.html">Voltar ao Menu</a></button> <!-- Botão para voltar ao menu -->
            </div>
        </fieldset>
    </form>
</body>
</html>