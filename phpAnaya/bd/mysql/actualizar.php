<?php

include_once 'ServidorBaseDatos.php';

//---ACTUALIZAR DATOS 'update'

$config = parse_ini_file("config.ini",TRUE);
$servidor 	= $config[base_datos][servidor];
$usuario	= $config[base_datos][usuario];
$clave		= $config[base_datos][clave];
$base_datos = $config[base_datos][base_datos];

$consulta = "SELECT id FROM usuarios WHERE user_nick = 'enlacee'";

$usuario = new ServidorBaseDatos($servidor, $usuario, $clave, $base_datos);
$usuario->consulta($consulta);


/*
$fila = $usuario->extraerRegistro();

$id_usuario = $fila['id'];

//-------------
$actualizar = "UPDATE usuarios SET user_clave='america123' WHERE id='$id_usuario'";

$usuario->consulta($actualizar);
*/