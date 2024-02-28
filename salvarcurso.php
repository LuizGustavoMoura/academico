<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Curso</title>
</head>
<body>
    <?php
    $nome = $_POST['aluno'];
    $curso = $_POST['curso'];

    echo '<h2>'.'Confira os dados'.'</h2>';

    echo '<p>'.$nome.'</p>';

    switch ($curso) {
        case 'm':
            echo '<p>'.'Manutenção de Computadores'.'</p>';
            break;
        case 'r':
            echo '<p>'.'Redes de Computadores'.'</p>';
            break;
        case 'p':
            echo '<p>'.'Programação de Computadores'.'</p>';
            break;
        case 'w':
            echo '<p>'.'Programação Web'.'</p>';
            break;
        
        default:
            echo '<p>'.'Digite um código válido (m, r, p ou w)'.'</p>';
            break;
    }

    //vetor
    //matriz
    //$grupo = array("Álvaro", "Kelly", "Letícia", "Rodrigo");
    //$i = 0;

    //do {
        //$aluno = $grupo[$i];
        //echo $aluno.'<br>';
        //$i++;
    //} while ($i < count($grupo));

    $grupo = array("Álvaro", "Kelly", "Letícia", "Rodrigo");

    for ($i=0; $i < count($grupo); $i++) { 
        $aluno = $grupo[$i];
        echo $aluno.'<br>';
    }

    $disciplinas = array("Redes de Computadores", "Algorítmos", "Programação de Computadores", "Manutenção de Computadores");
    foreach ($disciplinas as $materias) {
        echo '<p>'.$materias.'</p>';
    }
    ?>
</body>
</html>