<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <input type="search" name="pesquisa" id="pesquisa" placeholder="Busque por roupas, itens, lojas e muito mais...">
    <input type="submit" value="Buscar" id="enviar">

    </div>   
        
    
    
</body>
</html>

<?php 
    include ('../model/conexao.php');

    $select = "SELECT * FROM cadastro";

    $result = $conn->query($select);

?>

<a href="index.php">voltar</a>
<br>
<br>

<table border="1">
    <thead>
        <th>ID</th> <th>Nome</th> <th>Celular</th> <th>Sexo</th> <th>Email</th> <th>Senha</th>
    </thead>
    <tbody>
        <?php 
            while($cadastro = $result->fetch_object()){
                echo "<tr>";
                    echo "<td>".$cadastro->ID."</td>";
                    echo "<td>".$cadastro->nome."</td>";
                    echo "<td>".$cadastro->celular."</td>";
                    echo "<td>".$cadastro->sexo."</td>";
                    echo "<td>".$cadastro->email."</td>";
                    echo "<td>".$cadastro->senha."</td>";

                    echo "<td>";
                        echo "<a href='delete.php?ID=$cadastro->ID'>Excluir</a>";
                    echo "</td>";

                    echo "<td>";
                        echo "<a href='editar.php?ID=$cadastro->ID'>Editar</a>";
                    echo "</td>";

                echo "</tr>";    

            }
        ?>

    </tbody>



</table>