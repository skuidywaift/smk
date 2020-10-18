<?php
@require_once'Procesos/Core_Funciones.php';
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
		die("<font color=#ff0000><b>Error:</b></font> La funcion <b>Limpiar Todo</b> debe contener un arreglo.");
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

if(!empty($_GET['q'])){
$q=ucwords($_GET['q']);
$q=limpiar_busqueda($q);
echo "<script>location.href=\"Busqueda/".$q."/\"</script>";
}
?>