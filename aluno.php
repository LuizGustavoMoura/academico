<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Acadêmico</title>
    <link rel="stylesheet" href="css/principal.css">
</head>
<body>
    <h1>Cadastro dos Alunos</h1>
    <form action="" method="post">
        <label for="matricula">Matrícula: </label>
        <input type="text" name="matricula" id="matricula" placeholder="Digite a matrícula">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do aluno">
        <label for="datanascimento">Data de Nascimento: </label>
        <input type="date" name="datanascimento" id="datanascimento">
        <label for="genero">Gênero: </label>
        <input type="radio" name="genero" id="genero" value="Masculino">Masculino
        <input type="radio" name="genero" id="genero" value="Feminino">Feminino

        <button type="submit" class="btn btn-primary btn-lg" value="Enviar">Enviar</button>
    </form>
</body>
</html>