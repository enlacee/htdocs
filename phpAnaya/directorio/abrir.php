<?php 

$directorio = "./";
$descriptor = opendir($directorio);

while ($entrada = readdir($descriptor)){//Leer direcctorio
	if (is_dir($directorio.$entrada)){
		echo "[Directorio] ".$entrada."<br>";
	}elseif (is_file($directorio.$entrada)){
		echo "[Fichero] ".$entrada."<br>";
	}
}
closedir($descriptor);

echo "<hr>";
//segunda FORMA DE ver DIRECTORIOS

$directorio = "../";
$fichero = dir($directorio);

while ($entrada = $fichero->read()){
	if(is_dir($directorio.$entrada))
		echo "[directorio] = $entrada<br>";
	elseif (is_file($directorio.$entrada))
		echo "[fichero] = $entrada<br>";
}
$fichero->close();










