<html>
<head>
   <title>Ejemplo de PHP</title>
</head>
<body>
<h1>Ejemplo de uso de bases de datos con PHP y MySQL</h1>
<?php
   include("conec.php");
   $link=Conectarse();
   $result=mysql_query("select * from capitulos WHERE id_capitulo",$link);
?>
 
<?php      
   while($row = mysql_fetch_array($result)) {
printf(select min('id_capitulo') FROM 'capitulos' where 'id_capitulo' > 123
         and 'id' = 5);
   }
   mysql_free_result($result);
?>
</table>
</body>
</html>