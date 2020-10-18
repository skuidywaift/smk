<head>
<link href="/css/main.css" rel="stylesheet" type="text/css">
</head>

<?php
   include("conec.php");
   $link=Conectarse();
   
   $result=mysql_query("select * from animes INNER JOIN capitulos ON animes.id = capitulos.id_anime where estado LIKE '%En Emision%' ORDER BY ID_capitulo desc LIMIT 12",$link);
   
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

 <table style="color='#fff' border="1" cellspacing="1" cellpadding="1" width="544px"><tr><td>
<?php
   while($row = mysql_fetch_array($result)) {
printf("<div class=\"a\"><a href=\"ver/".$row['nombre']."".$row['nombre_capitulo']."/".$row['id_capitulo'].".html\" target=\"_blank\" title=\"".$row['nombre']." ".$row['nombre_capitulo']." Online - Ver Online\"><img src=\"".$row['imagen']."\" alt=\"".$row['nombre']."\" width=\"49\" height=\"71\" border=\"0\"></a><div class=\"at\"><a href=\"ver/".$row['nombre']."/".$row['id_capitulo'].".html\" target=\"_blank\" title=\"".$row['nombre']." ".$row['nombre_capitulo']." Online - Anime Online\">".cortarTexto($row['nombre'])." ".$row['nombre_capitulo']."</a> </div> <div class=\"ad\">".cortarTex($row['descripccion'])."</div></div>", $row["nombre"], $row["nombre_capitulo"]);
   }
   mysql_free_result($result);
?>
</body>
</html>
      </td></tr></table>
       
</table>
</body>
</html>