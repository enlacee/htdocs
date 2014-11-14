<?php

//CLASE ABSTRACTA
abstract  class  Alumno
{	
	protected $nombre;
	protected $apellido;
	protected $codigoAlumno;	
	
	function __construct($nombre,$apellido,$codigo){
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->codigoAlumno = $codigo; 
	}	
	function setNombre($nombre) {
		$this->nombre = $nombre;		
	}
	function setApellido($apellido) {
		$this->apellido = $apellido;		
	}
	function setCodigoAlumno($codigo){
		$this->codigoAlumno = $codigo;
	}	
	//GET
	function getNombre(){
		return  $this->nombre;
	}
	function getApellido(){
		return $this->apellido;
	}
	function getCodigoAlumno(){
		return $this->codigoAlumno;
	}
	//METODO ABSTRACTO PLANTILLA
	abstract function setBono($bono);
	abstract function getBono();

}//FIN CLASE



class AlumnoNuevo extends Alumno
{
	private $bono;
	
	function __construct($nombre,$apellido,$codigo,$bono){
		parent::__construct($nombre, $apellido, $codigo);
		$this->setBono($bono); 
	}	
	function setBono($bono){
		$this->bono =(isset($bono))?$bono :0;
	}
	function getBono() {
		return $this->bono;
	}	
}//FIN CLASE

	
class AlumnoAntiguo	extends Alumno
{	
	private $bono;
	
	function __construct($nombre, $apellido, $codigo,$bono){
		parent::__construct($nombre, $apellido, $codigo);
		$this->setBono($bono);
	}	
	function setBono($bono){
		$this->bono = ($bono*0.1)+$bono;
	}
	function getBono() {
		return $this->bono;
	}	
}//FIN CLASE
	
	
	
	
	
	
//IMPRIMIRNDO clase	//NO SE PUEDE SOBRECARGAR
	$objAlumNuevo = new AlumnoNuevo("victor anibal", "copitan norabuena", 5251245125,500.99);
	
	echo "<H1>IMPRIMIR DATOS DEL ALUMNO NUEVO REGISTRADO</H1>";
	echo "nombre: ".$objAlumNuevo->getNombre()."<br>";
	echo "apellido: ".$objAlumNuevo->getApellido()."<br>";
	echo "codigo: ".$objAlumNuevo->getCodigoAlumno()."<br>";
	echo "BONO: ".$objAlumNuevo->getBono()."<br>";
	
	$objGuardado = serialize($objAlumNuevo);
	
	
	echo "<H1>IMPRIMIR DATOS CAMBIADOS DEL ALUMNO REGISTRADO</H1>";
	$objAlumNuevo->setNombre("david nardo");
	$objAlumNuevo->setApellido("copitan norabuena");
	$objAlumNuevo->setBono(400.54);
	echo "nombre: ".$objAlumNuevo->getNombre()."<br>";
	echo "apellido: ".$objAlumNuevo->getApellido()."<br>";
	echo "codigo: ".$objAlumNuevo->getCodigoAlumno()."<br>";
	echo "BONO: ".$objAlumNuevo->getBono()."<br>";
	
	//UNSERIALIZE()  guarda los bits.
	$obj = unserialize($objGuardado);
	echo "<H1>Recuperando datos anteriores SERIALIZE()</H1>";
	echo "nombre: ".$obj->getNombre()."<br>";
	echo "apellido: ".$obj->getApellido()."<br>";
	echo "codigo: ".$obj->getCodigoAlumno()."<br>";
	echo "BONO: ".$obj->getBono()."<br>";
	
	

	echo "<H1>imprimiendo ALUMNO ANTIGUO CON 10 % DE BONO MAS</H1>";
	
	$objAlumAntiguo = new AlumnoAntiguo("carlos miguel", "caceres torres", 562541254125, 500.99);
	echo "nombre: ".$objAlumAntiguo->getNombre()."<br>";
	echo "apellido: ".$objAlumAntiguo->getApellido()."<br>";
	echo "codigo: ".$objAlumAntiguo->getCodigoAlumno()."<br>";
	echo "BONO: ".$objAlumAntiguo->getBono()."<br>";
	
	
	echo "<br><b>nombre de la clase: </b>".get_class($objAlumAntiguo);
	echo "<br><b>nombre de la clase PADRE: </b>".get_parent_class($objAlumNuevo)."<br>";
	
	$class = get_declared_classes();
	print_r($class);






