<?php 
    include "../model/conexao.php";

    $select = "SELECT * FROM cadastro";

    $result = $conn->query($select);
?>

<br>
<br>

    <thead>
        <th>ID</th> <th>Nome</th> <th>Celular</th> <th>Sexo</th> <th>Email</th> <th>Senha</th>
    </thead>
    
<div id="lojas">
    
    <tbody>
        <?php 
            while($cadastro = $result->fetch_object()){

                echo "<div class='tarefa' style='width: 200px; height: 200px; border: 1px solid #ddd; padding: 10px; background-color: #f8f8f8; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);'>";
                    echo "<p".$cadastro->ID."</p>";
                    echo "<p".$cadastro->nome."</p>";
                    echo "<p".$cadastro->celular."</p>";
                    echo "<p".$cadastro->sexo."</p>";
                    echo "<p".$cadastro->email."</p>";
                    echo "<p".$cadastro->senha."</p>";

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