 <!-- Global site tag (gtag.js) - Google Analytics -->
<?php 

ini_set('display_errors','Off');

 
 
 
$data = leer_fichero_completo("n/nombres.txt");
$arrayc = explode(";",$data);
$cont = count($arrayc);

 ?>
 <meta property="og:title" content="Crea tu nombre con tematica PACTO HISTORICO">
 <meta property="og:image" id="img_embed" content="">
 <meta property="og:type"  content="website">
 <meta property="og:description" content="Crea tu nombre con tematica PACTO HISTORICO">

 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="Expires" content="0">
 <meta charset="utf-8" >
 <title>Crea tu nombre con tematica PACTO HISTORICO</title>
<meta http-equiv="Last-Modified" content="0">
 
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
 
<meta http-equiv="Pragma" content="no-cache">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="mini-default.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EK9JLKZLX0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EK9JLKZLX0');
</script>

 <img src="" class="img_nueva" style="position: absolute;   margin-left: -1000000;">
<div class="box">
	<br>
	<a class="social-btn sb-whatsapp mr-2 mb-2" target="_blank" href="https://web.whatsapp.com/send?text=Si desean tener su nombre estilo pactoHistorico ingresa en https://appsmr.es/pactohistorico/ "> Compartir  <i  class="fa fa-whatsapp" aria-hidden="true"></i></a><br><br>
	<a class="social-btn sb-facebook mr-2 mb-2" target="_blank" href="http://www.facebook.com/sharer.php?s=100&p[url]=https://appsmr.es/pactohistorico/&p[title]=Nomres pactoHistorico&p[summary]=Si desean tener su nombre estilo pactoHistorico  ">Compartir  <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
	<br>
	<div class="input">

		<br>
		<br>Plantilla:
    <br>

    <input type="radio" name="selectP" onclick="" id="ph" value="ph" <?php echo ($_GET['op']=="")?'checked':''; ?> <?php echo ($_GET['op']=="ph")?'checked':''; ?> >
    <label for="ph">Pacto historico</label>
    <input type="radio" name="selectP" onclick="" id="ml" value="ml" <?php echo ($_GET['op']=="ml")?'checked':''; ?>>
    <label for="ml">Con "Me llamo ..."</label>
    <input type="radio" name="selectP" onclick="" id="ps" value="ps" <?php echo ($_GET['op']=="ps")?'checked':''; ?>>
    <label for="ps">Con "#Pacto Sabroso"</label>
    <input type="radio" name="selectP" onclick="" id="cv" value="cv" <?php echo ($_GET['op']=="cv")?'checked':''; ?>>
    <label for="cv">Con "Cambio por la vida"</label>
    <input type="radio" name="selectP" onclick="" id="pz" value="pz" <?php echo ($_GET['op']=="pz")?'checked':''; ?>>
    <label for="pz">Con "se suma al pacto por la paz"</label>
    <br>
		<input type="text" name="name" id="name" value="<?php echo $_GET['nombre']; ?>"   placeholder="Escribe tu nombre"> 
    <input type="button" value="Enviar" onclick="abrir($('#name').val())" style="font-family: monospace;" >
    
   
	</div>
	<div class="design" id="design">
		<div class="render ph">
		 
		</div>
		<div class="render ml mlt">
		 
		</div>
		<img class='ph' src='ph.png'>
		<img class='ml' src='ml.jpg'>
		<div class="adicionalText"></div>
		<div class="autor">by MR</div>	
		 	
	</div>
	
	<input type="button" style="font-family: monospace;" value="Descargar" onclick="downloadimage()">
	<br><br>
	<div style="font-family: monospace;"><?php echo $cont ?> frases se han registrado  <i class="fa fa-coffee" aria-hidden="true"></i></div>
	<br>
	<br>
	<div style="font-family: monospace;">Version 0.56</div>
	<br>
	<!-- <div  style="font-family: monospace; color: #c5c5c5;">	Cualquier inquietud escribanos a comentarios_app@outlook.com</div> -->
	<br>
	<form action="?mensaje=ok" method="post">
		<label style="font-family: monospace;">Déjanos tus comentarios!</label><br>
		<textarea name="comentario"></textarea><br>
		<input type="submit" style="font-family: monospace;" value="comentar">
		<div><?php echo $_GET['m']; ?></div>
	</form>
