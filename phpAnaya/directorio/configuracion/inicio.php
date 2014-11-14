<?php

$configuracion = parse_ini_file("otro/configuracion.ini",TRUE);
//variables
echo $configuracion[base_datos][servidor];
echo "<br>";
echo $configuracion[preferencias][color];

