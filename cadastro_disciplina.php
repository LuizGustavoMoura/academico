<?php

$nome = $_POST['nome'];
$carga = $_POST['carga'];
$creditos = $_POST['creditos'];
$emenda = $_POST['ementa'];

require ('script/conexao.php'); 

$sql = "INSERT INTO curso (nome, carga, creditos, ementa) VALUES ('$nome','$carga', '$creditos', '$ementa')";

if (mysqli_query($conexao, $sql)) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . mysqli_error($conexao);
}

header("location:cadastrodisciplina.php");


?>