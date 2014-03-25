<html>
<head><title>Media das notas dos alunos</title></head>

<body>

<?php

foreach ($_POST as $value) {
	var_dump($value);
}

?>

<form id="media" method="post">
	<input name="nota1" type="text" size="10px">
	<br /><br />
	<input name="nota2" type="text" size="10px">
	<br /><br />
	<input name="nota3" type="text" size="10px">
	<br /><br />
	<input name="nota4" type="text" size="10px">
	<br /><br />
	<button name="calcular" value="calcular">calcular notas</button>
</form>


</body>
</html>