<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
    <link rel="shortcut icon" href="./Imagens/header3.png">
    <link rel="stylesheet" href="../view/ProjetoX.css">
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

    <div id="inicio">

    <img src="../view/moda.jpg" alt="moda" id="moda">
    <center> <input type="search" name="pesquisa" id="pesquisa" placeholder="Busque por roupas, itens, lojas e muito mais...">
    <input type="submit" value="Buscar" id="enviar">
    </center>
    
    </div>   
        
    
    
</body>
</html>

<?php 
    include ('../model/conexao.php');

    $select = "SELECT * FROM loja";

    $result = $conn->query($select);

?>

<br>
<br>

    <div id="lojas">
    
    <tbody>
    <h1 id="titulo_loja">Lojas</h1>
        <?php 
            while($cadastro = $result->fetch_object()){
                
                $url = "detalhes_loja.php?ID=" . $cadastro->ID;

                echo "<a href='detalhes_loja.php?ID=" . $cadastro->ID . "' style='text-decoration: none;'>";
                echo "<div class='tarefa' style='width: 350px;; height: 150px; border: 1px solid #ddd; padding: 10px; background-color: #f8f8f8; box-shadow: 2px 2px 5px rgba(0,0,0,0.1); border-radius: 10px;'>";

                echo "<div style='text-align: center; margin-bottom: 10px;'>";
                    echo "<img id='foto_loja' src='../uploads/" . htmlspecialchars($cadastro->foto_loja) . "' alt='Foto da Loja' style='max-width: 100%; height: auto; border-radius: 5px;'>";
                    echo "<p id='nome_fantasia' style='font-size: 15px; color: #555; bottom: 125px; right: 130px;;'><strong></strong>" . $cadastro->nome_fantasia."</p>";
                    echo "<p id='servico' style='font-size: 15px; color: #FFD700; bottom: 170px; left: 50px; position: relative;'>". "<strong>★5.0</strong> • Categorias: <strong>" . $cadastro->servico_oferecido . "</strong></p>";

                echo "</div>";

                echo "</div>";    

                echo "</a>";
            }
        ?>

    </tbody>

</div>