</div>	



<style type="text/css">
	html, * {
		font-family:initial;
		    line-height: initial !important;
		    /*-webkit-text-size-adjust: 100%;*/
		}
	input[type="button"] {
	    height: 34px;
	    cursor: pointer;
	    color: white;
	    border-radius: 20px;
	    padding: 10px;
	    border-width: 0px;
	    /* background: blue; */
	    background: rgb(22,65,148);
	    background: linear-gradient(227deg, rgba(22,65,148,1) 35%, rgba(38,96,148,1) 100%);
	}
	input#name {
	    border-radius: 22px;
	    border-width: 2px;
	    border-color: #0c3ea191;
	    padding: 8px;
	}	
	.autor{
		       color: #99999924;
    position: absolute;
	}
	.box{
		    margin: 0 auto;
		    width: fit-content;
		    /* margin-left: 44px; */
		    text-align: center;
	}
	.design {
		    width: max-content;
		    padding: 64px;
		    padding-left: 6px;
	}
	.render.ph{
		font-size: 7em;
	    font-family: 'petroFont','Arial Black';
	    text-transform: uppercase;
	    margin-left: 101px;
	    width: 1000px;
	}
	.render.ml{
		 position: relative;
	    color: #952385;
	    font-size: 6em;
	    font-family: 'petroFont','Arial Black';
	    text-transform: uppercase;
	    top: 197px;
	    margin: -106px auto;
	    width: fit-content;
	}
	.mlt {
	    width: 167px;
	    padding-top: 73px;
	    /*padding-left: 67px;*/
	    display: block;
	    margin: 0 auto;
	}
	.ph {
	    width: 167px;
	    padding-top: 73px;
	    padding-left: 67px;
	    display: block;
	    margin: 0 auto;
	}
	button:hover, button:focus, [type="button"]:hover, [type="button"]:focus, [type="submit"]:hover, [type="submit"]:focus, [type="reset"]:hover, [type="reset"]:focus, a.button:hover, a.button:focus, label.button:hover, label.button:focus, .button:hover, .button:focus, a[role="button"]:hover, a[role="button"]:focus, label[role="button"]:hover, label[role="button"]:focus, [role="button"]:hover, [role="button"]:focus {
		    background: #15427a;
		}
	.letra {
		font-family: 'petroFont','Arial Black';
    	margin-left: -58px;
    	opacity: 0.9;
	}
	.letra_esp{
		margin-left: 43px;
		opacity: 0.9;
	}
	.o{
		    width: 78px;
		    margin-left: -18px;
		    z-index: 1000000000000000;
		    opacity: 0.9;
	}
	.o_d{
	        width: 78px;
		    margin-left: -19px;
		    margin-bottom: 65px;
		    z-index: 1000000000000000;
		    opacity: 0.9;
	}
	.pz{
		    position: relative;
		    top: -143px;
		    margin: 0 auto;
		    color: #ad439e;
		    font-size: 1.2em;
		    padding-left: 75px;
		    /* width: 10px; */
		    font-family: 'petroFont';
	}
	.cv{
		position: relative;
	    top: -143px;
	    letter-spacing: 4px;
	    margin: 0 auto;
	    color: #1c3587;
	    font-size: 1.2em;
	    /* width: 10px; */
	    padding-left: 51px;
	    font-family: system-ui;
	    font-weight: 700;
	}
	.ps{
		position: relative;
	    top: -143px;
	    margin: 0 auto;
	    color: #ad439e;
	    font-size: 1.2em;
	    width: 10px;
	    padding-right: 102px;
	    font-family: 'petroFont';
	}

	@font-face {
	  font-family: 'petroFont';
	  src: url('GothamBold.ttf') format('truetype');
	}
</style>
<script src="jquery.min.js"></script>
<script src="html2canvas.js"></script>



<script type="text/javascript">

	function cambio(){
		var opcion = $('input:radio[name=selectP]:checked').val();
		if(opcion == "ph" || opcion == "ps" || opcion == "cv" || opcion == "pz"){
			$('.ph').show();
			$('.ml').hide();
			$('.ps').show();
			$('.cv').show();
			$('.pz').show();
		}
		if(opcion == "ml"){
			$('.ml').show();
			$('.ph').hide();
			$('.ps').hide();
			$('.cv').hide();
			$('.pz').hide();
		}
		 
	}

	function abrir(nombre){
		var opcion = $('input:radio[name=selectP]:checked').val();
		window.open("?nombre="+nombre+"&op="+opcion,"_self");

	}
	function rev(){
		var opcion = $('input:radio[name=selectP]:checked').val();
		// if(opcion != "ml"){ 
			
		// }
	}
		
