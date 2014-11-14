<?php
include_once 'ServidorBaseDatos.php';

//---ACTUALIZAR DATOS 'update'

$config = parse_ini_file("config.ini",TRUE);
$servidor 	= $config[base_datos][servidor];
$usuario	= $config[base_datos][usuario];
$clave		= $config[base_datos][clave];
$base_datos = $config[base_datos][base_datos];

$consulta = "SELECT id FROM usuarios where user_nick='pepe101'";

$usuario = new ServidorBaseDatos($servidor, $usuario, $clave, $base_datos);
$usuario->consulta($consulta);

$fila = $usuario->extraerRegistro();

$usuario_id = $fila['id'];

$eliminar = "DELETE FROM usuarios WHERE id='$usuario_id'";
$usuario->consulta($eliminar);
