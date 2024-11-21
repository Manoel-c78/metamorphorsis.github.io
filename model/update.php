<?php 

include "conexao.php";

$id = mysqli_real_escape_string($conn, $_GET['ID'] ?? '');

$nome = mysqli_real_escape_string ($conn, $_GET['nome'] ?? '');
$celular = mysqli_real_escape_string ($conn, $_GET['celular'] ?? '');
$sexo = mysqli_real_escape_string ($conn, $_GET['sexo'] ?? '');
$email = mysqli_real_escape_string ($conn, $_GET['email'] ?? '');
$senha = mysqli_real_escape_string ($conn, $_GET['senha'] ?? '');


$update = "UPDATE cadastro SET nome = '$nome', celular = '$celular', sexo = '$sexo', email = '$email', senha = '$senha' WHERE ID = '$id'";

$result = $conn->query($update);

if($result === true){
    echo "atualizada com sucesso!";
}else{

    echo "nao atulizada";
}
    $conn->close ();
    header("Location:ProjetoX.php")

?>