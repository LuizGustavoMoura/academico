<?php

    $dis = $_POST['disciplina'];

    require('script/conexao.php');

$sql = "SELECT turma.iddisciplina, disciplina.id, disciplina.nome AS dnome, professor.nome AS pnome FROM turma INNER JOIN (disciplina, professor) ON ( turma.iddisciplina = {$dis} AND professor.cpf = turma.idprofessor AND turma.iddisciplina = disciplina.id)";

    $cursodisciplina = mysqli_query($conexao, $sql);
    while ($row = mysqli_fetch_assoc($cursodisciplina)) {
        echo "A disciplina é '{$row['dnome']}' e o professor é {$row['pnome']}";
    }
?>

<p><button onclick="window.history.back()">Voltar</button></p>  