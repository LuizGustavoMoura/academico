<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo das Médias</title>
</head>
<body>
<form action="media.php" method="post">
        <p>
            <label for="nome">Nome do aluno: </label>
            <input type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="p1">Nota da primeira prova: </label>
            <input type="text" name="p1" id="p1">
        </p>
        <p>
            <label for="p2">Nota da segunda prova: </label>
            <input type="text" name="p2" id="p2">
        </p>
        <p>
            <label for="falta">Quantidade de faltas: </label>
            <input type="text" name="falta" id="falta">
        </p>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>