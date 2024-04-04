<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>

<body>
    <p>Preencher os dados da disciplina:</p>

    <fieldset>
        <legend>Cadastro da Disciplina</legend>

        <form action="cadastro_disciplina.php" method="post">
            <p>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome">
            </p>
            <p>
                <label for="carga">Carga Horária: </label>
                <input type="number" name="carga" id="carga">
            </p>
            <p>
                <label for="creditos">Créditos: </label>
                <input type="number" name="creditos" id="creditos">
            </p>
            <p>
                <label for="ementa">Emenda: </label>
                <textarea name="ementa" id="ementa" cols="40" rows="6"></textarea>
            </p>
            </fieldset>

            <p>
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </p>
        </form>
</body>

</html>