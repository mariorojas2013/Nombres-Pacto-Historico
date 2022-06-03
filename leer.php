
<?php 

$comando = $_GET['servicio'];
if($comando == "Col8080"){
	$data = leer_fichero_completo("n/nombres.txt");
	// echo $data;
	$arrayc = explode(";",$data);
	echo "<br>";
	echo count($arrayc);
	echo "<br> <script>
window.setTimeout( function() {
  window.location.reload();
}, 30000);
</script>";
	print("<pre>".print_r(array_reverse($arrayc),true)."</pre>");

}
if($comando == "Col9090"){
	$data = leer_fichero_completo("n/comentarios.txt");
	// echo $data;
	$arrayc = explode("||",$data);
	echo "<br>";
	echo count($arrayc);
	echo "<br>";
	print("<pre>".print_r(array_reverse($arrayc),true)."</pre>");

}

function leer_fichero_completo($nombre_fichero){
   //abrimos el archivo de texto y obtenemos el identificador
   $fichero_texto = fopen ($nombre_fichero, "r");
   //obtenemos de una sola vez todo el contenido del fichero
   //OJO! Debido a filesize(), sólo funcionará con archivos de texto
   $contenido_fichero = fread($fichero_texto, filesize($nombre_fichero));
   return $contenido_fichero;
}

 ?>


