<?php
// $hostname = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'cafeteria';
// $port = '3307';

// Tente estabelecer a conexão
$conexao = mysqli_connect("localhost", "root", "", "academico", "3307");

// Verifique se a conexão foi bem-sucedida
if (!$conexao) {
    die('Não foi possível conectar ao banco de dados' . mysqli_connect_error());
}

echo 'Conexão bem sucedida!';
?>

