<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Acadêmico</title>
    <link rel="stylesheet" href="css/principal.css">
    <script type="text/javascript" src="script/codigo.js"></script>
</head>
<body id="frequencia">
    <a href="index.php">Início</a>

    <h1>Frequência do Aluno</h1>
    
    <form name="formalunos" action="" method="post">
        <p>
            <label for="matricula">Matrícula: </label>
            <input type="text" name="matricula" id="matricula" placeholder="Digite a matrícula">
        </p>
        <p>
            <label for="nomealuno">Nome do aluno(a): </label>
            <input type="text" name="nomealuno" id="nomealuno" placeholder="Digite o nome do aluno">
        </p>
        <p>
            <label for="datafalta">Data da Falta: </label>
            <input type="text" name="datafalta" id="datafalta">
        </p>

        <button type="button" name="button" onclick="justificafalta(this.form)">Justificar Falta</button>
        <button type="button" onclick="testaform(this.form)">Testar Dados</button>
    </form>
</body>
</html>