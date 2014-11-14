<?php

$descriptor	= fopen("libro.txt", "a+");

$line_numero = 1;
//feof() -- busca el final del archivo = true
while (!feof($descriptor)){
	$linea = fgets($descriptor,4059);
	echo "linea # $line_numero = ".$linea."<br>";
	$line_numero++;
}
fclose($descriptor);
//--


//--- almacenar en Array
$descriptor	= fopen("libro.txt", "a+");
$archivo="";
$i = 1;
while (!feof($descriptor)){
	$linea = fgets($descriptor,4059);
	$archivo .= "linea $i = ".$linea;	
	$i++;
}
fclose($descriptor);
//---
$lista =explode(" ",$archivo); echo $lista;

echo "<hr><h2>imprimir array con 'EXPLODE()'</h2>";

for($i=0; $i<count($lista); $i++){
	echo "<br>lista[$i] = $lista[$i] <br>";
}
