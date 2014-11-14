<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html<?php	include 'recursos/functions.php'; ?>>
<?php
	include 'recursos/CrearReproductor.php';	
	include 'recursos/VideosRelacionados.php';
	
	
	
		$id		= $_REQUEST['v'];
		$titulo = $_REQUEST['titulo'];
		$pagina = $_REQUEST['pag'];
	
	
	
	
?>
<head>

<meta name="description" content="<?php echo $video[1]['descripcion'];?>" />
        <meta name="keywords" content="<?php echo $video[1]['etiqueta']?>" />

        <meta http-equiv="content-language" content="ES" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $video[1]['titulo'];?> | <?php echo $TITULO;?></title>
<!-- Titulo de la pagina-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="http://www.tiernoamor.com/favicon.ico"
	type="image/x-icon">
<link rel="shortcut icon"
	href="http://www.tiernoamor.com/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?php echo $HOST ; ?>css/style.css" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5028317-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="pagina">

<div id="header">
   
</div> 

<div id="buscador">

 <form name="b_vi" action="<?php echo $HOST; ?>index.php" method="get">
   <input id="q"	type="text" name="q" size="30" value="<?php echo $_GET['q'];?>" class="input">
   <input id="send" type="submit"  value="Buscar videos">
</form>
 
</div>

<div class="linea"></div>
<!--- ISQUIERDA -->

<div id="contenedor">
<!-- Inicio Reproductor -->



<?php

if(empty($_REQUEST['p'])){

	$html = '';
	
	$html .= '<h1>'.$video[1]['titulo'].'</h1>';

	$html .= '<div id="reproductor">';
	$html .= '<span id ="google_ads_frame1">
<script type="text/javascript"><!--
google_ad_client = "pub-9694619181645086";
/* 336x280, creado 23/03/08 */
google_ad_slot = "6324192189";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</span>';
	$html .= '<div id ="r-video">';//inicio
//	$html .= '<iframe class="youtube-player" type="text/html" width="629" height="353" src="http://www.youtube.com/embed/'.$video[1]['id'].'" frameborder="0"></iframe><br>';
	
	$html .= '<object width="629" height="353" id="ytplayer" data="http://www.youtube.com/v/'.$video[1]['id'].'?enablejsapi=1&autoplay=1&amp;version=3" type="application/x-shockwave-flash" allowfullscreen="true" >';
    $html .= '<param value="always" name="allowscriptaccess">';
    $html .= '<param value="http://www.youtube.com/v/'.$video[1]['id'].'?enablejsapi=1&autoplay=1&amp;version=3" name="movie">';
    $html .= '</object>';	
	
	
	
	$html .= '<div id="descripcion">';
	$html .= '<p><b>'.$video[1]['titulo'].'</b></p>';
	$html .= $video[1]['descripcion'];
	$html .= '</div>';//fin div descripcion
	$html .= '<a title="'.$video[1]['titulo'].'" href ="http://www.youtube-mp3.org/get?video_id='.$video[1]['id'].'" target="_blank">descargar este video en MP3 (audio)</a>';
	$html .= '<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4c8bc3bb4814616e" class="addthis_button_compact">Compartir</a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4c8bc3bb4814616e"></script>
<!-- AddThis Button END -->';
	$html .= '</div>';

	$html .= '</div>';
	
	
	


	
	
	echo $html;

}
?>

<?php 
/*
	$etiqueta = $video[1]['etiqueta'];
	$nun = count($etiqueta);
	
	for($x=0; $x<$nun; $x++){		
		$etiq = explode(",", $etiqueta);	
		
		$conteo =count($etiq);		
		if($conteo==0 ||$conteo==1||($conteo==NULL)|| ($conteo==null))
		echo '<a title="Music" href="'.$video['pag_tag'].'music">Music</a> ';	
			
		if($conteo>6) $conteo=5;
		
		for($c=0; $c<$conteo; $c++){
			$trimed = trim($etiq[$c]);
			echo '<a title="'.$trimed.'" href="'.$video['pag_tag'].$trimed.'">'.$trimed.'</a> ';}	 //** LINK TAG
	}
*/
?>
<!-- Formulario estuvo AQUI -->



</div>

<!-- Fin Reproductor -->
	
	<div class="both"></div>	
	
	<?php
	
	
	if(!empty($_REQUEST['v'])){		
		echo '<div id="medio"><h2>Videos relacionados</h2></div>';		
		$id		= $_REQUEST['v'];
		$titulo = $_REQUEST['titulo'];
		$pagina = $_REQUEST['pag'];
		


		
		new VideosRelacionados($id,$pagina);
		
		}

	?>
	


	

<!-- pie de pagina-->
<div class="both"></div>

<div id="pie">
	<a href="<?php echo $HOST; ?>"><?php echo $TITULO; ?></a>
	<a href="http://whos.amung.us/stats/rk37gvmh/" target=_blank><IMG border=0 src="http://whos.amung.us/swidget/rk37gvmh.png" width=0 height=0></a>
</div>

</div>
<!-- </div>  -->	
</body>
</html>

