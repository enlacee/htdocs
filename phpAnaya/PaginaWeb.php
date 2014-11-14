<?php

class PaginaWeb{
	var $titulo;
	
	//------------------ ----------------//
	function __construct($tit){		
			$this->setTitulo($tit);			
	}
	//------------------ ----------------//

	//No puede acceder LAS clases HIJAS a este metodo 'PRIVATE'
	private function setTitulo($titulo) {
		$this->titulo =(!empty($titulo))?$titulo : "Titulo por Defecto";
	}
	function getTitulo() {
		return $this->titulo;
	}
	
	function cabecera(){		
		echo "<h1>cabecera $this->titulo </h1>";
	}
	function cuerpo(){
		echo "<h1>cuerpo</h1>";
	}
	function pie(){
		echo "<h1>PIE</h1>";
	}
	
	//----
	function mostrarPagina(){
		$this->cabecera();
		$this->cuerpo();
		$this->pie();		
	}
	//---
}

/*
$objeto = new PaginaWeb("mi blog web");
$objeto->mostrarPagina();

$tit = $objeto->titulo;
echo "titulo es: ".$tit;
*/
