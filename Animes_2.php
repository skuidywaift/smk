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

$anime = ver_v($_GET['id']);
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
<title><?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?> Sub Español Online | <?php echo $titulo; ?></title>
<meta property="og:title" content="<?=$anime['nom']?> Capitulo <?=ucwords($anime['nom_capitulo'])?>">
<meta property="og:site_name" content="<?php echo $titulo; ?>">
<meta property="og:type" content="tv_show">
<meta property="og:image" content="<?php echo $web; ?><?=$anime['img']?>">
<meta property="og:description" content="Para ver el capitulo da click en el enlace.">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="<?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?>, <?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?> sub español, ver <?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?>, <?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?> online, <?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?> descargar">
<meta name="keywords" content="<?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?>, <?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?> sub español, ver <?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?>, <?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?> online, <?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?> descargar">
<link rel="image_src" href="<?php echo $web; ?><?=$anime['img']?>">
<link rel="shortcut icon" href="favicon.ico">
<link href="/css/main.css" rel="stylesheet" type="text/css">
<base href="<?php echo $web; ?>">
<script type="text/javascript" src="/css/prototaculous.js"></script>
<script type="text/javascript" src="/css/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/css/jquery.tipsy.js"></script>
<script type="text/javascript" src="/css/jquery.jtruncate.pack.js"></script>
<script type="text/javascript" src="/css/script.js"></script>
<script type="text/javascript"></script>
<!--[if lte IE 7]><link href="/css/noie.css" rel="stylesheet" type="text/css">
<![endif]--><!--[if IE 6]><iframe src="/noie.html" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="100%" height="100%" id="i"></iframe>
<![endif]--><!--[if IE 7]><iframe src="/noie.html" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="100%" height="700" id="i" style="height:500px"></iframe>
<![endif]--><!--[if IE ]><style type="text/css">#b{/*margin-top: -65px;*/} #q{height: 22px; margin-left: 2px; margin-top: 0px; padding-left: 6px; padding-top: 8px; text-shadow: #AEDDFF 0px 1px 0px; width: 190px;} #bb:hover{height: 31px; margin-left: 3px; margin-top: 0px; outline: none; width: 51px;}</style>
<![endif]-->
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) {return;}  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
<div id="header"><div id="cb">
<!-- arriba --><div id="hh"><div id="eih"></div><div id="h"><h1 class="title"><a href="anime<?=$anime['catg']?>/<?=$anime['nom']?>/<?=$anime['id']?>.html">Ver <?=$anime['nom']?></a> | <a href="<?=$anime['catg']?>/<?=$anime['nom']?>/<?=$anime['id']?>.html"><?=$anime['nom']?> Sub español</a> | <a href="<?=$anime['catg']?>/<?=$anime['nom']?>/<?=$anime['id']?>.html">Descargar <?=$anime['nom']?></a></h1></div><div id="edh"></div></div>
<!-- logo --><div id="l" class="c"><a href="<?php echo $web; ?>" title="Anime Gratis - <?php echo $sitio; ?>" style="float: left;"><img src="/logo.png" alt="Logo <?php echo $titulo; ?>" name="logo" width="240" height="100" border="0" id="logo"></a>
<!-- BEGIN SMOWTION TAG - 728x90 - DO NOT MODIFY -->
<script type="text/javascript"><!--
smowtion_size = "728x90";
smowtion_section = "2619153";
//-->
</script>
<script type="text/javascript"
src="http://ads.smowtion.com/ad.js?s=2619153&z=728x90">
</script>
<!-- END SMOWTION TAG - 728x90 - DO NOT MODIFY -->
</div></div>

<!-- BEGIN SMOWTION TAG - DO NOT MODIFY -->
<div id="smowtion_cont_d52fb8c37d4ffa22570325e48dbdecc8" style="display:none;">
<script type="text/javascript">
smowtion_size = "160x600";
smowtion_section = "2619153";
smowtion_align = "top-right";
smowtion_cont_id = "d52fb8c37d4ffa22570325e48dbdecc8";
</script>
<script type="text/javascript" src="http://ads.smowtion.com/slider.js?s=2619153&z=160x600&a=tr&c=d52fb8c37d4ffa22570325e48dbdecc8"></script>
</div>
<!-- END SMOWTION TAG - DO NOT MODIFY -->

