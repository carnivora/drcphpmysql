<?php

/*
$olhos
$cabelos
$nacionalidade

se cabelo = loira, olhos = verdes e nacionalidade = brasileira
	entao 
		É uma mulher bonita
mas se for cabelos = castanhos, olhos = azuis e nacionalidade = chilena
	entao
		É uma mulher que nao é brasileira

*/

$olhos = "azuis";
$cabelos = "castanhos";
$nacionalidade = "chilena";

if (
	$olhos == "verdes" 
	&& $cabelos == "loira" 
	&& $nacionalidade == "brasileira"
	) 
{
	echo "É uma mulher bonita";
} else if (
	$olhos == "azuis" 
	&& $cabelos == "castanhos" 
	&& $nacionalidade == "chilena" 
	) 
{ 
	echo "É uma mulher que nao é brasileira";
}



?>