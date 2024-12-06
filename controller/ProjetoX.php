<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
    <link rel="shortcut icon" href="./Imagens/header3.png">
    <link rel="stylesheet" href="../view/ProjetoX.css">
    <title>ClouDri - Sua loja de moda mais rápida!</title>
</head>
<body>
    

    <a href="cadastro_loja.php" id="minhaloja">Cadastre sua loja</a>
    <a href="entregador.php" id="entregador">Seja um entregador</a>

    <header>         
        <div id="botão">
            
            <div class="acesso-geral">
                    <button id="login"> <b>Acesse sua conta</b></button></a>
                    <div class="acesso-tudo">
                        <a href="logar.php"><button class="acesso" id="logar">Login</button></a>
                        <a href="cadastro.php"><button class="acesso" id="cadastro">Cadastre-se</button></a>
                    </div>
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
    <h1>Lojas</h1>
        <?php 
            while($cadastro = $result->fetch_object()){

                echo "<p style='font-size: 15px; color: #555;'><strong></strong>" . $cadastro->nome_fantasia."</p>";
                echo "<div class='tarefa' style='width: 200px; height: 200px; border: 1px solid #ddd; padding: 10px; background-color: #f8f8f8; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);'>";

                    echo "<td>";
                        echo "<a href='delete.php?ID=$cadastro->ID'>Excluir</a>";
                    echo "</td>";

                    echo "<td>";
                        echo "<a href='editar.php?ID=$cadastro->ID'>Editar</a>";
                    echo "</td>";

                echo "</div>";    

            }
        ?>

    </tbody>

</div>