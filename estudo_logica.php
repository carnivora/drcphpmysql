<?php

// logica > if then

$idade = 15;
$maiorIdade = 18;

//se uma pessoa é adulta

/*
Se idade é maior ou igual a 18, diga 'A gostosa é adulta'
O operador lógico de comparaçao é: >=
*/

if ($idade >= $maiorIdade)
	echo "A gostosa é adulta\n";


// Bloco de código

if ($idade >= $maiorIdade) {
	echo "Com {$maiorIdade} anos a gostosa é adulta \n";
} else {
	echo "Com {$idade} anos a gostosa é chave de cadeia \n";
}

var_dump( ($idade >= $maiorIdade) );

?>