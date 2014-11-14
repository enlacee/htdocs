<?php


$menu = array("inicio","favoritos","foro","festival","nosotros" );

for ($i=0; $i<(count($menu)); $i++){
	echo "<a href=\"inicio.php?menu=$i\">$menu[$i]</a></br>";
}

//segundo
foreach ($menu as $indice => $valor){
	echo "<a href=\"inicio.php?menu=$indice\">$valor</a><br>";
}


echo "<hr>";
print_r($_GET);

switch ($_GET['menu']) {
	case 0:
		echo "PAG_ INICIO.PHP";
	break;
	case 1:
		echo "PAG_ FAVORITOS.PHP";
	break;
	case 2:
		echo "PAG_ FORO.PHP";
	break;
	case 3:
		echo "PAG_ FESTIVAL.PHP";
	break;
	case 4:
		echo "PAG_ NOSOTROS.PHP";	
	default:
		echo "PRINCIPAL ";
	break;
}

define($name, $value);

echo $color;

// DEPURACION CODIGO
function depuracion(){
	echo "<p>variabale GET--</p>";
	foreach ($_GET as $indice => $values){
		echo "[$indice] = $values<br>";
	}
	
	echo"<p>variable POST--</p>";
	foreach ($_POST as $indice => $values){
		echo "[$indice] = $values<br>";
	}
	
	echo "<p>variables COOKIE--</p>";
	foreach ($_COOKIE as $indice => $values){
		echo "[$indice] = $values<br>";
	}
	
	echo "<p>variables SESSION--</p>";
	foreach ($_SESSION as $indice => $values){
		echo "[$indice] = $values<br>";
	}
	
	echo "<p>variables SERVER--</p>";
	foreach ($_SERVER as $indice => $values){
		echo "[$indice] = $values<br>";
	}

}//end Funcion


depuracion();





//Imprimiendo SERVER host

echo  "<br>Mi hosting es::".$_SERVER[HTTP_HOST];













