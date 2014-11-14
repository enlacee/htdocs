<?php
include_once 'PaginaWeb.php';

class PaginaWebFormulario extends PaginaWeb{
	
	function formularioInicio($accion) {		
		echo "FUNCION :: formularioInicio()";
		
		echo ("<form action=\"$accion\"> ");
	}
	
	function formularioFin(){
		echo ("</fom>");
	}
	
	function formularioCajaTexto($nombre){
		echo ("$nombre<input type=\"text\" name=\"$nombre\">");
	}
	
	function formularioBoton($nombre){
		echo ("<input type=\"submit\" name=\"submit\" value=\"$nombre\">");
	}
	
	//---------- METODO PRINCIPAL
	function mostrarPagina(){
		$this->cabecera();
		$this->formularioInicio("POST");
		$this->formularioCajaTexto("nombre");
		$this->formularioCajaTexto("apellido");
		$this->formularioBoton("enviar");
		$this->formularioFin();

		$this->pie();
	}
	
}//FIN CLASE

$objFormulario = new PaginaWebFormulario("formulario de registro");
$objFormulario->mostrarPagina();

