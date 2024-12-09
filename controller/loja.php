<?php

include '../model/conexao.php';

    $id_loja = $_GET['ID'];
    $nome_loja = $_GET['nome']; 
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
    <link rel="shortcut icon" href="./Imagens/header3.png">
    <link rel="stylesheet" href="../view/loja.css">
    <title>ClouDri - Sua loja de moda mais rápida!</title>
</head>
<body>

    <header> 
        <img src="../view/logo.png" alt="logo" class="logo">   
        
        <a href="cadastro_loja.php" id="minhaloja">Cadastre sua loja</a>
        <a href="entregador.php" id="entregador">Seja um entregador</a>

        <div class="acesso-geral">
                    <button id="login"> <b>Acesse sua conta</b></button></a>
                    <div class="acesso-tudo">
                        <a href="logar.php"><button class="acesso" id="logar">Login</button></a>
                        <a href="cadastro.php"><button class="acesso" id="cadastro">Cadastre-se</button></a>
                    </div>

        <div id="botão">

        </div>

        </div>      
    </header>