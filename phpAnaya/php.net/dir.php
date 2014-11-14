<?php
echo "<h2>Creando directorio con 'mkdir()'</h2>";
//mkdir("/phpAnaya/php.net", 0700);

//$oldumask = umask(0);
//mkdir('new');
//mkdir('../newss', 0777); // or even 01777 so you get the sticky bit set

//mkdir('../newss/images');

/**
 * CREAR DIRECTORIO ANIDADO
 */
//mkdir('./webin/web/img',0,true);

//mkdir('../web/home/img',0,true);

//mkdir('./web/home/home2',0,true);


//FUNCION PARA EVITAR ERROR AL CREAR carpetas()
function filename_safe($name) {
    $except = array('\\', '/', ':', '*', '?', '"', '<', '>', '|');
    return str_replace($except, '', $name);
}


/** CREAR DIRECTORIOS EN
Creating a directory structure liki this:

0 ------ 0
1          1
2          2 -------- 0
3          3             1
4          ...           2
*/
/*
for ($a=0;$a<=15;$a++) {   
    mkdir(dechex($a),0755);
    for ($b=0;$b<=15;$b++) {
        mkdir(dechex($a).'/'.dechex($b),0755);
        for ($c=0;$c<=15;$c++) {
            mkdir(dechex($a).'/'.dechex($b).'/'.dechex($c),0755);
        }
    }
}
*/



//-----

// detect slash/backslash nomenclature dirname

$path = dirname( __FILE__ );
echo "primero ptath $path<br>";

$slash = '/'; strpos( $path, $slash ) ? '' : $slash = '\\';
define( 'BASE_DIR', $path . $slash );

$folder  = time();               // folder name
$dirPath = BASE_DIR . $folder;   // folder path

echo $folder;
echo "<h3>BASE_DIR</h3><br>$dirPath";



$BASE = BASE_DIR;
$limit ="\\";


$carpeta = explode($limit,$BASE);

foreach ($carpeta as $valor){
	echo "<br>".$valor."<br>";
}

$home = "../PEPE/".$carpeta[1];
mkdir($home."/anibal-copitan/anibal",0,true);







