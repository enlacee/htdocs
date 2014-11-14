<?php

class Hoy
{	
	function getFecha(){
		return ("hoy es: <b>".date(d)."/".date(m)."/".date(Y)."</b>");
	}
	function getFechaLarga() {
		$dia_semana = array("domingo","lunes","martes","miercoles","jueves","viernes","sabado");
		$mes		= array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
		
		return ( $dia_semana[(date(w))]." ".date(d)." de ".$mes[(date(m))]." del ".date(Y));
	}		
	function getHora() {
		return (date(h).":".date(i).":".date(s)." ".date(A));		
	}
	
}//FIN CLASE

$objHoy = new Hoy();


echo "<H1> mi blog FECHA: ".$objHoy->getFecha()."<H1>";
echo "<h2> hora actual: ".$objHoy->getHora()."</h2>";
echo "<h3>fecha larga ".$objHoy->getFechaLarga()."</h3>";