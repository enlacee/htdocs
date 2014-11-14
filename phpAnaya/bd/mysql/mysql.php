<?php

$servidor 	= "localhost";
$usuario 	= "root";
$pass		= "";
$basedatos	= "bd_anb";
/*
$descriptor = mysql_connect($servidor,$usuario,$pass);

mysql_select_db($basedatos,$descriptor);

//se cierra cuando terminamos
mysql_close($descriptor);


//TRES PASOS PARA CONECTARSE

//1ºAbri CONEXION Descriptor
$descriptor = mysql_connect($servidor,$usuario,$pass);

//2º seleccionar BD
mysql_select_db($basedatos);

//3º Cerrar CONEXION 
mysql_close($descriptor);
*/

$descriptor = mysql_connect($servidor,$usuario,$pass);
mysql_select_db($basedatos);
//--CONSULTA

$resultado = mysql_query("select *FROM usuarios",$descriptor)  or die("problema al iniciar La consulta") ;

print_r($resultado);
//$fila = mysql_fetch_array($resultado,MYSQL_ASSOC);
echo "<hr>";

echo "<hr>";





while ($fila = mysql_fetch_array($resultado,MYSQL_ASSOC)){
	echo "<br><br>$fila<br><br>";
	print_r($fila);	
}
mysql_close($descriptor);




/*
foreach ($fila as $indice=>$valor){
	echo "<br>[[$indice]] = $valor";
}
*/

