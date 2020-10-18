<?php
   include("conec.php");
   $link=Conectarse();   
$Sql="UPDATE capitulos SET id_anime='".$_POST["id_anime"]."', nombre_capitulo='".$_POST["nombre_capitulo"]."', sub='".$_POST["sub"]."', opcn='".$_POST["opcn"]."', embed='".$_POST["embed"]."', url='".$_POST["url"]."'' WHERE id_anime='".$_POST["id_anime"]."'"; 
   mysql_query($Sql,$link); 
   header("Location: consulta.htm");
?>