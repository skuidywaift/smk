<?php
######## Config General #########
$sitio = "Anime Vision";
$titulo = "".$sitio;
$_web = "http://www.pruebas.animevision.org/";
#################################



####### Config Mysql  #########
unset($config) ;
$config[1] = 'localhost' ; # Puede ser "localhost" aunque también una URL o una IP
$config[2] = 'animevis_prueba' ; # Usuario de la base de datos
$config[3] = 'palomos1' ; # Contraseña de la base de datos
$config[4] = 'animevis_pruebas' ; # Nombre de la base de datos
$conectar = @mysql_connect($config[1],$config[2],$config[3]) or exit('Datos de conexión incorrectos.') ;
mysql_select_db($config[4],$conectar) or exit('No existe la base de datos.');
###############################



?>