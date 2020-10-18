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

$anime = embedhentai_v($_GET['id']);
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
<title><?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?> Sub Espa単ol Online | <?php echo $titulo; ?></title>
<link href="/css/main.css" rel="stylesheet" type="text/css">
<base href="<?php echo $web; ?>">
<script type="text/javascript" src="/css/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/css/jquery.tipsy.js"></script>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) {return;}  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>

<div class="clt"></div>
<div class="clm"><h2>Lista de capitulos de: <i><?=$anime['nom']?></i></h2><div id="lcmain"><ul id="lcholder"><li class="lccn"><?=$anime['prox']?></li>
<?php
foreach ($animeX as $x){
echo "<li class=\"lcc\"><a href=\"/embed/".hacer_url($x['nom'])."-".hacer_url($x['nom_capitulo'])."/".$x['id_cap'].".html\" class=\"lcc\">Cap&iacute;tulo ".ucwords($x['nom_capitulo'])." de ".$x['nom']."</a></li>";
}
?></ul></div></div>
<div class="clb"></div>
<div style="clear:both;"></div><script type="text/javascript">(function($){$.fn.sweetPages=function(c){if(!c)c={};var d=c.perPage||3;var f=this;var g=f.find('li');g.each(function(){var a=$(this);a.data('height',a.outerHeight(true))});var h=Math.ceil(g.length/d);if(h<2)return this;var j=$('<div class="swControls">');for(var i=0;i<h;i++){g.slice(i*d,(i+1)*d).wrapAll('<div class="swPage"/>');j.append('<a href="javascript:void(0);" class="swShowPage" title="P&aacute;gina: '+(i+1)+'">'+(i+1)+'</a>')}f.append(j);var k=0;var l=0;var m=f.find('.swPage');m.each(function(){var a=$(this);var b=0;a.find('li').each(function(){b+=$(this).data('height')});if(b>k)k=b;l+=a.outerWidth();a.css('float','left').width(f.width())});m.wrapAll('<div class="swSlider"/>');f.height(k);var n=f.find('.swSlider');n.append('<div class="clear"/>').width(l);var o=f.find('a.swShowPage');o.click(function(e){$(this).addClass('active').siblings().removeClass('active');n.stop().animate({'margin-left':-(parseInt($(this).text())-1)*f.width()},'slow');e.preventDefault()});o.eq(0).addClass('active');j.css({'left':'50%','margin-left':-j.width()/2,'margin-top':'-18px'});return this}})(jQuery);jQuery(document).ready(function(){jQuery('#lcholder').sweetPages({perPage:25});var a=jQuery('.swControls').detach();a.appendTo('#lcmain');jQuery('.swShowPage').tipsy({gravity:'s'})});</script><p>&nbsp;</p>

</body></html>