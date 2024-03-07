<?php
//Verificar se o id esá selecionado
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //Abrir a conexão
    require('script/conexao.php');
    
    $sql = "SELECT * FROM matricula WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    //Verificar se existe id
    if (mysqli_num_rows($resultado) == 1) {
        $curso = mysqli_fetch_assoc($resultado);
    } else {
        //Deu erro. Volta para a lista dos cursos.
        header('Location: cadastrocurso.php');
        exit;
    }

    mysqli_close($conexao);
} else {
    //Não achou o id e termina o código
    header('Location: cadastrocurso.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h2>Editar Curso</h2>

    <form action="" method="post">
        <input type="text" name="id" id="id" value="<?php echo $curso['id']; ?>">

    </form>
</body>
</html>