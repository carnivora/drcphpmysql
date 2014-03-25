<?php
// funcoes

// funcao divisao
function divisao($n1, $n2) {
	return $n1/$n2;
}

// Para colocar quebra de linha no php usar ."<br/>" antes do ; no echo
echo divisao (25,5) ."<br />";




function multiplica($v1, $v2) {
	return $v1*$v2;
}

echo multiplica (5,5) ."<br />";




// somar tres numeros

function soma3($n1,$n2,$n3) {
	return $n1+$n2+$n3;
}

echo soma3(5,56,98) ."<br />";



// funcao que retorna array

function pessoa($nome,$sexo,$idade) {
	return array('nome'=>$nome, 'sexo'=>$sexo, 'idade'=>$idade);
}

var_dump( pessoa('roberto','M',36)) ."<br />";



// escrever uma funcao que recebe um array e um nome
// e diz se dentro do array o nome é igual ao nome digitado

function testaPessoa($pessoa, $nome) {
	return ($pessoa['nome'] == $nome);
}

$roberto = pessoa('Roberto','M',36);

var_dump(testaPessoa($roberto, 'Roberto'));

echo "<br /><br />";



// receber dois numeros e mostrar o menor

function menor($num1,$num2) {
	if ($num1>$num2) {
		return $num2;
	}else{
		return $num1;
	}
}

var_dump( menor(10,2)) ;





// inverso do exercicio acima
function maior($num1,$num2) {
	if ($num1>$num2) {
		return $num1;
	}else{
		return $num2;
	}
}

// a variavel $valorMaior retorna o maior numero dos dois
$valorMaior = (maior(456,98));

echo "O numero maior = " .$valorMaior ."<br/><br/>";



// escreva uma funcao que responde o numero de caracteres da palavra "Roberto"

// strlen("roberto");  (7)

function contador($palavra) {
	return "A palavra {$palavra} tem " .strlen($palavra) ." caracteres"; 
}
echo contador("paralelepipedo") ."<br/><br/>";



// comparar numero de caracteres de duas palavras e mostrar qual é a maior

function palavraMaior($palavra1,$palavra2){
	if (strlen($palavra1)>strlen($palavra2)) {
		return $palavra1;
	}else if (strlen($palavra1)==strlen($palavra2)){
		echo "As palavras tem o mesmo numero de letras";
	}else{
		return $palavra2;
	}
}

echo palavraMaior("lanterna-verde","homem-passaro-azul");

?>


