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



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml"> 



<head>



<title>Anime Vision</title>

<meta name="verify-iw" content="IW884091795596034" />

<meta property="og:title" content="<?php echo $sitio; ?> - Lo mejor en Animes">



<meta property="og:site_name" content="<?php echo $titulo; ?>">



<meta property="og:type" content="tv_show">



<meta property="og:image" content="<?php echo $web; ?>/img/imgfb.jpg">



<meta property="og:description" content="Para ver el capitulo da click en el enlace.">



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">



<meta name="description" content="Ver Anime Online Sin Censura y sin restricciones, todos nuestros videos estan alojados en distintos servidores para ver en alta calidad: Megaupload, Hotfile, etc. Ver Anime Online Sub Español">



<meta name="keywords" content="Anime Online, Anime en Linea, AnimeOnline, Anime sin Censura, Anime sub Español, anime, Anime Sex, Web Anime Online, Anime Online Completo, Ver Anime Online ">



<link rel="image_src" href="/img/imgfb.jpg">



<link rel="shortcut icon" href="favicon.ico">



<link href="/css/main.css" rel="stylesheet" type="text/css">



<base href="<?php echo $web; ?>">



<link rel="alternate" type="application/rss+xml" title="<?php echo $sitio; ?> RSS Feed" href="/rss.php">



<script type="text/javascript" src="/css/prototaculous.js"></script>



<script type="text/javascript" src="/css/jquery-1.4.2.min.js"></script>



<script type="text/javascript" src="/css/jquery.tipsy.js"></script>



<script type="text/javascript" src="/css/jquery.jtruncate.pack.js"></script>



<script type="text/javascript" src="/css/script.js"></script>



<script type="text/javascript"></script>



<script type="text/javascript">

var rev = "fwd";

function titlebar(val)

{

	var msg  = "Anime Vision - Todo el poder del anime esta en tus Manos";

	var res = " ";

	var speed = 100;

	var pos = val;



	msg = "   ..:: "+msg+" ::..";

	var le = msg.length;

	if(rev == "fwd"){

		if(pos < le){

		pos = pos+1;

		scroll = msg.substr(0,pos);

		document.title = scroll;

		timer = window.setTimeout("titlebar("+pos+")",speed);

		}

		else{

		rev = "bwd";

		timer = window.setTimeout("titlebar("+pos+")",speed);

		}

	}

	else{

		if(pos > 0){

		pos = pos-1;

		var ale = le-pos;

		scrol = msg.substr(ale,le);

		document.title = scrol;

		timer = window.setTimeout("titlebar("+pos+")",speed);

		}

		else{

		rev = "fwd";

		timer = window.setTimeout("titlebar("+pos+")",speed);

		}	

	}

}



titlebar(0);

</script>



<!--[if lte IE 7]><link href="/css/noie.css" rel="stylesheet" type="text/css">



<![endif]--><!--[if IE 6]><iframe src="/noie.html" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="100%" height="100%" id="i"></iframe>



<![endif]--><!--[if IE 7]><iframe src="/noie.html" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="100%" height="700" id="i" style="height:500px"></iframe>



<![endif]--><!--[if IE ]><style type="text/css">#b{/*margin-top: -65px;*/} #q{height: 22px; margin-left: 2px; margin-top: 0px; padding-left: 6px; padding-top: 8px; text-shadow: #AEDDFF 0px 1px 0px; width: 190px;} #bb:hover{height: 31px; margin-left: 3px; margin-top: 0px; outline: none; width: 51px;}</style>



<![endif]-->





</head>



<body>



<div id="header"><div id="cb">



<!-- arriba --><div id="hh"><div id="eih"></div><div id="h"><h1 class="title">Anime Vision - Todo el poder del anime esta en tus Manos</h1></div><div id="edh"></div></div>



<!-- logo --><div id="l" class="c"><a href="http://www.animevision.org" title="<?php echo $sitio; ?> - Todo el poder del anime esta en tus Manos" style="float: left;"><img src="logo.png"></a>

</div>







</div></div>



<div id="mm"><div id="eim"></div><div id="m">



<?php include("css/menu.php"); ?>



<!-- buscador -->



