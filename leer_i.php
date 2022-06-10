
<?php 
 
$comando = $_GET['servicio'];
if($comando == "Col3030png" ){
   
	$directory="n/img/";
	$dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
	{
	   $extension = pathinfo($directory."/".$archivo, PATHINFO_EXTENSION);
	   
	   if($extension == "mr"){
	   	$n_a = str_replace(".mr", ".png", $archivo);
	    rename ($directory."/".$archivo, $directory."/".$n_a);	
	    echo '<img src="'.$directory."/".$n_a.'">'."\n"; 
	   }
	           
	}    
	$dirint->close();
  ?>
 <script type="text/javascript">

		 const url = "?servicio=Col3030mr"; 

 	     fetch(url)
		  .then( response => {
		    if(response.status == 200) {
				
		    } else {
		    }
		  })
		  .catch( err => {
		    console.log(err);
		  });

 </script>

  <?php 
}
if($comando == "Col3030mr" ){
    $directory="n/img/";
	$dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
	{
	   $extension = pathinfo($directory."/".$archivo, PATHINFO_EXTENSION);

	   if($extension == "png"){
	   	$n_a = str_replace(".png", ".mr", $archivo);
	    rename ($directory."/".$archivo, $directory."/".$n_a);	
	     
	   }
	   
	           
	}    
	$dirint->close();
}
if($comando == "Col3030del" ){
    $directory="n/img/";
	$dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
	{
	   $extension = pathinfo($directory."/".$archivo, PATHINFO_EXTENSION);

	   if($extension == "mr"){
	   	unlink($directory."/".$archivo);
	   }
	   
	           
	}    
	$dirint->close();
}

	
 

 ?>