rev();
convertir();
cambio();
compilar();
	function downloadimage() {
                /*var container = document.getElementById("image-wrap");*/ /*specific element on page*/
                var container = document.getElementById("design");; /* full page */
                html2canvas(container, { allowTaint: true }).then(function (canvas) {

                    var link = document.createElement("a");
                    document.body.appendChild(link);
                    link.download = $('#name').val() +".jpg";
                    link.href = canvas.toDataURL();
                    link.target = '_blank';
                    link.click();

                });
     }

     function compilar(){
     			 var container = document.getElementById("design");; /* full page */
                html2canvas(container, { allowTaint: true }).then(function (canvas) {

                    var link = document.createElement("a");
                    document.body.appendChild(link);
                    link.download = $('#name').val() +".jpg";
                    link.href = canvas.toDataURL();
                    link.target = '_blank';
                    // link.click();
                     
                    $('.img_nueva').attr('src',link.href);
                    
                });
     }




 

 var textoA;
 function convertir(){
 	// $("#ph").prop("checked", true);
 	var opcion = $('input:radio[name=selectP]:checked').val();
 	var data =  '<?php echo $_GET['nombre']; ?>';

 	if(opcion == "pz")
 	{
 		$('.adicionalText').html("se suma al pacto por la Paz");
 		$('.adicionalText').addClass("pz");

 	}
 	if(opcion == "ps")
 	{
 		$('.adicionalText').html("#PACTOSABROSO");
 		$('.adicionalText').addClass("ps");

 	}
 	if(opcion == "cv")
 	{
 		$('.adicionalText').html("CAMBIO POR LA VIDA");
 		$('.adicionalText').addClass("cv");
 	}
 	if(opcion == "ph" || opcion == "ps" || opcion == "cv" || opcion == "pz"){
			textoA = Array.from(data);
				//amarillo, azul, rojo, verde, fuscia
				coloresE = ['#f7a600','#164194','#e41513','#32a337','#942685'];
				render = "";
				co= 0;
				// EnO = textoA.indexOf("o");
				// console.log("o:::",);
			    textoA.forEach( function(valor, indice, array) {
			      console.log(co + "::" + valor);
			      if(valor == "o" && textoA.length-1 == indice){
			      	render =  render +  "<img class='o' src='o.png'>" ;
			        $('.render').html(render);
			      }
			      else{
			      	if(valor == " "){
			      		render =  render +  "<span class='letra_esp' style='color:"+coloresE[co]+"'> "+valor+"</span>" ;
			      	}
			      	else
			      	{
			      		render =  render +  "<span class='letra' style='color:"+coloresE[co]+"'> "+valor+"</span>" ;
			      	}
			      	
			      	if(textoA.length-1 == indice){
			      	   render =  render +  "<img class='o_d' src='o.png'>" ;	
			      	}
			        $('.render').html(render);
			      }
			      co = control(co);
			  });
 	}

 	if(opcion == "ml")
 	{
 		$('.render').html(data);
 	}
 	
 	
	
	
 }
 
function control(i) { 
	r = i + 1;
	if(i == 4)
	r = 0;
    return r;
} 


	
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1279339354929382"
     crossorigin="anonymous"></script>


<?php 

$nombre = $_GET['nombre'];
$nombreArchivo = "n/nombres.txt";
$opd= $_GET['op'];
$datos= "";
if($nombre != ""){
	$datos = $datos .";".$nombre ."::".$opd;
     file_put_contents($nombreArchivo, $datos, FILE_APPEND);
}

$mensaje = $_GET['mensaje'];
$comentario = $_POST['comentario'];
$nombreArchivos = "n/comentarios.txt";
if($mensaje == "ok")
{
	if($comentario != ""){
	  $datoss = $datoss ."||".$comentario ;
     file_put_contents($nombreArchivos, $datoss, FILE_APPEND);
      echo "<script>window.location.replace('http://".$_SERVER['SERVER_NAME']."?m=Gracias');</script>";
	}
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