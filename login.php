<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Acadêmico</title>
    <link rel="stylesheet" href="css/principal.css">
    <script>
        function testasenha() {
            var p1 = document.forms["formsenha"]["senha"].value;
            var p2 = document.forms["formsenha"]["confirmasenha"].value;

            if (p1.length < 6) {
                alert("Senha muito pequena. Digite pelo menos 6 caracteres.");
                return false;
            }

            if (p1 != p2) {
                alert("Senhas diferentes. Tente de novo.");
                return false;
            }
        }
    </script>
</head>

<body>
    <form action="" method="post" onsubmit="return testasenha()">
        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha">
        <label for="confirmasenha">Confirmar senha: </label>
        <input type="password" name="confirmasenha" id="confirmasenha">

        <input type="submit" value="Enviar">
    </form>
</body>

</html>