<div id="mm"><div id="eim"></div><div id="m">
<?php include("css/menu.php"); ?>
<!-- buscador -->
<form action="buscador.php" method="get" id="b">
<iframe src="http://www.facebook.com/plugins/like.php?app_id=121492064600717&amp;href=<?php echo $face; ?>&amp;send=false&amp;layout=button_count&amp;width=200&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="no" frameborder="0" class="tip" title="&iquest;Te ha gustado la web?" style="border:none; overflow:hidden; width:120px; height:21px;displa:block;float:left;margin:3px;margin-top:6px;" allowTransparency="true"></iframe>
<a href="http://twitter.com" target="_blank" style="displa:block;float:left;margin:3px;"><img src="/img/tw.png" alt="Twitter" width="24" height="24" border="0" class="tip" title="S&iacute;guenos en Twitter"></a>
<a href="<?php echo $face; ?>" target="_blank" style="displa:block;float:left;margin:3px;"><img src="/img/fb.png" alt="Facebook" width="24" height="24" border="0" class="tip" title="S&iacute;guenos en Facebook"></a>
<input type="hidden" name="site" value="<?php echo $sitio; ?>"><input type="text" id="q" name="q" value="Ingresa tu b&uacute;squeda" onblur="if(this.value==''){ var texto=this.value='Ingresa tu b&uacute;squeda'; }" onfocus="if(this.value=='Ingresa tu b&uacute;squeda') this.value='';"><input type="submit" value="Buscar" id="bb" style="text-indent:-9999px"></form>
</div><div id="edm"></div></div></div>

<div id="main">
<div id="mt"></div>
<div id="mmm">
<div class="cc fleft"><div class="ctit">Animes por orden alfabético:</div><div class="ccon">
<ul class="alfa" style="margin-top:15px; margin-left: 100px;"><li><a href="letra/a.html" class="let">A</a></li><li><a href="letra/b.html" class="let">B</a></li><li><a href="letra/c.html" class="let">C</a></li><li><a href="letra/d.html" class="let">D</a></li><li><a href="letra/e.html" class="let">E</a></li><li><a href="letra/f.html" class="let">F</a></li><li><a href="letra/g.html" class="let">G</a></li><li><a href="letra/h.html" class="let">H</a></li><li><a href="letra/i.html" class="let">I</a></li><li><a href="letra/j.html" class="let">J</a></li><li><a href="letra/k.html" class="let">K</a></li><li><a href="letra/l.html" class="let">L</a></li><li><a href="letra/m.html" class="let">M</a></li><li><a href="letra/n.html" class="let">N</a></li><li><a href="letra/o.html" class="let">O</a></li><li><a href="letra/p.html" class="let">P</a></li></ul>
<ul class="alfa" style="margin-left: 70px"><li><a href="letra/q.html" class="let">Q</a></li><li><a href="letra/r.html" class="let">R</a></li><li><a href="letra/s.html" class="let">S</a></li><li><a href="letra/t.html" class="let">T</a></li><li><a href="letra/u.html" class="let">U</a></li><li><a href="letra/v.html" class="let">V</a></li><li><a href="letra/w.html" class="let">W</a></li><li><a href="letra/x.html" class="let">X</a></li><li><a href="letra/y.html" class="let">Y</a></li><li><a href="letra/z.html" class="let">Z</a></li><li><a href="letra/1.html" class="let">#</a></li></ul>
</div></div>

<table width="985" border="0" align="center" cellpadding="0" cellspacing="0" style="float:left"><tr>
<!-- izq -->
<td width="661" align="left" valign="top">
<div class="clt"></div><div class="clm"><h1><?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?> <?=$anime['sub']?></h1>
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
?>

</div></div><div style="clear:both;"></div></div><div class="clb"></div>
<div class="clt"></div><div class="clm"><h2>Déjanos un comentario!</h2>
	<font color="#800000">
	<b>Sinopsis:</b>
</font>
<img src="<?=$anime['img']?>" align="left" width="120" height="182" >
</strong><?=elimina_acentos(urldecode($anime['descrip']))?></div></div>

