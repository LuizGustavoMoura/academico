<!-- <!DOCTYPE html>
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

</html> -->

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['usuario'], $_POST['senha'])) {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

            require ('script/conexao.php');

            $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";

            $resultado = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultado) == 1) {
                session_start();
                $_SESSION['usuario'] = $usuario;

                header("Location:dashboard.php");
                exit;
            } else {
                echo "Usuário ou senha inválido(a)";
            }

            mysqli_close($conexao);
        } else {
            echo "Por favor, preencha os campos";
        }
    } else {
        header("Location:dashboard.php");
        exit;
    }
?>