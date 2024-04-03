<p>Selecione o aluno e o curso: </p>
<fieldset><legend> Matrícula</legend>
<form method=”post” action=”cadastro_matricula.php”>
<label for=”aluno”>Selecione o aluno(a):</label>

<select name=”aluno” id=”select”>
<?php
require(“conexao.php”);
mysql_select_db(“sis_academico”);
$consulta=mysql_query(“SELECT cpf, nome FROM
aluno”);
while ($dados = mysql_fetch_array($consulta)) {
echo(“<option
value='”.$dados['cpf'].”'>”.$dados['
nome'].”</option>”);
}
?>
</select>
<br />
<label for=”curso”>Selecione o curso:</label>
<select name=”curso” id=”select”>
<?php
require(“conexao.php”);
mysql_select_db(“sis_academico”);
$consulta=mysql_query(“SELECT id_curso, nome FROM
curso”);
while ($dados = mysql_fetch_array($consulta)) {
echo(“<option value='”.$dados['id_
curso'].”'>”.$dados['nome'].”</option>”);

}

?>
</select>
<br /> <br />
<input type=”reset” value=”Limpar” name=”limpar” >
<input type=”submit” value=”Enviar” name=”submit” />
</form>
</fieldset>