<div id="floro">Hola, esperamos que la estes pasando genial viendo <b><?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?></b>, si tienes alg&uacute;n problema con el video <b><?=$anime['nom']?> <?=ucwords($anime['nom_capitulo'])?></b> no dudes en usar el boton <em>"Reportar Video"</em>, o reportarlo en el facebook de <b><?php echo $titulo; ?></b>. Recuerda que en <b><?php echo $sitio; ?></b> puedes ver anime gratis y sin ning&uacute;n tipo de restricci&oacute;n, no olvides recomendarnos con tus amigos. Nuestra pagina fue probada en los navegadores Firefox,Chrome,Safari,Opera y funcionaron 100% recomendamos tener alguno de estos instalado (Internet Explorer funcionan un 80%) .</div>

<iframe src="http://www.facebook.com/plugins/like.php?app_id=121492064600717&amp;href=http://pruebas.animevision.org/ver/<?=$anime['nom']?>-<?=ucwords($anime['nom_capitulo'])?>.html&amp;send=false&amp;layout=button_count&amp;width=200&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="No" frameborder="0" class="tip" style="border:none; overflow:hidden; width:160px; height:21px;displa:block;float:left;margin:3px;margin-top:6px;" allowtransparency="true" original-title="&iquest;Te gusta este capitulo?"></iframe><br/>
<!-- Compartir --><div id="lcmain"><table align="right" height="34" width="318">
<td align="right" width="65">Compartir:</td><td><div class="addthis_toolbox addthis_default_style addthis_32x32_style"><a class="addthis_button_preferred_1"></a><a class="addthis_button_preferred_2"></a><a class="addthis_button_preferred_3"></a><a class="addthis_button_preferred_4"></a><a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a></div><script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script><script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4dbda7351deb66ec"></script></td></table><div style="clear: both;"></div><fb:comments href="/ver/<?=$anime['id_cap']?>/<?=$anime['nom']?>-<?=$anime['nom_capitulo']?>.html" num_posts="10" width="630" style="margin-left:5px; margin-top: 5px;"></fb:comments></div>
<p>&nbsp;</p>
</div><div class="clb"></div>
</td>

<!-- der -->
<td width="324" align="left" valign="top">
<!-- descargar --><div id="dwn"><?=$anime['url']?></div>
<a href="/anime/<?=$anime['nom']?>/<?=$anime['id']?>.html" id="tb">Ver todos los capítulos de <?=$anime['nom']?></a>
<!-- 300x250 --><div class="a250x200">
	<p align="center"><a onclick="window.open(this.href, this.target, 'width=600,height=500, top=150px,left=150px'); return false;" target="_blank" href="http://pruebas.animevision.org/instrucciones.htm">
	<img src="/intrucciones.gif" width="250" height="300"></a></div>
	&nbsp;<!-- problemas --><center><form action="/css/envios.php" method="post" target="popupwindow" onsubmit="window.open('/css/envios.php', 'popupwindow', 'scrollbars=yes,width=390,height=280');return false" style="height: 32px; width=142"><input type="image" src="/img/repor.png" name="email" value="dale a tu problema" onblur="if(this.value==''){ var ttt=this.value=''; }" onfocus="if(this.value=='') this.value='';"></center><br>
<br/>
<textarea style="width:300px;height:100px" onclick="this.focus();this.select()" readonly="readonly"><iframe src="http://pruebas.animevision.org/embed/<?=$anime['nom']?>-<?=ucwords($anime['nom_capitulo'])?>/<?=$anime['id_cap']?>.html" width="640" height="540" frameborder="0" allowfullscreen scrolling="no"></iframe></textarea>
<iframe src="//www.facebook.com/plugins/recommendations.php?site=http%3A%2F%2Fpruebas.animevision.org&amp;width=300&amp;height=530&amp;header=true&amp;colorscheme=light&amp;linktarget=_blank&amp;border_color&amp;font=segoe+ui" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:530px;" allowTransparency="true"></iframe>

<p>&nbsp;</p>
</td></tr></table>
<div class="clear"></div></div></div><div class="clear"></div>
<!-- footer -->
<div id="footer"><div id="f_t"></div><div id="x">Ningun video esta alojado en nuestros servidores <?php echo $sitio; ?> - Copyright ©2011</div></div>
<!-- Histats.com  START (hidden counter) -->
<a href="http://www.histats.com" alt="contador flash" target="_blank" >
<img  src="http://sstatic1.histats.com/0.gif?1700456amp;101" alt="contador flash" border="0">
<!-- Histats.com  END  -->
</body></html>