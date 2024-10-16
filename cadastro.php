<?php 

    include('../model/conexao.php');

    $nome = mysqli_real_escape_string ($conn, $_GET['nome'] ?? '');
    $celular = mysqli_real_escape_string ($conn, $_GET['celular'] ?? '');
    $sexo = mysqli_real_escape_string ($conn, $_GET['sexo'] ?? '');
    $email = mysqli_real_escape_string ($conn, $_GET['email'] ?? '');
    $senha = mysqli_real_escape_string ($conn, $_GET['senha'] ?? '');

    $Verify = "SELECT * FROM cadastro WHERE email = '$email'";
    $Result = mysqli_query($conn, $Verify);

if (mysqli_num_rows($Result) > 0) {
    echo "Este e-mail já está cadastrado.";
} 

else {

$colocar = mysqli_query($conn, "INSERT INTO cadastro(ID, nome, celular, sexo, email, senha) VALUES(NULL, '$nome', '$celular', '$sexo', '$email', '$senha')");
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/cadastro.css">
    <title>ClouDrie - Cadastro de Clientes</title>
</head>
<script>
        function formatarTelefone(input) {
           
            const valor = input.value.replace(/\D/g, '');
            let telefoneFormatado = '';

            if (valor.length > 0) {
                telefoneFormatado = `(${valor.slice(0, 2)}) `;
                if (valor.length > 10) {
                    telefoneFormatado += `${valor.slice(2, 7)}-${valor.slice(7, 11)}`;
                } else {
                    telefoneFormatado += valor.slice(2);
                }
            }

            input.value = telefoneFormatado;
        }
    </script>
<body>
    <div class="titulo">
    <h1>Cadastro</h1>
    </div>
    <form class="formulario2" action="cadastro.php" method="get">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Insira seu nome">

        <label for="celular">Telefone</label>
        <input type="text" name="celular" id="celular" oninput="formatarTelefone(this)" placeholder="(XX)XXXXX-XXXX" maxlength="15">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Insira seu email">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Insira sua senha">

        <div class="sexo">
    <label>Sexo</label> <br>
    <input type="radio" name="sexo" value="Masculino" checked required/> Masculino
    <input type="radio" name="sexo" value="Feminino" required/> Feminino
    <input type="radio" name="sexo" value="Outro" required/> Outro
    <input type="radio" name="sexo" value="Não respondeu" required/> Prefiro não responder
       </div>

        <div class="botao"></div>
        <input type="submit" value="cadastrar">
        </div>
    </form>
    <div class="roda">
    <a href="read.php">Ir para a lista</a>
    </div>
</body>
</html>
