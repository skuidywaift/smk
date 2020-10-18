<?php
function limpia($var){
	$var = strip_tags($var);
	$malo = array("\\",";","\'","'",'"','\"');
	$i=0;$o=count($malo);
	while($i<=$o){
		$var = str_replace($malo[$i],"",$var);
		$i++;
	}
	return $var;
}
function LimpiarTodo($datos){
	if(is_array($datos)){
		$datos = array_map('limpia',$datos);
	}else{
		die("<font color=#ff0000><b>Error:</b></font> La funcion <b>LimpiarTodo</b> debe contener un arreglo.");
	}
	return $datos;	
}
### Seguridad ###
if($_POST){
	$_POST =& LimpiarTodo($_POST);
}
if($_GET){
	$_GET =& LimpiarTodo($_GET);
}
### Seguridad  ###
//
@require_once"Procesos/Configurar.php";
@require_once"Procesos/Core_Funciones.php";

$anime = embed_v($_GET['id']);
$animeX = $anime;
$animex=$anime;
foreach ($animex as $anime){}
if($anime['CAPITULO'] == 'no'){
redireccionar();
}
//
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?> Sub Espa√±ol Online | <?php echo $titulo; ?></title>
<link href="/css/main.css" rel="stylesheet" type="text/css">
<base href="<?php echo $web; ?>">
<script type="text/javascript" src="/css/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/css/jquery.tipsy.js"></script>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) {return;}  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>

<script>jQuery(document).ready(function () { jQuery(".tab_content").hide(); jQuery(".subtab_content").hide(); jQuery("ul.tabs li:first").addClass("active").show(); jQuery("ul.subtabs li:first").addClass("active").show(); jQuery(".tab_content:first").show(); jQuery(".subtab_content:first").show(); jQuery("ul.tabs li").click(function () { jQuery("ul.tabs li").removeClass("active"); jQuery(this).addClass("active"); jQuery(".tab_content").hide(); var a = jQuery(this).find("a").attr("href"); jQuery(a).fadeIn(); return false }); jQuery("ul.subtabs li").click(function () { jQuery("ul.subtabs li").removeClass("active"); jQuery(this).addClass("active"); jQuery(".subtab_content").hide(); var a = jQuery(this).find("a").attr("href"); jQuery(a).fadeIn(); return false }); jQuery("#clad").click(function () { jQuery(".adspl").css("display", "none") })});</script>

<table cellpadding="0" cellspacing="0" width="661" padding="0"><tr>
<td valign="top">
<div class="container"><ul class="tabs">		
<?php
if($anime['opcn']=='no'){
echo "

";
}else{
echo $anime['opcn'];
}
?></ul><div class="tab_container">
<?php
if($anime['embed']=='no'){
echo "

";
}else{
echo $anime['embed'];
}
?></td></tr></table>
<table><td align="right" valign="top" width="140" margin="50">
<div id="dwn"><?=$anime['url']?></td>
<td valign="top">
<iframe frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="468" height="60" SRC="http://ad.adnetwork.net/st?ad_type=iframe&ad_size=468x60&section=2658519" ></iframe>
</td></td></table>
<tr width="660"><td></div><a href="/embedHentai/<?=$anime['nom']?>/<?=$anime['id']?>.html" id="tb">Ver todos los capè´øtulos de <?=$anime['nom']?></a></td></tr></table>
<script type="text/javascript" src="http://ad.adnetwork.net/st?ad_type=pop&banned_pop_types=29&ad_size=0x0&section=2658519&pop_times=1&pop_frequency=3600" ></script>
</body></html>