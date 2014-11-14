<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="move_uploaded_file.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <label>subir
  <input type="file" name="imagenes" id="imagenes" />
  </label>
  <input type="submit" name="button" id="button" value="Submit" />
</form>
<label></label>
</body>
</html>
<?php
function depuracion(){

	echo "<p>variables FILES--</p>";
	foreach ($_FILES['imagenes'] as $indice => $values){
		echo "[$indice] = $values<br>";		
	}
	echo "subiendo";
	
	$directorio_subidas = './img';
	$nombre_tmp = $_FILES["imagenes"]["tmp_name"];
	echo "<hr>".$nombre_tmp;
    $nombre = $_FILES["imagenes"]["name"];	

	move_uploaded_file($nombre_tmp, "$directorio_subidas/$nombre");
	
	$name=$_FILES["imagenes"]["name"];
	echo "<h1>$name</h1>";
	
	$tamanio = getimagesize($name);
	ECHO  "<hr>tamanio : : = ".$tamanio;
	
	
	
	
	

}//end Funcion


depuracion();


?>

<?php


$directorio_subidas = '/img';

echo "<h2>".$_FILES["imagenes"]["error"]."</h2>";

foreach ($_FILES["imagenes"] as $clave => $error) {
    if ($error == UPLOAD_ERR_OK) {
         $nombre_tmp = $_FILES["imagenes"]["tmp_name"];
         $nombre = $_FILES["imagenes"]["name"];
		 
		 echo "nombre_tmp".$nombre_tmp. "<hr> nombre:". $nombre;
        //move_uploaded_file($nombre_tmp, "$directorio_subidas/$nombre");
    }
}
?>