<?php
session_start();

echo $ID;
?>

<html>
<head>
</head>
<body>

<?php	
	foreach ($_SESSION as $indice=>$valor) {
		echo "$indice =".$valor."<BR>";
	}
	
	foreach ($_COOKIE as $indice => $valor) {
		echo "$indice = ".$valor."<br>";
	}
?>
</body>
</html>