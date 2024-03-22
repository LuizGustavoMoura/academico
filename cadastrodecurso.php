<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>

<body>
    <p>Preencher os dados do curso(a):</p>

    <fieldset>
        <legend>Cadastro de Curso(a)</legend>

        <form action="cadastro_curso.php" method="post">
            <p>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome">
            </p>
            <p>
                <label for="duracao">Duração: </label>
                <input type="text" name="duracao" id="duracao">
            </p>
            <p>
                <label for="coordenador">Coordenador(a): </label>
                <select name="coordenador" id="coordenador">
                    <?php
                        require ('script/conexao.php');

                        $sql = "SELECT cpf, nome FROM professor";
                        $resultado = mysqli_query($conexao, $sql);
                        
                        while ($row = mysqli_fetch_assoc($resultado)) {
                            echo "<option value='{$row['cpf']}'>{$row['nome']}</option>";
                        }
                    ?>
                </select>
            </p>
            <p>
                <label for="nivel">Nível:</label>
                <select name="nivel" id="select">
                    <option value="">Selecione o nível do curso</option>
                    <option value="tecnico">Técnico</option>
                    <option value="tecnologo">Tecnólogo</option>
                    <option value="bacharelado">Bacharelado</option>
                    <option value="licenciatura">Licenciatura</option>
                    <option value="especializacao">Especialização</option>
                </select>
            </p>
            <p>
                <label for="modalidade">Modalidade:</label>
                <select name="modalidade" id="select">
                    <option value="">Selecione a modalidade do curso</option>
                    <option value="presencial">Presencial</option>
                    <option value="ead">Educação à distância (EAD)</option>
                </select>
            </p>
        </form>
    </fieldset>
</body>

</html>