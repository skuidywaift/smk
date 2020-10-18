<html>
<head>
   <title>Ejemplo de PHP</title>
</head>
<body>
<?php
function Conectarse(){
   if (!($link=mysql_connect("localhost","animevis_prueba","palomos1"))){
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db("animevis_pruebas",$link)){
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}
Conectarse();
echo "Conexión con la base de datos conseguida.<br>";
?>
</body>
</html>