<?php
$fichero = "archivo.zip";
$mime_type = "aplication/zip";

//IE o Opera
if(strpos($_SERVER['HTTP_USER_AGENT'], "MSI 5") || strpos($_SERVER['HTTP_USER_AGENT'],"OPERA 7")){
	$mime_type = "aplication/x-download";	
}

//genera la cabecera
header("content-disposition: attachment; filename=$fichero");
header("content-type: $mime_type");	//identifica el tipo de ARCHIVO y lo asocia con un PROGRAMA
header("content.length: ".filesize($fichero));

//envia archivo al NAVEGADOR
readfile($fichero);




	
	