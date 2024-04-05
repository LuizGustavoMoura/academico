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

        <form action="cadastromatricula.php" method="post">
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

        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cursos</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    require('script/conexao.php');
                    
                    $sql = "SELECT * FROM matricula";
                    $resultado = mysqli_query($conexao, $sql);

                    while ($row = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>";
                            echo "<td>".$row['nome']."</td>";
                            echo "<td>";
                                switch ($row['curso']) {
                                    case "m":
                                        echo "Manutenção de Computadores";
                                        break;
                                    
                                    case "r":
                                        echo "Redes de Computadores";
                                        break;
                                    
                                    case "p":
                                        echo "Programação de Computadores";
                                        break;
                                    
                                    case "w":
                                        echo "Programação Web";
                                        break;
                                    
                                    default:
                                        echo "Por favor, preencha os dados";
                                        break;
                                }
                            echo "</td>";
                            echo "<td>";
                                echo "<a href='editar_curso.php?id=".$row['id']."'>Editar</a>";
                                echo "<a href='excluir_curso.php?id=".$row['id']."'>Excluir</a>";
                            echo "</td>";
                        echo "</tr>";
                    }

                    mysqli_close($conexao);
                ?>
            </tbody>
        </table>
    </body>
</html>