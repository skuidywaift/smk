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
//
/*/////////////////////////////////*/
$mo=$_GET['m'];
switch ($mo){
    case "buscar":
$busqueda=ucwords(str_replace('+',' ',limpiar_busqueda($_GET['q'])));
$titulo=ucwords($busqueda)." | ".$titulo;
        break;
    case "letra":
if(strlen($_GET['a'])<2){$letra=$_GET['a'];}else{ redireccionar(); die();}
$titulo="Anime por letra: ".ucwords($letra)." | ".$titulo;
        break;
}
/*/////////////////////////////////*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title><?php echo $titulo; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="La mejor web para ver Anime Online Gratis, mira los &uacuite;ltimos cap&iacute;tulos de los animes del momento sin ninguna clase de restricci&oacute;n | Anime para ver Online y descargar | Naruto Shippuden | Bleach | Dragon Ball Kai | Tokyo Magnitude 8.0 | Onepiece y m&aacute;s."> 
<meta name="keywords" content="anime online espa&ntilde;ol, anime online gratis, anime online naruto, anime online naruto shippuden, anime online sub espa&ntilde;ol, anime online free, anime online latino, anime online bleach, animeid, anime id, animes, anime, ecchi, anime online, Naruto Shippuden, Anime online, Anime en Descarga Directa, Ver Anime Online.">
<link rel="shortcut icon" href="favicon.ico">
<meta name='robots' content='index, follow'> 
<meta name='googlebot' content='index, follow'>
<meta name='author' content='<?php echo $sitio; ?>'> 
<meta name='copyright' content='<?php echo $sitio; ?> <?=date("Y")?> '> 
<meta name='revisit' content='1 days' /> 
<meta http-equiv="Content-Language" content="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<base href="http://videosanime.net/">
<link href="Estilo.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="Js/jquery-1.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $('.boxgrid.captionfull').hover(function(){
    $(".cover", this).stop().animate({top:'212px'},{queue:false,duration:160});
    }, function() {
    $(".cover", this).stop().animate({top:'212px'},{queue:false,duration:360});
    });
    });
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    	$(document).ready(function(){
		$("dd:not(:first)").hide();
		$("dt a").click(function(){
			$("dd:visible").slideUp("slow");
			$(this).parent().next().slideDown("slow");
			return false;
		});
	});
	</script> 
</head>
<body>
<div id="container">
<div style="position: absolute; width: 100px; height: 12px; z-index: 1; left: 108px; top: 138px" id="capa1">
	<div style="position:absolute; margin-top:-31px; margin-left:22px;" align="center"> 
<embed allowfullscreen='false' allowscriptaccess='always' flashvars='file=http://50.7.243.50:8106/;stream.nsv&amp;type=mp3&amp;volume=100&amp;autostart=true&amp;frontcolor=0x000000&amp;backcolor=0x96deff&amp;lightcolor=0x005b84' height='18' id='ply' name='ply' quality='high' src='http://radioanime.bligoo.com/media/users/9/491639/files/42634/mediaplayer.swf' type='application/x-shockwave-flash' width='190'/> 
</div></div>
<!-- INICIO HEADER -->
<div id="supe">Todos los Animes Online | Todos los capitulos solo en <?php echo $sitio; ?></div> 
<div id="l" class="c" style="width: 1000px; height: 110px"> 
<a href="/" title="Anime Online" style="float: left;"> 
<img src="http://videosanime.net/videosanime-3.jpg" alt="Anime Online" name="logo" width="990" height="100" border="0" id="logo"></a></div> 
<div class="menu-nav" style="height: 50px"><div class="index-nav"><ul> 
<li><a href="/">Inicio</a></li> 
<li><a href="http://videosanime.net/chat.php" target="_blank" >Chat</a></li> 
<li><a href="http://anime-radio.net/" target="_blank" >AnimeRadio</a></li>
<li><a href="http://fan-deanime.net/" target="_blank" >FanAnime</a></li>
<li><a href="#" target="_blank" >Pronto</a></li>
<li><a href="#" target="_blank" >Pronto</a></li>
</ul>
<!-- INICIO BUSCADOR --> 
 <p></p><p></p>
<form action="http://videosanime.net" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-3828104147601069:lmnqytri2h8" />
    <input type="hidden" name="cof" value="FORID:10" />
    <input type="hidden" name="ie" value="ISO-8859-1" />
    <input type="text" name="q" size="31" />
    <input type="submit" name="sa" value="Buscar Anime" />
  </div>
</form>
<script type="text/javascript" src="http://www.google.com.pe/cse/brand?form=cse-search-box&amp;lang=es"></script> 
<!-- FIN BUSCADOR -->
</div></div> 
<!-- FINAL HEADER -->
<div id="pub-contenedor"> 
<div id="pub-1"><div class="publicidad">
&nbsp;</div></div>
<div id="pub-2"><div class="publicidad"> 
&nbsp;</div></div>
<div id="pub-3"><div class="publicidad"> 
&nbsp;</div></div>
</div> 
<div id="main"> 
<div id="cse-search-results"></div>
<script type="text/javascript">
  var googleSearchIframeName = "cse-search-results";
  var googleSearchFormName = "cse-search-box";
  var googleSearchFrameWidth = 800;
  var googleSearchDomain = "www.google.com.pe";
  var googleSearchPath = "/cse";
</script>
<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
<!-- INICIO ABECEDARIO --> 
<div align="center"> 
<div class="paginacion"> 
<span class="pag"> 
<a href="letra/1.html">#</a>
<a href="letra/a.html">A</a>
<a href="letra/b.html">B</a>
<a href="letra/c.html">C</a>
<a href="letra/d.html">D</a>
<a href="letra/e.html">E</a>
<a href="letra/f.html">F</a>
<a href="letra/g.html">G</a>
<a href="letra/h.html">H</a>
<a href="letra/i.html">I</a>
<a href="letra/j.html">J</a>
<a href="letra/k.html">K</a>
<a href="letra/l.html">L</a>
<a href="letra/m.html">M</a>
<a href="letra/n.html">N</a>
<a href="letra/o.html">O</a>
<a href="letra/p.html">P</a>
<a href="letra/q.html">Q</a>
<a href="letra/r.html">R</a>
<a href="letra/s.html">S</a>
<a href="letra/t.html">T</a>
<a href="letra/u.html">U</a>
<a href="letra/v.html">V</a>
<a href="letra/w.html">W</a>
<a href="letra/x.html">X</a>
<a href="letra/y.html">Y</a>
<a href="letra/z.html">Z</a>
</span> 
</div> 
</div>
<!-- FIN ABECEDARIO --> 
<!-- INICIO CUERPO --> 
<center><table border="0" width="990" cellspacing="0" cellpadding="0"><tr>
<!-- IZQ -->
<td width="790" valign="top">
<?php
if($mo=="letra"){
?>
<div class="items-titulo" style="width: 790px" align="center">Ver Animes con la letra  <?=ucwords($letra)?></div>
<br>
<div id="lista-animes"><?php letra_anime($letra); ?></div>
<?
}elseif($mo=="buscar"){
?>
<div class="items-titulo" style="width: 790px" align="center">Resultados de la Busqueda: <?=$busqueda?></div>
<div class="contenido">
<?php
$_pagi_sql="SELECT nombre,id_capitulo,id_anime,nombre_capitulo FROM animes INNER JOIN capitulos ON animes.id=capitulos.id_anime WHERE MATCH(nombre) AGAINST('".$busqueda."') OR MATCH(nombre_capitulo) AGAINST('".$busqueda."')";
$_pagi_cuantos = 20;
$_pagi_nav_num_enlaces = 8;
//definimos qu&eacute; ir&aacute; en el enlace a la p&aacute;gina anterior
$_pagi_nav_anterior = "Atras";// podr&iacute;a ir un tag <img> o lo que sea
//definimos qu&eacute; ir&aacute; en el enlace a la p&aacute;gina siguiente
$_pagi_nav_siguiente = "Siguiente";// podr&iacute;a ir un tag <img> o lo que sea
$_pagi_nav_estilo = "current";
@require"Procesos/paginator.inc.php";
if(mysql_num_rows($_pagi_result)> 0){
while($d=mysql_fetch_array($_pagi_result)){
$numeral++;
echo "<div class=\"lista-capitulos\" style=\"width:790px\"> 
<ul id=\"lcd\"style=\"width:790px\"> 
<li class=\"lc\" style=\"width:790px\"><a href=\"episodio/".$d['id_capitulo']."/".hacer_url($d['nombre'])."_".hacer_url($d['nombre_capitulo']).".html\" class=\"lcc\">".$d['nombre']." - ".$d['nombre_capitulo']."</a></li> 
</ul> 
</div>"; 
} 
}else { 
echo "<a href=\"#\">No se encontraron resultados para: ".$busqueda."</a>"; 
$nohaypag="yes";
}
?>
</div>
<div class="contenido-abajo"></div>
<center><div class="pagination"><? if(!$nohaypag){ echo $_pagi_navegacion; } ?></div></center>
<?
}else{
?>
<div id="column1"></div>
<div class="items-titulo" style="width: 790px">Nuevos Animes Agregados</div>
<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FVideosAnime&amp;width=800&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=true&amp;header=false&amp;height=395" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:800px; height:395px;" allowTransparency="true"></iframe>

&nbsp;<div id="lista-animes">
<div>
<?php index_caratula(); ?>
</div>
</div>
<?php }?>
</td>
<!-- DER -->
<td width="200" valign="top">
<div class="items-titulo" style="width: 200px" align="center">Lista Completa</div>

<dt><a href="">Ultimos Capitulos</a></dt>
<ul class="menu">
<li><a href="http://videosanime.net/episodio/2766/Naruto-Shippuden_Episodio-229.html">Naruto Shippuden 229<img src="http://videosanime.net/imagenes/new.gif" alt="new.gif (25×9)"><img src="http://videosanime.net/imagenes/hd.gif" alt="hd.gif (24×10)"></a>&nbsp; </li>
<li><a href="http://videosanime.net/episodio/2767/One-Piece_Episodio-516.html">One Piece 516<img src="http://videosanime.net/imagenes/new.gif" alt="new.gif (25×9)"><img src="http://videosanime.net/imagenes/hd.gif" alt="hd.gif (24×10)"></a></li>
<li><a href="http://videosanime.net/episodio/2768/Bleach_Episodio-341.html">Bleach 341<img src="http://videosanime.net/imagenes/new.gif" alt="new.gif (25×9)"><img src="http://videosanime.net/imagenes/hd.gif" alt="hd.gif (24×10)"></a></li>
</li></ul>
<dt><a href="">Series en emision</a></dt>
<ul class="menu">
<li><a href="http://videosanime.net/anime/Ao-no-Exorcist_30.html">Ao no Exorcist</a></li>
<li><a href="http://videosanime.net/anime/Baka-to-Test-to-Shoukanjuu-Ni_102.html">Baka to Test to Shoukanjuu Ni!</a></li>
<li><a href=http://videosanime.net/anime/Blade_103.html>Blade</a></li>
<li><a href=http://videosanime.net/anime/Blood-C_104.html>Blood-C</a></li>
<li><a href=http://videosanime.net/anime/Ikoku-Meiro-no-Croisee-_105.html>Ikoku Meiro no Croisee</a></li>
<li><a href=http://videosanime.net/anime/Itsuka-Tenma-no-Kurousagi-_106.html>Itsuka Tenma no Kurousagi</a></li>
</li></ul>
<dl>
<dt><a href="#">&nbsp; A - F</a></dt>
<dd>

<ul class="menu">
<li><a href="http://videosanime.net/anime/Astarotte-no-Omocha_32.html">Astarotte no Omocha!</a>
<li><a href="http://videosanime.net/anime/Aria-The-Scarlet-Ammo_31.html">Aria The Scarlet Ammo</a>
<li><a href="http://videosanime.net/anime/Ao-no-Exorcist_30.html">Ao no Exorcist</a>
<li><a href="http://videosanime.net/anime/Ano-Hi-Mita-Hana-no-Namae_29.html">Ano Hi Mita Hana no Namae</a></li>
<li><a href="http://videosanime.net/anime/Abnormal-Physiology-Seminar_28.html">Abnormal Physiology Seminar</a></li>
<li><a href="http://videosanime.net/anime/A-Channel_27.html">A Channel</a>
</li><li><a href="http://videosanime.net/anime/Abenobashi-Mahou-Shoutengai_16.html">Abenobashi Mahou Shoutengai</a> 
</li><li><a href="http://videosanime.net/anime/Air-Tv_15.html">Air Tv</a> 
</li><li><a href="http://videosanime.net/anime/Air-Gear_14.html">Air Gear</a>
</li><li><a href="http://videosanime.net/anime/Aishiteruze-Baby_13.html">Aishiteruze Baby</a> 
</li><li><a href="http://videosanime.net/anime/Akane-iro-ni-Somaru-Saka_12.html">Akane-iro ni Somaru Saka</a>
</li><li><a href="http://videosanime.net/anime/Akkikan_11.html">Akkikan!</a> 
</li><li><a href="http://videosanime.net/anime/Amaenaideyo_9.html">Amaenaideyo!!</a>
</li><li><a href="http://videosanime.net/anime/Amaenaideyo-Katsu_10.html">Amaenaideyo!! Katsu!!</a> 
</li><li><a href="http://videosanime.net/anime/Angel-Beats_8.html">Angel Beats!</a>
<li><a href="http://videosanime.net/anime/Asatte-no-Houko_7.html">Asatte no Houko</a> 
</li><li><a href="http://videosanime.net/anime/Asu-no-Yoichi_6.html">Asu no Yoichi</a> 
</li><li><a href="http://videosanime.net/anime/Amagami-SS_5.html">Amagami SS</a>
</li><li><a href="http://videosanime.net/anime/Aoi-Hana_99.html">Aoi Hana</a>
</li><li><a href="http://videosanime.net/anime/Arakawa-Under-the-Bridge_100.html">Arakawa Under the Bridge</a>
</li><li><a href="http://videosanime.net/anime/Arakawa-Under-the-Bridge-x-Bridge_101.html">Arakawa Under the Bridge x</a>
</li><li><a href="http://videosanime.net/anime/Beck-Mongolian-Chop-Squad_82.html">Beck</a></li>
<li><a href="http://videosanime.net/anime/B-Gata-H-Kei_75.html">B Gata H Kei</a>
<li><a href=http://videosanime.net/anime/Blade_103.html">Blade</a></li>
<li><a href="http://videosanime.net/anime/Bleach_24.html">Bleach</a>
<li><a href="http://videosanime.net/anime/Bakemonogatari_3.html">Bakemonogatari</a>
<li><a href="http://videosanime.net/anime/Baka-to-Test-to-Shoukanjuu-Ni_102.html">Baka to Test to Shoukanjuu Ni!</a></li>
<li><a href=http://videosanime.net/anime/Blood-C_104.html">Blood-C</a></li>
<li><a href="http://videosanime.net/anime/Chaos-Head_71.html">Chaos Head</a> 
</li><li><a href="http://videosanime.net/anime/Chu-Bra_54.html">Chu-Bra!!</a>
</li><li><a href="http://videosanime.net/anime/Clannad_49.html">Clannad</a>
<li><a href="http://videosanime.net/anime/C-The-Money-of-Soul-and-Possibility-Control_33.html">C:The Money of Soul and P..</a>
<li><a href="http://videosanime.net/anime/Dance-in-the-Vampire-Bund_83.html">Dance in the Vampire Bund</a>
</li><li><a href="http://videosanime.net/anime/Dears_55.html">Dears</a>
</li><li><a href="http://videosanime.net/anime/Death-Note_41.html">Death Note</a>
</li><li><a href="http://videosanime.net/anime/Denpa-Onna-to-Seishun-Otoko_37.html">Denpa Onna to Seishun Otoko</a>
</li><li><a href="http://videosanime.net/anime/Deadman-Wonderland_34.html">Deadman Wonderland</a>
</li><li><a href="http://videosanime.net/anime/Ef--a-Tale-of-Melodies_84.html">Ef - a Tale of Melodies</a>
</li><li><a href="http://videosanime.net/anime/Elfen-Lied_42.html">Elfen Lied</a>
<li><a href="http://videosanime.net/anime/Full-Metal-Alchemist_36.html">Full Metal Alchemist</a>
<li><a href="http://videosanime.net/anime/Futakoi_1.html">Futakoi</a>
<li><a href="http://videosanime.net/anime/Futakoi-Alternative_2.html">Futakoi Alternative</a>

</li>
</li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></ul>
</dd>
<div class="menu-horizontal-abajo"></div>
<dt><a href="#">G - L</a></dt>
<dd>
<ul class="menu">	
<li><a href="http://videosanime.net/anime/Great-Teacher-Onizuka_85.html">Great Teacher Onizuka</a>
</li><li><a href="http://videosanime.net/anime/Girls-Bravo-2_62.html">Girls Bravo</a>
</li><li><a href="http://videosanime.net/anime/Girls-Bravo-2_62.html">Girls Bravo 2</a>
</li><li><a href="http://videosanime.net/anime/Gantz_39.html">Gantz</a>
</li><li><a href="http://videosanime.net/anime/Happiness-_88.html">Happiness!</a>
</li><li><a href="http://videosanime.net/anime/Hanbun-no-Tsuki-ga-Nonoru-Sora_77.html">Hanbun no Tsuki ga Nonoru Sora</a>
</li><li><a href="http://videosanime.net/anime/High-School-of-the-Dead_98.html">High School of the Dead</a>
</li><li><a href="http://videosanime.net/anime/Higashi-no-Eden_96.html">Higashi no Eden</a>
</li><li><a href="http://videosanime.net/anime/H2O-Footsprints-In-The-Sand-_64.html">H2O </a>
</li><li><a href="http://videosanime.net/anime/Hatsukoi-Limited_56.html">Hatsukoi Limited</a>
</li><li><a href="http://videosanime.net/anime/Ichigo-100_57.html">Ichigo 100%</a>
<li><a href=http://videosanime.net/anime/Ikoku-Meiro-no-Croisee-_105.html">Ikoku Meiro no Croisee </a></li>
<li><a href=http://videosanime.net/anime/Itsuka-Tenma-no-Kurousagi-_106.html>Itsuka Tenma no Kurousagi</a></li>
</li><li><a href="http://videosanime.net/anime/Kamisama-Kazoku_89.html">Kamisama Kazoku</a>
</li><li><a href="http://videosanime.net/anime/Kanokon_63.html">Kanokon</a>
</li><li><a href="http://videosanime.net/anime/Kimi-ni-Todoke_51.html">Kimi ni Todoke</a>
</li><li><a href="http://videosanime.net/anime/kimi-ni-todoke-segunda-temporada_53.html">kimi ni todoke 2</a>
</li><li><a href="http://videosanime.net/anime/Kimi-ni-Todoke-Live-Action_50.html">Kimi ni Todoke Live Action</a>
</li><li><a href="http://videosanime.net/anime/KissXsis_52.html">KissXsis</a>
</li><li><a href="http://videosanime.net/anime/Kami-Nomi-zo-Shiru-Sekai_40.html">Kami Nomi zo Shiru Sekai</a>
</li><li><a href="http://videosanime.net/anime/Kami-Nomi-zo-Shiru-Sekai-2_38.html">Kami Nomi zo Shiru Sekai 2</a>
</li><li><a href="http://videosanime.net/anime/Ladies-vs-Butlers_70.html">Ladies vs Butlers!</a>
<li><a href="http://videosanime.net/anime/Love-Hina_45.html">Love Hina</a>
</li></li></li></li></li></li></li></ul>
</dd>
<div class="menu-horizontal-abajo"></div>
<dt><a href="#">M - R</a></dt>
<dd>
<ul class="menu">
<li><a href="http://videosanime.net/anime/Maria-Holic_95.html">Maria Holic</a>	
<li><a href="http://videosanime.net/anime/Mayoi-Neko-Overrun_92.html">Mayoi Neko Overrun!</a>
</li><li><a href="http://videosanime.net/anime/Midori-no-Hibi_87.html">Midori no Hibi</a> 
</li><li><a href="http://videosanime.net/anime/Maburaho_44.html">Maburaho</a>
</li><li><a href="http://videosanime.net/anime/Nodame-Cantabile_90.html">Nodame Cantabile</a> 
</li><li><a href="http://videosanime.net/anime/Nodame-Cantabile-Paris_91.html">Nodame Cantabile Paris</a> 
</li><li><a href="http://videosanime.net/anime/Nodame-Cantabile-Finale_94.html">Nodame Cantabile Finalen</a>
<li><a href="http://videosanime.net/anime/NANA_80.html">NANA</a> 
<li><a href="http://videosanime.net/anime/Naruto-Shippuden_23.html">Naruto Shippuden</a> 
</li><li><a href="http://videosanime.net/anime/Nogizaka-Haruka-no-Himitsu_46.html">Nogizaka Haruka no Himitsu</a>
<li><a href="http://videosanime.net/anime/Nogizaka-Haruka-no-Himitsu-Purezza_47.html">Nogizaka Haruka no Himitsu Purezza</a>
<li><a href="http://videosanime.net/anime/Neon-Genesis-Evangelion_19.html">Neon Genesis Evangelion</a>
</li><li><a href="http://videosanime.net/anime/Ouran-High-School-Host-Club_73.html">Ouran High School Host Club</a>
<li><a href="http://videosanime.net/anime/Onegai-Teacher_65.html">Onegai Teacher!</a>
<li><a href="http://videosanime.net/anime/Omamori-Himari_59.html">Omamori Himari</a>
<li><a href="http://videosanime.net/anime/One-Piece_25.html">One Piece</a>
<li><a href="http://videosanime.net/anime/Princess-Lover_58.html">Princess Lover!</a> 
</li><li><a href="http://videosanime.net/anime/Rec_78.html">Rec</a>
</li><li><a href="http://videosanime.net/anime/Rosario-Vampire-_66.html">Rosario + Vampire</a>
</li><li><a href="http://videosanime.net/anime/Rosario-Vampire-Capu2_67.html">Rosario + Vampire Capu2</a>
</li>
</li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></ul>
</dd>
<div class="menu-horizontal-abajo"></div>
<dt><a href="#">S - Z</a></dt>
<dd>
<ul class="menu">	
<li><a href="http://videosanime.net/anime/Seto-no-Hanayome_93.html">Seto no Hanayome</a>
<li><a href="http://videosanime.net/anime/Seikon-No-Qwaser_86.html">Seikon No Qwaser</a>
</li><li><a href="http://videosanime.net/anime/Skip-Beat_79.html">Skip Beat!</a>
<li><a href="http://videosanime.net/anime/Spice-and-Wolf_72.html">Spice and Wolf</a>
<li><a href="http://videosanime.net/anime/Shuffle_68.html">Shuffle!</a>
</li><li><a href="http://videosanime.net/anime/Shuffle-Memories_69.html">Shuffle! Memories</a>
</li><li><a href="http://videosanime.net/anime/School-Days_35.html">School Days</a>
</li><li><a href="http://videosanime.net/anime/Saki_20.html">Saki</a>
</li><li><a href="http://videosanime.net/anime/True-Tears_81.html">True Tears</a>
</li><li><a href="http://videosanime.net/anime/Toradora_48.html">Toradora!</a>
</li><li><a href="http://videosanime.net/anime/Tokimeki-Memorial-Only-Love_43.html">Tokimeki Memoria</a>
</li><li><a href="http://videosanime.net/anime/To-Love-Ru_22.html">To Love-Ru</a>
</li><li><a href="http://videosanime.net/anime/Tengen-Toppa-Gurren-Lagan_21.html">Tengen Toppa Gurren Lagan</a>
</li><li><a href="http://videosanime.net/anime/White-Album_74.html">White Album</a>
</li><li><a href="http://videosanime.net/anime/White-Album-2_76.html">White Album 2</a>
</li><li><a href="http://videosanime.net/anime/Winter-Sonata_4.html">Winter Sonata</a>
</li><li><a href="http://videosanime.net/anime/Yu-Gi-Oh-Bonds-Beyond-Mas-All-del-Tiempo-_97.html">Yu-Gi-Oh Bonds Beyond</a>
</li>
</li></li></li></li></li></li></li></li></li></ul>
</dd>
<div class="menu-horizontal-abajo"></div>
<dt><a href="#">0 - 9</a></dt>
<dd>
<ul class="menu">	
<li><a href="http://videosanime.net/anime/5-centimetros-por-segundo_60.html">5 centimetros por segundo</a>
<li><a href="http://videosanime.net/anime/2x2-shinobuden_26.html">2x2 shinobuden</a>
<li><a href="http://fan-deanime.blogspot.com/2011/04/saint-seiya-lost-canvas.html">Saint Saiya - The Lost Canvas</a>
<li><a href="http://videosanime.net/anime/07-Ghost_18.html">07 Ghost</a>
</li><li><a href="http://videosanime.net/anime/11-Eyes_17.html">11 Eyes</a>
</li>
</li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></li></ul>
</dd> 			
						
						



	  					
    					<div class="menu-horizontal-abajo"></div>
						</dl></td>
					</tr>
				</table>

                                            </font>



	  	</center>
</td>

<!-- FIN -->
</tr></table><center>
<!-- FINAL CUERPO -->
</div>
<!-- FINAL --> 
  <!-- INICIO FOOTER --> 
<div id="footer" style="height: 90px">
	<div id="footer-centro" style="width: 975px; height: 55px"> 
<strong><?php echo $sitio; ?> © 2011</strong>
<br> 
Ningún video está alojado en nuestros servidores, todos son enlaces tomados desde diferentes servidores gratuitos como: Megaupload,, Megavideo, 
Y muchos más.
<p><script type="text/javascript" src="http://widgets.amung.us/small.js"></script><script type="text/javascript">WAU_small('g849m99ad16k')</script></div></div> 
<!-- FINAL FOOTER -->
<!-- Histats.com  START (hidden counter)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="contador javascript" ><script  type="text/javascript" >
try {Histats.start(1,1546030,4,0,0,0,"");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?1546030&101" alt="contador javascript" border="0"></a></noscript>
<!-- Histats.com  END  -->
 

 
</body>
</html>