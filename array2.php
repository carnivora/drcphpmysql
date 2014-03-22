<?php

header('content-type: text/html; charset=utf-8');
echo "<pre>";
//var_dump($_POST);
sleep(2);

if (count ($_POST) >0){
	foreach ($_POST as $campo => $valor) {
		echo "O valor {$campo} é {$valor}"."<br/>";
	}
	echo "<br/>";
}else{
	echo "Preencha o formulario seu burro!";
}


?>

<form method="POST">
	<input placeholder="nome" type="Text" name="nome"><br/>
	<input placeholder="sobrenome" type="Text" name="sobrenome"><br/>
	<input placeholder="sexo" type="Text" name="sexo"><br/>
	<input placeholder="curso" type="Text" name="curso"><br/>
	<input type="submit" name="Cadastro Pessoal">
</form>

