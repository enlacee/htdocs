
<?php

$base_datos = sqlite_open("Usuario.db");/*
$consulta = "CREATE TABLE usuario (id_usuario PRIMARY KEY,
								   nombre CHAR(255) NOT NULL,
								   cuenta INTEGER NOT NULL)";

sqlite_query($base_datos,$consulta);

$consulta1 = "INSERT INTO usuario (id_usuario,nombre,cuenta) VALUES (1,\"pedro\",7011)";
$consulta2 = "INSERT INTO usuario (id_usuario,nombre,cuenta) VALUES (2,\"maria fernanda\",3454)";
$consulta3 = "INSERT INTO usuario (id_usuario,nombre,cuenta) VALUES (3,\"luis miguel\",2514)";
$consulta4 = "INSERT INTO usuario (id_usuario,nombre,cuenta) VALUES (4,\"carlos manuel\",2135)";

sqlite_single_query($base_datos,$consulta1);
sqlite_single_query($base_datos,$consulta2);
sqlite_single_query($base_datos,$consulta3);
sqlite_single_query($base_datos,$consulta4);


*/

//-----Segunda consulta
/*
$consulta = "CREATE TABLE productos (id_producto INTEGER PRIMARY KEY,
									 nombre CHAR(255) NOT NULL,
									 precio INTEGER NOT NULL);
									 
			 INSERT INTO productos (id_producto,nombre,precio) VALUES (1,\"raton\",6);
			 INSERT INTO productos (id_producto,nombre,precio) VALUES (2,\"portatil\",1000);
			 INSERT INTO productos (id_producto,nombre,precio) VALUES (3,\"libro php5\",20);
			 INSERT INTO productos (id_producto,nombre,precio) VALUES (4,\"camara digital\",890)";
			 
	sqlite_query($base_datos,$consulta);

*/
/*
$consulta = "CREATE TABLE carritos (id_compra INTEGER PRIMARY KEY,
									id_usuario INTEGER NOT NULL,
									id_producto INTEGER NOT NULL);
									
			INSERT INTO carritos (id_compra,id_usuario,id_producto) VALUES (1,1,1);
			INSERT INTO carritos (id_compra,id_usuario,id_producto) VALUES (2,1,2);
			INSERT INTO carritos (id_compra,id_usuario,id_producto) VALUES (3,2,1);
			INSERT INTO carritos (id_compra,id_usuario,id_producto) VALUES (3,3,3)";

sqlite_query($base_datos,$consulta);
*/


//------------
$base_datos = sqlite_open("Usuario.db");

$resultado = sqlite_query($base_datos,"SELECT *FROM usuario");

if(!$resultado){
 	echo "hay un error";
 }else{
 	while ($fila = sqlite_fetch_array($resultado)) {
 		foreach ($fila as $indice=>$valor){
 			echo "[$indice]=".$valor."<br>";
 			echo"<hr>";
 		}

 	}//fin while
 }
 
			 
			 

			 

			 