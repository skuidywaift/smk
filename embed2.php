<head>
<link href="/css/main.css" rel="stylesheet" type="text/css">
</head>

<?php
   include("conec.php");
   $link=Conectarse();
   $charLimit = 30; 
   $result=mysql_query("select * from animes where estado LIKE '%En Emision%' ORDER BY nombre asc ",$link);

function cortarTexto($texto) {
    $tamano = 22; // tamaño maximo
    $textoFinal = ''; // Resultado
    if (strlen($texto) < $tamano) $tamano = strlen($texto);
    for ($i=0; $i <= $tamano - 1; $i++) {
        $textoFinal .= $texto[$i];
    }
if(strlen($texto)<25){ return $texto;}else{return $textoFinal."...";}
}

function cortarTex($tex) {
    $tamano = 100; // tamaño maximo
    $texFinal = ''; // Resultado
    if (strlen($tex) < $tamano) $tamano = strlen($tex);
    for ($i=0; $i <= $tamano - 1; $i++) {
        $texFinal .= $tex[$i];
    }
if(strlen($tex)<100){ return $tex;}else{return $texFinal."...";}
}

?>
<div class="dt">Series en emision</div>
 <table style="color='#fff' border="1" cellspacing="1" cellpadding="1" width="400px">

<?php      
   while($row = mysql_fetch_array($result)) {
printf("<tr><td><div class=\"dm\">

<ul>

<li><a target=\"_parent\" href='http://animevision.org/".$row['catg']."/".$row['nombre']."/".$row['id'].".html ' title=\"".$row['nombre']." Online - Ver Online\">".cortarTexto($row['nombre'])."</a>
</li></ul></div>
</td></tr>" );
   }
   mysql_free_result($result);
   mysql_close($link);
?>
</td></tr></table>
</body>
</html>
      
       
</table>
</body>
</html>