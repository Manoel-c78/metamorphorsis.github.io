<?php 

include "../model/conexao.php";

$id = $_GET['ID'];

$select = "SELECT nome, celular, sexo, email, senha FROM cadastro WHERE ID= $id";

$result = $conn->query($select);

$cadastro = $result->fetch_object();

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <form action="update.php" method="get">

      <input type="number" value="<?= $id ?>" name="ID" hidden>
        
      <label for="">Seu nome</label>
        <input type="text" value="<?= $cadastro->nome ?>" name="nome">

        <label for="">Celular</label>
        <input type="number" value="<?= $cadastro->celular ?>" name="celular">

        <label for="sexo">Sexo</label> <br>
        <input type="radio" value="<?= $cadastro->sexo ?>" name="sexo" value="Masculino" checked required/> Masculino
        <input type="radio" value="<?= $cadastro->sexo ?>" name="sexo" value="Feminino" required/> Feminino
        <input type="radio" value="<?= $cadastro->sexo ?>" name="sexo" value="Outro" required/> Outro
        <input type="radio" value="<?= $cadastro->sexo ?>" name="sexo" value="Não respondeu" required/> Prefiro não responder <br><br>

        <label for="email">Insira seu email</label>
        <input type="email" value="<?= $cadastro->email ?>" name="email" id="email" placeholder="Email">

        <label for="senha">Insira sua senha</label>
        <input type="password" value="<?= $cadastro->celular ?>" name="senha" id="senha" placeholder="Senha">



        <input type="submit" value="Editar">        
    </form>

</body>
</html>