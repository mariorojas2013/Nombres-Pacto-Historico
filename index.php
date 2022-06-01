 <!-- Global site tag (gtag.js) - Google Analytics -->
<?php 

ini_set('display_errors','Off');

 ?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="Expires" content="0">
 
<meta http-equiv="Last-Modified" content="0">
 
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
 
<meta http-equiv="Pragma" content="no-cache">

<script async src="https://www.googletagmanager.com/gtag/js?id=G-FYSC715PK3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FYSC715PK3');
</script>
<div class="box">
	<a class="social-btn sb-whatsapp mr-2 mb-2" target="_blank" href="https://web.whatsapp.com/send?text=Si desean tener su nombre estilo pactoHistorico ingresa en http://petro.260mb.org/ ">Compartir por Whatsapp</a><br><br>
	<a class="social-btn sb-facebook mr-2 mb-2" target="_blank" href="http://www.facebook.com/sharer.php?s=100&p[url]=http://petro.260mb.org&p[title]=Nomres pactoHistorico&p[summary]=Si desean tener su nombre estilo pactoHistorico  ">Compartir por Facebook</a>
	<br>
	<div class="input">

		<br>
		<input type="text" name="name" id="name" value=""   placeholder="Escribe tu nombre"> 
    <input type="button" value="Enviar" onclick="abrir($('#name').val())"  >
	</div>
	<div class="design" id="design">
		<div class="render">
		 
		</div>
		<img class='ph' src='ph.png'>
		<div class="autor">by MR</div>	
		 	
	</div>
	
	<input type="button" value="descargar" onclick="downloadimage()">
	<br><br>
	<div>Version 0.45</div>
</div>	
 

<style type="text/css">
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
	.render{
		font-size: 7em;
		font-family: 'petroFont','Arial Black';
		text-transform: uppercase;
		margin-left: 129px;
		width: fit-content;
		/*padding-top: 93px;*/
	}
	.ph {
	    width: 167px;
	    padding-top: 73px;
	    padding-left: 67px;
	    display: block;
	    margin: 0 auto;
	}
	.letra {
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
	@font-face {
	  font-family: 'petroFont';
	  src: url('GothamBold.ttf') format('truetype');
	}
</style>
<script src="jquery.min.js"></script>
<script src="html2canvas.js"></script>



<script type="text/javascript">
	function abrir(nombre){
		window.open("?nombre="+nombre,"_self")

	}

convertir();
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
	var data =  '<?php echo $_GET['nombre']; ?>';
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
 
function control(i) { 
	r = i + 1;
	if(i == 4)
	r = 0;
    return r;
} 

	
</script>
<?php 

$nombre = $_GET['nombre'];
$nombreArchivo = "n/nombres.txt";
$datos= "";
if($nombre != ""){
	$datos = $datos .";".$nombre ;
     file_put_contents($nombreArchivo, $datos, FILE_APPEND);
}


 ?>