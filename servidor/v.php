<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html<?php	include 'recursos/functions.php'; ?>>
<head>

<meta name="description" content="Buscar gratis millones de videos en toda la red de youtube. Tierno amor portal de videos digitales mas grande la red." />
     <meta name="keywords" content="imagenes, videos, fondos, wallpapers, bajar videos, descargar videos, youtube" />

     <meta http-equiv="content-language" content="ES" />
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Videos - <?php echo $TITULO; ?></title>
<link rel="icon" href="http://www.tiernoamor.com/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="http://www.tiernoamor.com/favicon.ico" type="image/x-icon">
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- JS -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/DD_roundies.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>

</head>
<body>
<div id="pagina">
<div id="buscador">
  <form name="b_vi" action="" method="get" target="_top">
    <input id="q"	type="text" name="q" size="30" value="<?php echo $_GET['q'];?>" class="input">
    <input name="submit" type="submit" id="send"  value="Buscar Videos">
  </form>
</div>
<div class="linea"></div>
<!--- ISQUIERDA -->

<div id="contenedor">
<div id="modulo">

<?php
	if($num > 1) {		
		echo '<div id="medio">';			
		echo '<h2>Videos mostrados por pag. '.$cant.' </h2>';				
		echo '</div>';
		
//INICIO EL FOR
		for($i=0; $i<=$cant; $i++) { if($vid[$i]['id']!="") {?>
			<div class="images">
            
			<div class="img"> <!-- INICIO img-->
            <a	href="<?php echo $vid[$i]['pag_video']; ?>"> <img class="item-hd" src='<?php echo $vid[$i]['img']; ?>' 
			alt='<?php echo $vid[$i]['titulo'];?>'>
            </a>
            </div>			<!-- FIN img-->

			<p> <?php echo '<a title="'.$vid[$i]['titulo'].'" href="'.$vid[$i]['pag_video'].'">'.$vid[$i]['titulo'].'</a>'; ?></p>
			<!--link-->
			
			<span>duracion: <?php echo $vid[$i]['duracion']; ?>min  | visto <?php echo $vid[$i]['contador_view'];?> veces</span>
			

<?php 	//------ Etiquetas de los video 'tag' -------//
/*
	$etiqueta = $vid[$i]['etiqueta'];
	$nun = count($etiqueta);
	
	for($x=0; $x<$nun; $x++){		
		$etiq = explode(",", $etiqueta);		
		$conteo =count($etiq);	
		if($conteo>6) $conteo=5;
		
		for($c=0; $c<$conteo; $c++){
			$trimed = trim($etiq[$c]);
			echo '<a title="'.$trimed.'" href="'.$vid[$i]['pag_tag'].$trimed.'">'.$trimed.'</a> ';
		}
	

	}//fin FOR principal
*/
?>
</div>
<!-- Fin class imgages  --> <?php } }
		
	}else{			

		//mostrat CONTENDIDO ANTES DE BUSCAR
} ?>





<!-- Fin Condicion Principal -->
</div>
<!-- fin de Modulo -->

<div class="both"></div>





<?php if($num>1) {?>
<div id="paginador"><?php
	if ($page==2)
		echo '<span><a href="?q='.$q.'"><< Anterior</a></span>';
	elseif($page!=1 /*||$page != 0*/)
		echo '<span><a href="?q='.$q.'&p='.($page-1).'"><< Anterior </a></span>';
				
	echo '<span><a href="?q='.$q.'&p='.($page+1).'"> Siguiente >></a></span>';?>
</div>

<div class="both"></div>
<?php }?>


<div class="both"></div>

</div><!-- fin contenedor -->

</div>
</body>
</html>