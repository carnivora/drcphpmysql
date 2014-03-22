<?php

header('content-type: text/html; charset=utf-8');
echo "<pre>";
//var_dump($_POST);
sleep(2);

if (count ($_POST) >0){
	if ($_POST['nome'] == "") {
		$_POST ['nome'] = "DE PREENCHIMENTO OBRIGATORIO";
	}
	echo "O nome do aluno é ".$_POST['nome']."<br/>"; 

	if ($_POST['sobrenome'] == "") {
		$_POST ['sobrenome'] = "DE PREENCHIMENTO OBRIGATORIO";
	}
	echo "O sobrenome do aluno é ".$_POST['sobrenome']."<br/>";

	if ($_POST['sexo'] == "") {
		$_POST ['sexo'] = "DE PREENCHIMENTO OBRIGATORIO";
	}
	echo "O sexo do aluno é " .$_POST['sexo']."<br/>";

	if ($_POST['curso'] == "") {
		$_POST ['curso'] = "DE PREENCHIMENTO OBRIGATORIO";
	}
	echo "O curso do aluno é " .$_POST['curso'];
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