<form action="buscador.php" method="get" id="b">



<iframe src="http://www.facebook.com/plugins/like.php?app_id=121492064600717&amp;href=http://www.facebook.com/pages/Anime-Vision/319678798057944&amp;send=false&amp;layout=button_count&amp;width=200&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="no" frameborder="0" class="tip" title="Si te gusta la web dale en Me Gusta" style="border:none; overflow:hidden; width:120px; height:21px;displa:block;float:left;margin:3px;margin-top:6px;" allowTransparency="true"></iframe>





<a href="http://www.facebook.com/pages/Anime-Vision/319678798057944" target="_blank" style="displa:block;float:left;margin:3px;"><img src="/img/fb.png" alt="Facebook" width="24" height="24" border="0" class="tip" title="S&iacute;guenos en Facebook"></a>



<input type="hidden" name="site" value="<?php echo $sitio; ?>"><input type="text" id="q" name="q" value="Ingresa tu b&uacute;squeda" onblur="if(this.value==''){ var texto=this.value='Ingresa tu b&uacute;squeda'; }" onfocus="if(this.value=='Ingresa tu b&uacute;squeda') this.value='';"><input type="submit" value="Buscar" id="bb" style="text-indent:-9999px"></form>



</div><div id="edm"></div></div></div>







<div id="main">



<div id="mt"></div>



<div id="mmm">



<div class="cc fleft"><div class="ctit">Animes por orden alfab&eacute;tico:</div><div class="ccon">



<ul class="alfa" style="margin-top:15px; margin-left: 100px;"><li><a href="letra/a.html" class="let">A</a></li><li><a href="letra/b.html" class="let">B</a></li><li><a href="letra/c.html" class="let">C</a></li><li><a href="letra/d.html" class="let">D</a></li><li><a href="letra/e.html" class="let">E</a></li><li><a href="letra/f.html" class="let">F</a></li><li><a href="letra/g.html" class="let">G</a></li><li><a href="letra/h.html" class="let">H</a></li><li><a href="letra/i.html" class="let">I</a></li><li><a href="letra/j.html" class="let">J</a></li><li><a href="letra/k.html" class="let">K</a></li><li><a href="letra/l.html" class="let">L</a></li><li><a href="letra/m.html" class="let">M</a></li><li><a href="letra/n.html" class="let">N</a></li><li><a href="letra/o.html" class="let">O</a></li><li><a href="letra/p.html" class="let">P</a></li><li><a href="letra/q.html" class="let">Q</a></li><li><a href="letra/r.html" class="let">R</a></li><li><a href="letra/s.html" class="let">S</a></li><li><a href="letra/t.html" class="let">T</a></li><li><a href="letra/u.html" class="let">U</a></li><li><a href="letra/v.html" class="let">V</a></li><li><a href="letra/w.html" class="let">W</a></li><li><a href="letra/x.html" class="let">X</a></li><li><a href="letra/y.html" class="let">Y</a></li><li><a href="letra/z.html" class="let">Z</a></li><li><a href="letra/1.html" class="let">#</a></li></ul>


</div></div>


<table border="0" width="981" cellspacing="0" cellpadding="0"><tr>





<!-- izq -->



<td valign="top" width="184"><div id="left">



<!-- 160x600 --><div class="cto">Links de inter&eacute;s</div><div class="cbo"><div class="a160">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8982737253722748";
/* adsense */
google_ad_slot = "6718594896";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script> 
  </div>
   
</div>
<div class="cto">Links de inter&eacute;s</div><div class="cbo"><div class="a160">
 <script type="text/javascript"><!--
google_ad_client = "ca-pub-8982737253722748";
/* adsense 1 */
google_ad_slot = "7166277304";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script> 
 
</div></div></td>


<!-- mid -->



<td valign="top" width="554"><div id="mid">



<!-- banner rotator -->



<!-- banner rotator -->



<div class="m_t"></div>



<div class="m_m">



<?php



