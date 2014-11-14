<?php
session_start();
echo $ID;
?>

<html>
<head>
</head>
<body>

<?php
	$_SESSION['nombre'] = "victor anibal copitan norabuena";
	$_SESSION['edad']	= "22";
	$_SESSION['color']	= "ROJO";
	
	$sesion = $ID;
	$sesion1= $id;
	
	ECHO "<br>ver sesion = $sesion<br>".session_id();
	ECHO "<br>ver sesion = $sesion1<br>";

echo "<br>la variable sesion es: $ID"; ?>
</body>
</html>