<?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
        header("Location:dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema Acadêmico</title>
        <link rel="stylesheet" href="css/principal.css">
    </head>

    <body id="inicio">
        <img src="imagens/logosenacv2.png" alt="logo senac" width="200px" height="auto">

        <h1>Controle Acadêmico</h1>

        <p>Bem-vindo ao <b>sistema de controle acadêmico</b>.</p> <p>Aqui, você poderá consultar suas <a href="nota.php" alt="notas da turma" target="_self">notas</a>.</p> <p>E também sua <i><a href="frequencia.php" alt="frequencia dos alunos">frequência</a></i>.</p>

        <h2>Menu</h2>
        
        <ul>
            <li><a href="aluno.php">Alunos</a></li>
            <li><a href="professor.php">Professores</a></li>
            <li><a href="disciplina.php">Disciplinas</a></li>
            <li><a href="turma.php">Turmas</a></li>
            <li><a href="nota.php">Notas</a></li>
            <li><a href="frequencia.php">Frequência</a></li>
        </ul>

        <?php
            // Meu primeiro código

            echo '<h2>'.'Sistema Acadêmico'.'</h2>';

            $aluno = '<p>'.'Luiz Gustavo'.'</p>';
            $curso = "Análise e Desenvolvimento de Sistemas";

            /* Esse é um comentário */

            echo "O aluno: ".$aluno."Frequenta o curso: ".$curso;

            $notas = array("prova1" => 8.3, "prova2" => 5.9, "prova3" => 9.2);

            echo '<p>'.($notas["prova1"]+$notas["prova2"]+$notas["prova3"])/3,'</p>';
        ?>
    </body>
</html>