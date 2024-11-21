<?php 

    include "../model/conexao.php";

    $id = $_GET['ID'];

    $delete = "DELETE FROM cadastro WHERE ID = $id";

    $result = $conn->query($delete);

    header('location: ProjetoX.php');

    exit();

?>