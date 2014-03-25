<?php

/*
Dados 4 valores de notas bimestrais $b1, $b2, $b3, $b4
E a média para passar de ano é 7
	Se for maior ou igual a 7 escreva: voce passou
	Se for menor que 7 e maior de 5 escreva: voce esta de recuperacao
	Se for igual a 5 e maior que 3 escreva: voce repetiu de ano
	Se for menor que 3 escreva: voce voltou uma serie
*/

$b1 = 4;
$b2 = 8;
$b3 = 7;
$b4 = 9;
$media = 7;
$calculo = ($b1 + $b2 + $b3 + $b4) / 4;

if ( $calculo >= $media ) {
	echo "voce passou \n";
}
if ( $calculo < $media ) {
	if ( $calculo > 5 ) {
		echo "voce esta de recuperacao \n";
	}
}
if ( $calculo < 5 ) {
	if ( $calculo > 3 ) {
		echo "voce repetiu de ano \n";
	}
}
if ( $calculo < 3 ) {
	echo "voce voltou uma serie \n";
}

?>