if($mo=="letra"){



?><h1>Ver Animes con la letra <?=ucwords($letra)?></h1>



<?php letra_anime($letra); ?>



<?



}elseif($mo=="buscar"){



?><h1>Resultados de la busqueda: <?=$busqueda?></h1>



<?php



$_pagi_sql="SELECT id,nombre,imagen,catg FROM animes WHERE MATCH(nombre) AGAINST('".$busqueda."') OR MATCH(nombre) AGAINST('".$busqueda."')";



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



echo "<div class=\"bl\"><a href=\"".hacer_url($d['catg'])."/".hacer_url($d['nombre'])."/".hacer_url($d['id']).".html\"><img src=\"".$d['imagen']."\" class=\"im\" width=\"166\" border=\"0\" height=\"250\"></a><div class=\"tt\"><h1><a href=\"".$i['catg']."/".hacer_url($d['nombre'])."/".hacer_url($d['id']).".html\">".$d['nombre']."  ".$d['nombre_capitulo']."</a></h1></div></div>"; 



} 



}else { 



echo "<a href=\"#\">No se encontraron resultados para: ".$busqueda."</a>"; 



$nohaypag="yes";



}



?><div class="clear"></div></div><div class="m_t"></div><div class="clear"></div><center><div class="pagination"><? if(!$nohaypag){ echo $_pagi_navegacion; } ?></div></center><div class="clear"></div>



<?



}else{



?>



<!-- ANI --><h1>Ultimos Animes Agregados:</h1><?php index_anime(); ?></div><div class="m_b"></div>

<!-- OVA --><h1>Ovas:</h1><?php index_ova(); ?></div><div class="m_b"></div>

<!-- PELICULAS --><h1>Peliculas:</h1><?php index_peli(); ?></div><div class="m_b"></div>


<div class="clear"></div>



<?php }?></div><div class="clear"></div></td><div class="clear"></div>



<!-- der -->



<td valign="top" width="243">

<div class="dt">Lista de Animes</div><div class="dm" id="mamain"><ul id="holder"><?php index_0_z(); ?></ul></div><div style="height: 23px;" class="dm"></div>




<div class="dt">Facebook Anime Vision</div><div class="dm"><iframe src="http://www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/pages/Anime-Vision/319678798057944&amp;width=221&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=false&amp;height=621" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:221px; height:621px;" allowTransparency="true"></iframe></div>



<script type="text/javascript">(function(p){p.fn.sweetPages=function(c){if(!c)c={};var d=c.perPage||3;var f=this;var g=f.find('li');g.each(function(){var a=p(this);a.data('height',a.outerHeight(true))});var h=Math.ceil(g.length/d);if(h<2)return this;var j=p('<div class="swControls">');for(var i=0;i<h;i++){g.slice(i*d,(i+1)*d).wrapAll('<div class="swPage" />');j.append('<a href="javascript:void();" class="swShowPage" title="P&aacute;gina: '+(i+1)+'">'+(i+1)+'</a>')}f.append(j);var k=0;var l=0;var m=f.find('.swPage');m.each(function(){var a=p(this);var b=0;a.find('li').each(function(){b+=p(this).data('height')});if(b>k)k=b;l+=a.outerWidth();a.css('float','left').width(f.width())});m.wrapAll('<div class="swSlider" />');f.height(k);var n=f.find('.swSlider');n.append('<div class="clear" />').width(l);var o=f.find('a.swShowPage');o.click(function(e){p(this).addClass('active').siblings().removeClass('active');n.stop().animate({'margin-left':-(parseInt(p(this).text())-1)*f.width()},'normal');e.preventDefault()});o.eq(0).addClass('active');j.css({'margin-left':'0px'});return this}})(jQuery);jQuery(document).ready(function(){jQuery('#holder').sweetPages({perPage:44});var a=jQuery('.swControls').detach();a.appendTo('#mamain');jQuery('.swShowPage').tipsy({gravity: 's'})});</script><div class="db"></div>



</td>









</tr></table>



<div class="clear"></div><div class="clear"></div><div class="clear"></div></div><div class="clear"></div><div class="clear"></div><div class="clear"></div>



<!-- footer -->



<div id="footer"><div id="f_t"></div><div id="x"><center>© Copyright 2011 - Anime Vision<br />
Ninguno de estos videos esta alojado en <?php echo $sitio; ?> y tampoco reclamamos el contenido mostrado como nuestro</center></div></div>
</body></html>