<?php
include_once 'ServidorBaseDatos.php';

//---ACTUALIZAR DATOS 'update'

$config = parse_ini_file("config.ini",TRUE);
$servidor 	= $config[base_datos][servidor];
$usuario	= $config[base_datos][usuario];
$clave		= $config[base_datos][clave];
$base_datos = $config[base_datos][base_datos];

$consulta = "INSERT INTO usuarios ( user_mail,user_clave,user_nick ) VALUES ('pepe_lucho@hotmail.com','camila','pepe101')";

$usuario = new ServidorBaseDatos($servidor, $usuario, $clave, $base_datos);
$usuario->consulta($consulta);
