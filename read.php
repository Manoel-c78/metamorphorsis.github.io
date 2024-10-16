<?php 
    include "../model/conexao.php";

    $select = "SELECT * FROM cadastro";

    $result = $conn->query($select);

?>

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