<?php

class Nombre{
	
	//Atributo privado
	private $nombre;	
	function setNombre($nombre) {
		$this->nombre = $nombre;
	}	
	function getNombre() {
		return $this->nombre;
	}	
}//FIN CLASE

//Fuera d la Clase
function cambiarNombre($objeto,$nombre) {
	$objeto->setNombre($nombre);
}


$objLuis = new Nombre;
$objLuis->setNombre("LUIS MIGUEL ARIAS");
echo "<br>nombre es: ".$objLuis->getNombre();
cambiarNombre($objLuis, "PEPE LUCHO ARIAS");
//$objLuis->cambiarNombre("PEPE LUCHO ARIAS");

echo "<br>ahora es: ".$objLuis->getNombre();

