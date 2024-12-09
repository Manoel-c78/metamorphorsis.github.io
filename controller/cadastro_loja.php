<?php

include('../model/conexao.php');

if(!empty($_POST)){

    if (!empty($_FILES['foto_loja']['name'])) {
        $imagem_loja = $_FILES['foto_loja'];
        $nomeImagem = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', time() . "_" . basename($imagem_loja['name']));
        $tempImagem = $imagem_loja['tmp_name'];
        $destino = "../uploads/" . $nomeImagem;
    
        
        if (move_uploaded_file($tempImagem, $destino)) {
            $imagem_loja = $destino; 
        } else {
            die("Erro ao fazer upload da imagem.");
        }
    } else {
        $imagem_loja = ""; 
    }
    
    $razao = mysqli_real_escape_string($conn, $_POST['razao'] ?? '');
    $fantasia = mysqli_real_escape_string($conn, $_POST['fantasia'] ?? '');
    $inscricao = mysqli_real_escape_string($conn, $_POST['inscricao'] ?? '');
    $CPF = mysqli_real_escape_string($conn, $_POST['cpf_cnpj'] ?? '');
    $CEP = mysqli_real_escape_string($conn, $_POST['CEP'] ?? '');
    $rua = mysqli_real_escape_string($conn, $_POST['rua'] ?? '');
    $numero = mysqli_real_escape_string($conn, $_POST['numero'] ?? '');
    $bairro = mysqli_real_escape_string($conn, $_POST['bairro'] ?? '');
    $cidade = mysqli_real_escape_string($conn, $_POST['cidade'] ?? '');
    $estado = mysqli_real_escape_string($conn, $_POST['estado'] ?? '');
    $telefone_loja = mysqli_real_escape_string($conn, $_POST['telefone_loja'] ?? '');
    $email_loja = mysqli_real_escape_string($conn, $_POST['email_loja'] ?? '');
    $nome_proprietario = mysqli_real_escape_string($conn, $_POST['nome_proprietario'] ?? '');
    $CPF_proprietario = mysqli_real_escape_string($conn, $_POST['CPF_proprietario'] ?? '');
    $telefone_proprietario = mysqli_real_escape_string($conn, $_POST['telefone_proprietario'] ?? '');
    $servico = mysqli_real_escape_string($conn, $_POST['servico'] ?? '');
    $funcionamento = mysqli_real_escape_string($conn, $_POST['funcionamento'] ?? '');
    $fechamento = mysqli_real_escape_string($conn, $_POST['fechamento'] ?? '');
    $dias = mysqli_real_escape_string($conn, isset($_POST['dias']) ? implode(',', $_POST['dias']) : '');

$Verify = "SELECT * FROM loja WHERE cpf_cnpj = '$CPF'";
$Result = mysqli_query($conn, $Verify);

if (mysqli_num_rows($Result) > 0) {
echo "Este CNPJ/CPF já está cadastrado.";
} 

else {

$insert_loja = mysqli_query($conn, "INSERT INTO loja (ID, foto_loja, razao_social, nome_fantasia, inscricao, cpf_cnpj, CEP_loja, rua_loja, numero_loja, bairro_loja, cidade_loja, UF_loja, telefone_loja, email_loja, nome_proprietario, CPF_proprietario, telefone_proprietario, servico_oferecido, horario_funcionamento, horario_fechado, dias_funcionamento) VALUES (NULL, '$imagem_loja', '$razao', '$fantasia', '$inscricao', '$CPF', '$CEP', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$telefone_loja', '$email_loja', '$nome_proprietario', '$CPF_proprietario', '$telefone_proprietario', '$servico', '$funcionamento', '$fechamento', '$dias')");

if($insert_loja == true){
    header("location: ProjetoX.php");
}
}
}

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
    <link rel="stylesheet" href="../view/cadastro_loja.css">
    <title>ClouDrie - Cadastro de loja</title>
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

    <h1 class="titulo">Cadastro</h1>
        <img src="../view/logo.png" alt="moda" class="moda">

    <form class="formulario" action="cadastro_loja.php" method="post" enctype="multipart/form-data">

        <label for="foto_loja">Insira a foto da loja:    </label>
        <input type="file" name="foto_loja" alt="foto_loja" accept=".jpg, .jpeg, .png">
        <br><br>

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

        <label for="cpf_cnpj">Digite o CNPJ da loja:  </label>
        <input type="number" name="cpf_cnpj" id="cpf_cnpj" required>
        <br><br>

        <label for="CEP">CEP da loja:   </label>
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

        <input type="submit" value="Continuar">

        <h5 id="direitos">© 2024 CloDrive. Todos os direitos reservados</h5>
</form>
</body>
</html>