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

    <form action="cadastromatricula.php.php" method="post">
        <p>
            <label for="aluno">Nome: </label>
            <input type="text" name="aluno" id="aluno" placeholder="Digite o seu nome">
        </p>
        <p>
            <label for="curso">Selecione o curso: </label>
            <input type="radio" name="curso" id="curso" value="m"> Manutenção de Computadores
            <input type="radio" name="curso" id="curso" value="r"> Redes de Computadores
            <input type="radio" name="curso" id="curso" value="p"> Programação de Computadores
            <input type="radio" name="curso" id="curso" value="w"> Programação Web
        </p>

        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>