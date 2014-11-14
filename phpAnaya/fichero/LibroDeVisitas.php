<?php

class LibroDeVisitas
{
	private $nombre;
	private $tamanio;		
	private $descriptor; //almacena  fopen()
	private $contenido_txt;

	function __construct($nombre){
		$this->nombre = $nombre;	
	}	
//-----	
	public function leerLibro(){
		$this->descriptor = fopen($this->nombre, "a+");//almacena  fopen()
		$this->tamanio = filesize($this->nombre);
		
		if($this->tamanio > 0){
			//almacena Contenido texto
			$this->contenido_txt = fread($this->descriptor, $this->tamanio);			
		}
		fclose($this->descriptor);
		return $this->contenido_txt;		
	}	
//------	
	public function escribirLibro($nombre,$texto){
		$this->descriptor = fopen($this->nombre, "a+");
		
		$nombre = "<b>".$nombre."</b><br>";
		$texto = "Texto : ".$texto."<br>";
		
		fwrite($this->descriptor, $nombre);
		fwrite($this->descriptor, $texto);
		
		fclose($this->descriptor);		
	}	
//Metodo Static
	public function copiaDeSeguridad(){
		copy($this->nombre, "copia.txt");
	}
	public function borrarLibro(){
		if(file_exists($this->nombre)){ //EVITAR errores
			unlink($this->nombre);
		}
	}
	
	
	public function renombrarCopia($nuevo_nombre){
		rename($this->nombre, $nuevo_nombre);
	}
	
}//FIN CLASE







//HTML

	$objLibro = new LibroDeVisitas("libro.txt");
	echo $objLibro->leerLibro();	
	//$objLibro->borrarLibro();


	echo "<h2>2</h2>";
	
	if (isset($_GET['nombre']) and isset($_GET['texto'])){
		$objLibro->escribirLibro($_GET['nombre'], $_GET['texto']);
		echo "cambio fichero";
	}
	
	
	
	echo gettype($objLibro);	
	
	
	
	
	
	
	





