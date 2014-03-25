<?php

/*
Utilizando If then Else if() {}else{}

Escreva: Ela é loira de olhos azuis
ou
Escreva: Ela é negra de olhos verdes

As variáveis sao: sexo, corCabelo, corOlhos
*/

$sexo = "feminino";
$corCabelo = "Loira";
$corOlhos = "Azuis";

if ( $sexo == "feminino" ) {
	if ( $corCabelo == "Loira" ) {
		if ( $corOlhos == "Azuis" ) {
			echo "Ela é loira dos olhos azuis";
		}
	}
	if ( $corCabelo == "negro" ) {
		if ( $corOlhos == "verdes" ) {
			echo "Ela é negra dos olhos verdes";
		}
	}
}


?>