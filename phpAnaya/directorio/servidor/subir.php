<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>

<form action="subir.php" method="post" enctype="multipart/form-data">

introduce fichero <input type="file" name="fichero" id="fichero"/>
<input type="hidden" name="tamanio" id="tamanio" value ="1000">
<input type="submit">

</form>

</body>
</html>
<?php 

$fichero = $_FILES['fichero'];

print_r($fichero);

foreach ($fichero as $indice=>$valor){
	echo "<br>[$indice] = $valor";
}

if($_FILES['fichero']['size'] < $_POST['tamanio'] ){
	echo "<br>EL FICHERO TIENE TAMANIO ADECUADO";
	
	copy($_FILES['fichero']['tmp_name'],"archivo.txt");
	//move_uploaded_file()  ---buscaRRRR   
	
}else
	echo "<br>El FICHERO ES DEMASIADO GRANDE";