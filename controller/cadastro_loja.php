<?php

include('../model/conexao_minhaloja.php');

if(!empty($_GET)){

    $razao = mysqli_real_escape_string($conn_loja, $_GET['razao'] ?? '');
    $fantasia = mysqli_real_escape_string($conn_loja, $_GET['fantasia'] ?? '');
    $inscricao = mysqli_real_escape_string($conn_loja, $_GET['inscricao'] ?? '');
    $CPF = mysqli_real_escape_string($conn_loja, $_GET['cpf_cnpj'] ?? '');
    $CEP = mysqli_real_escape_string($conn_loja, $_GET['CEP'] ?? '');
    $rua = mysqli_real_escape_string($conn_loja, $_GET['rua'] ?? '');
    $numero = mysqli_real_escape_string($conn_loja, $_GET['numero'] ?? '');
    $bairro = mysqli_real_escape_string($conn_loja, $_GET['bairro'] ?? '');
    $cidade = mysqli_real_escape_string($conn_loja, $_GET['cidade'] ?? '');
    $estado = mysqli_real_escape_string($conn_loja, $_GET['estado'] ?? '');
    $telefone_loja = mysqli_real_escape_string($conn_loja, $_GET['telefone_loja'] ?? '');
    $email_loja = mysqli_real_escape_string($conn_loja, $_GET['email_loja'] ?? '');
    $nome_proprietario = mysqli_real_escape_string($conn_loja, $_GET['nome_proprietario'] ?? '');
    $CPF_proprietario = mysqli_real_escape_string($conn_loja, $_GET['CPF_proprietario'] ?? '');
    $telefone_proprietario = mysqli_real_escape_string($conn_loja, $_GET['telefone_proprietario'] ?? '');
    $servico = mysqli_real_escape_string($conn_loja, $_GET['servico'] ?? '');
    $funcionamento = mysqli_real_escape_string($conn_loja, $_GET['funcionamento'] ?? '');
    $fechamento = mysqli_real_escape_string($conn_loja, $_GET['fechamento'] ?? '');
    $dias = mysqli_real_escape_string($conn_loja, isset($_GET['dias']) ? implode(',', $_GET['dias']) : '');

$Verify = "SELECT * FROM loja WHERE cpf_cnpj = '$CPF'";
$Result = mysqli_query($conn_loja, $Verify);

if (mysqli_num_rows($Result) > 0) {
echo "Este CNPJ/CPF já está cadastrado.";
} 

else {

$insert_loja = mysqli_query($conn_loja, "INSERT INTO loja (ID, razao_social, nome_fantasia, inscricao, cpf_cnpj, CEP_loja, rua_loja, numero_loja, bairro_loja, cidade_loja, UF_loja, telefone_loja, email_loja, nome_proprietario, CPF_proprietario, telefone_proprietario, servico_oferecido, horario_funcionamento, horario_fechado, dias_funcionamento) VALUES (NULL, '$razao', '$fantasia', '$inscricao', '$CPF', '$CEP', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$telefone_loja', '$email_loja', '$nome_proprietario', '$CPF_proprietario', '$telefone_proprietario', '$servico', '$funcionamento', '$fechamento', '$dias')");
}
}

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/cadastro_loja.css">
    <title>ClouDrie - Cadastro de loja</title>
</head>
<body>

    <h1 class="titulo">Cadastro</h1>
        <img src="../view/logo.png" alt="moda" class="moda">

    <form class="formulario" action="cadastro_loja.php" method="get">
        <label for="razao">Razão Social da loja:    </label>
        <input type="text" name="razao" id="razao" required>
        <br><br>

        <label for="fantasia">Nome fantasia da loja:    </label>
        <input type="text" name="fantasia" id="fantasia" required>
        <br><br>

        <label for="inscricao">Inscrição:   </label> <br>
        <input type="radio" name="inscricao" value="CPF" checked required/> CPF
        <input type="radio" name="inscricao" value="CNPJ" required/> CNPJ
        <br><br>

        <label for="cpf_cnpj">Digite seu CPF/CNPJ:  </label>
        <input type="number" name="cpf_cnpj" id="cpf_cnpj" required>
        <br><br>

        <label for="CEP">CEP:   </label>
        <input type="number" name="CEP" id="CEP" required>
        <br><br>

        <label for="rua">Rua:   </label>
        <input type="text" name="rua" id="rua" required>
        <br><br>

        <label for="numero">Número:   </label>  
        <input type="number" name="numero" id="numero" required>
        <br><br>

        <label for="bairro">Bairro:   </label>
        <input type="text" name="bairro" id="bairro" required>
        <br><br>

        <label for="cidade">Cidade:   </label>
        <input type="text" name="cidade" id="cidade" required>
        <br><br>

        <label for="estado">Estado:   </label>
        <input type="text" name="estado" id="estado" required>
        <br><br>

        <label for="telefone_loja">Telefone da loja:    </label>
        <input type="number" name="telefone_loja" id="telefone_loja" required>
        <br><br>

        <label for="email_loja">Email da loja:    </label>      
        <input type="email" name="email_loja" id="email_loja" required>
        <br><br>

        <label for="nome_proprietario">Nome do proprietário:    </label>
        <input type="text" name="nome_proprietario" id="nome_proprietario" required>
        <br><br>

        <label for="CPF_proprietario">CPF do proprietário:  </label>
        <input type="number" name="CPF_proprietario" id="CPF_proprietario" required>
        <br><br>

        <label for="telefone_proprietario">Telefone do proprietário:    </label>
        <input type="number" name="telefone_proprietario" id="telefone_proprietario" required>
        <br><br>

        <label for="servico">Serviço oferecido: </label>
        <input type="text" name="servico" id="servico" required>
        <br><br>

        <label for="funcionamento">Hórario de funcionamento:    </label>
        <input type="time" name="funcionamento" id="funcionamento" required>
        <br><br>

        <label for="fechamento">Hórario de fechamento:    </label>
        <input type="time" name="fechamento" id="fechamento" required>
        <br><br>

        <label for="dias">Selecione os dias da semana: </label> <br>
        <input type="checkbox" name="dias[]" value="Segunda" /> Segunda
        <input type="checkbox" name="dias[]" value="Terça" /> Terça
        <input type="checkbox" name="dias[]" value="Quarta" /> Quarta
        <input type="checkbox" name="dias[]" value="Quinta" /> Quinta
        <input type="checkbox" name="dias[]" value="Sexta" /> Sexta
        <input type="checkbox" name="dias[]" value="Sábado" /> Sábado
        <input type="checkbox" name="dias[]" value="Domingo" /> Domingo
        <br><br>
        <input type="submit" value="Cadastrar">


</form>
</body>
</html>