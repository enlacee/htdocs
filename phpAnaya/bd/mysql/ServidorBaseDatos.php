<?php

class ServidorBaseDatos
{
	private $servidor;
	private $usuario;
	private $clave;
	private $base_datos;
	private $descriptor;
	//---
	private $resultado;
	
	function __construct($servidor,$usuario,$clave,$base_datos){
		$this->servidor = $servidor;
		$this->usuario 	= $usuario;
		$this->clave 	= $clave;
		$this->base_datos=$base_datos;
		//---
		$this->conectarBaseDatos();
	}
	// --conectar Base Datos
	private function conectarBaseDatos(){
		$this->descriptor = mysql_connect($this->servidor,$this->usuario,$this->clave);
		mysql_select_db($this->base_datos,$this->descriptor);		
	}
	
	
	public function consulta($consulta){//LLENANDO 
		$this->resultado = mysql_query($consulta,$this->descriptor);
	}
	public function extraerRegistro(){//DEVUELVE UNA RESPUESTA // --- CON BUCLE BUSCA 1 X 1  -----------||----------||------
		if( $fila = mysql_fetch_array($this->resultado,MYSQL_ASSOC)){//columna =indice D ARRAY
			return $fila;
		}else
			return  false;	
	}
	public function numeroFilas(){
		return mysql_num_rows($this->resultado);
	}
	
	
	public function cerrar(){
		mysql_close($this->descriptor);
	}
	
	

}//FIN CLASE 
/*
//----------
$servidor = "localhost";
$usuario = "root";
$clave	= "";
$base_datos = "bd_anb";
//$objUsuario = new ServidorBaseDatos($servidor, $usuario, $clave, $base_datos);


//----- sengundo
$servidor = "localhost";
$usuario = "root";
$clave	= "";
$base_datos = "bd_anb";

$usuario = new ServidorBaseDatos($servidor, $usuario, $clave, $base_datos);
$usuario->consulta("SELECT *FROM usuarios");

while ($fila = $usuario->extraerRegistro()){ //$fila = ARRAY
	foreach ($fila as $indice => $valor){
		echo "[$indice] = $valor <br>";
	}
}


$cadena = "hola peru como estas ' ' ' ";
$cadena = addslashes($cadena);
echo $cadena;
*/



