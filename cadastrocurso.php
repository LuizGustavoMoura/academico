<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h1>Cadastro de Curso</h1>
    <p>Prezado(a) aluno(a), preencha com seus dados: </p>

    <form action="salvarcurso.php" method="post">
        <label for="aluno">Nome: </label>
        <input type="text" name="aluno" id="aluno">
        <label for="curso">Curso: </label>
        <input type="text" name="curso" id="curso">

        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>