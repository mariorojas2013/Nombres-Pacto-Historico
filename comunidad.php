 <!-- Global site tag (gtag.js) - Google Analytics -->
<?php 

ini_set('display_errors','Off');

$data = leer_fichero_completo("n/nombres.txt");
$arrayc = explode(";",$data);
$cont = count($arrayc);

 ?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="Expires" content="0">
 <meta charset="utf-8" >
 <title>Crea tu nombre con tematica PACTO HISTORICO</title>
<meta http-equiv="Last-Modified" content="0">
 
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
 
<meta http-equiv="Pragma" content="no-cache">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="mini-default.css">
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FYSC715PK3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FYSC715PK3');
</script>
<div class="box">
	<br>
	<a class="social-btn sb-whatsapp mr-2 mb-2" target="_blank" href="https://web.whatsapp.com/send?text=Si desean tener su nombre estilo pactoHistorico ingresa en http://petro.260mb.org/ "> Compartir  <i  class="fa fa-whatsapp" aria-hidden="true"></i></a><br><br>
	<a class="social-btn sb-facebook mr-2 mb-2" target="_blank" href="http://www.facebook.com/sharer.php?s=100&p[url]=http://petro.260mb.org&p[title]=Nomres pactoHistorico&p[summary]=Si desean tener su nombre estilo pactoHistorico  ">Compartir  <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
	<br>
	<div class="input">

		<br>
		<br>Plantilla:
    <br>

    <input type="radio" name="selectP" onclick="" id="ph" value="ph" <?php echo ($_GET['op']=="ph")?'checked':''; ?> >
    <label for="ph">Pacto historico</label>
    <input type="radio" name="selectP" onclick="" id="ml" value="ml" <?php echo ($_GET['op']=="ml")?'checked':''; ?>>
    <label for="ml">Me llamo</label>
    <br>
		<input type="text" name="name" id="name" value="<?php echo $_GET['nombre']; ?>"   placeholder="Escribe tu nombre"> 
    <input type="button" value="Enviar" onclick="abrir($('#name').val())" style="font-family: monospace;" >
    
   
	</div>
	<div class="design" id="design">
		<div class="render ph">
		 
		</div>
		<div class="render ml mlt">
		 
		</div>
		<div class="bandera">
		 	 <span class="letra" style="color:#E70000"> -</span><span class="letra" style="color:#FF8C00"> -</span><span class="letra" style="color:#FFEF00"> -</span><span class="letra" style="color:#00811F"> -</span><span class="letra" style="color:#3064A9"> -</span><span class="letra" style="color:#87189D"> -</span> 
		</div>
		<!-- <img class='ph' src='ph.png'> -->
		<!-- <img class='ml' src='ml.jpg'> -->
		<div class="autor">by MR</div>	
		 	
	</div>
	
	<input type="button" style="font-family: monospace;" value="Descargar" onclick="downloadimage()">
	<br><br>
	<div style="font-family: monospace;"><?php echo $cont ?> Personas han participado <i class="fa fa-coffee" aria-hidden="true"></i></div>
	<br>
	<br>
	<div style="font-family: monospace;">Version 0.49</div>
	<br>
	<div  style="font-family: monospace; color: #c5c5c5;">	Cualquier inquietud escribanos a comentarios_app@outlook.com</div>
	<br>
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
	.bandera{
		font-size: 7em;
	    font-family: 'Arial Black';
	    text-transform: uppercase;
	    margin-left: 101px;
	    width: 1000px;


	}
	.render.ph{
		font-size: 7em;
	    font-family: 'Arial Black';
	    text-transform: uppercase;
	    margin-left: 101px;
	    width: 1000px;
	}
	.render.ml{
		 position: relative;
	    color: #952385;
	    font-size: 6em;
	    font-family: 'Arial Black';
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
		    font-family: arial black;
    	    margin-left: -40px;
    	/*opacity: 0.9;*/
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
	@font-face {
	  font-family: 
	  src: url('GothamBold.ttf') format('truetype');
	}
</style>
<script src="jquery.min.js"></script>
<script src="html2canvas.js"></script>



<script type="text/javascript">

	function cambio(){
		var opcion = $('input:radio[name=selectP]:checked').val();
		if(opcion == "ph"){
			$('.ph').show();
			$('.ml').hide();
		}
		if(opcion == "ml"){
			$('.ml').show();
			$('.ph').hide();
		}
	}

	function abrir(nombre){
		var opcion = $('input:radio[name=selectP]:checked').val();
		window.open("?nombre="+nombre+"&op="+opcion,"_self")

	}
	function rev(){
		var opcion = $('input:radio[name=selectP]:checked').val();
		if(opcion != "ml"){ 
			$("#ph").prop("checked", true);
		}
	}
		
rev();
convertir();
cambio();
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


 var textoA;
 function convertir(){
 	var opcion = $('input:radio[name=selectP]:checked').val();
 	var data =  '<?php echo $_GET['nombre']; ?>';
 	if(opcion == "ph"){
			textoA = Array.from(data);
				//amarillo, azul, rojo, verde, fuscia
				coloresE = ['#E70000','#FF8C00','#FFEF00','#00811F','#3064A9','#87189D'];
				render = "";
				co= 0;
				// EnO = textoA.indexOf("o");
				// console.log("o:::",);
			    textoA.forEach( function(valor, indice, array) {
			      console.log(co + "::" + valor);
			        
			      	if(valor == " "){
			      		render =  render +  "<span class='letra_esp' style='color:"+coloresE[co]+"'> "+valor+"</span>" ;
			      	}
			      	else
			      	{
			      		render =  render +  "<span class='letra' style='color:"+coloresE[co]+"'> "+valor+"</span>" ;
			      	}
			      	
			      	 
			        $('.render').html(render);

			      
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
	if(i == 5)
	r = 0;
    return r;
} 

	
</script>
<?php 

$nombre = $_GET['nombre'];
$nombreArchivo = "n/nombres.txt";
$opd= $_GET['op'];
$datos= "";
if($nombre != ""){
	$datos = $datos .";".$nombre ."::".$opd;
     file_put_contents($nombreArchivo, $datos, FILE_APPEND);
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