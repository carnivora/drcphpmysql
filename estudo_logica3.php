<?php

/*
Estruturas de repeticao:

Para contar até 10:

$i++ // Incremento 

for (
		variavel no valor inicial;
		variavel no valor final;
		incremento
	)
	{
	faça...
	}
*/

for ($i=0; $i <=10; $i++) { 
	echo $i."<br />";
}


/*
Para contar de 1 a 5
*/

for ($i=1; $i<=5; $i++) { 
	echo $i. "<br />";
}

/*
Usando while
*/

$contador = 0;

while ( $contador <= 10) {
	echo $contador. "<br />";
	$contador++;
}

?>




