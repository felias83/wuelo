<!DOCTYPE html>
<html>
<body>
<head>
<link rel="stylesheet" type="text/css" href="animacion.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

		<div id="menu">
	 		<ul>
				
			<!--<li><a href="nosotros.html">Nosotros</a></li>--->			 <li><a href="contacto.php">Contacto</a></li>
			 <li><a href="portafolio.html">Portafolio</a></li>	
			 <li><a href="#">Servicios</a></li>
			 <li class="active"><a href="index.html">Inicio</a></li>
			</ul>  			
		</div>


		<div id="animacion">
			<!--<div id="sol"></div>-->
			<div id="elo">
			<h3>elo</h3>
			</div>
			<!--<div id="digital">
			<h3>Digital</h3>
			</div>-->
			<div id="logo">

				<div id="alas" style="margin:0 auto;">
					<div id="ala_der" > 
					</div>

					<div id="ala_izq" >
					</div>
				</div>

				<div id="cuerpo" style="margin:0 auto;">
					<div id="brazoizq">
					</div>

					<div id="medio" > 
					</div>

					<div id="brazoder" > 
					</div>

				</div>

				<div id="base" >
					<div id="pieder" > 
					</div>

					<div id="pieizq" > 
					</div>
			</div>
			<!--<div id="letra" style="background-image: url(wueloletra.png);width:218px; height:108px;margin-left:270px;margin-top:-80px">
			</div>!-->
		</div>
	</div><!-------------animacion ---->
    <div id="contenido">
	    <div id="servicios">
		<!--<h1 align="center">Servicios</h1>-->
			<div id="PPW">
			   <h2 align="center">Programación Web</h2>
			   <div>
				<p  align="center">Le ponemos ruedas y movimiento a tu diseño listo.</p>
				<p align="center">Sistemas Web. Joomla y Moodle</p>
			   </div>
			   <p align="center"><a href="contacto.php"><button class="boton2">Empieza ya!</button></a></p>
			</div>
	

		       <div id="DPW">
			       <h2 align="center">Diseño Web</h2>
			       <div><p align="center">Diseñamos tu página. Adaptamos tu diseño. 
				    <p  align="center">Trabajamos con Diseños de Wordpress.</p>
			       </div>
			       <p align="center"><a  href="contacto.php"><button class="boton">Empieza ya!</button></a></p>
	     	       </div>
        </div><!---servicios-->

  	<div id="contacto">
	     <h2 align="center" >Contacto</h2>
		 <form method="post" class="contacto" id="fomulario" action="email.php" >

			  
			<div id="datos">

				  <div class="form"  align="left">
					    
					    <label class="texto_form">Nombre</label>
					    <input type="text" class="input_form" pattern="[A-Za-z]{15-50}" name="nombre" required
						   placeholder="Pedro Perez">
				  </div>

				  <div class="form" align="left">
					    <label align="left" class="texto_form">Email</label>
					    <input type="email" class="input_form"  name="email" required
						   placeholder="Introduce tu email ej: juan@gmail.com">
				  </div>

				  <div class="form" align="left">
					    <label align="left"  class="texto_form">Telefono</label>
					    <input type="number" class="input_form" pattern="[0-9]{11}" name="telefono" required>
				  </div>

				  <div class="form" align="left">
					    <label align="left"  class="texto_form">Mensaje</label>
					    <textarea name="mensaje" class="input_form" required placeholder="Mensaje"></textarea>
				  </div>

				  <div  >
				      <!-- <img src="ajax.gif" class="ajaxgif hide" />
				       <div class="msg"></div>-->
				       <button id="boton_envio">Enviar</button>
				<!--class="btn btn-default"-->
				</div>
			</div>
	 
     		</form>



	</div><!---contacto--->

	<!--<div id="Nosotros">
	<p>Somos un equipo de progrmadores y diseñadores </p>	
	</div>-->
	
  </div><!--contenido--->

<footer>

	<div id="pie">

	<h4 align="center" style="padding-top:100px;">Welo. Barquisimeto, Venezuela.</h4>
	</div>
</footer>
</body>


</html><?php
//Importamos las variables del formulario de contacto
@$nombre = addslashes($_POST['nombre']);
@$email = addslashes($_POST['email']);
@$telefono = addslashes($_POST['telefono']);
@$mensaje = addslashes($_POST['mensaje']);
 
//Preparamos el mensaje de contacto
$cabeceras = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$asunto = "Mensaje desde la pagina Web"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "felias83@gmail.com"; //cambiar por tu email
$contenido = "$nombre ha enviado un mensaje desde la web www.welo.com\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
. "Telefono: $telefono\n"
. "Mensaje: $mensaje\n"
. "\n";
 
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {
 
//Si el mensaje se envía muestra una confirmación
die("Gracias por contactarnos, en breve analizaremos su mensaje...");

?><button><a ref="animacionvuelo.html">Vovler</a></button>

<?
}else{
 
//Si el mensaje no se envía muestra el mensaje de error
die("Error: Su información no pudo ser enviada, intente más tarde");
}
?>


