<?php header('Content-Type: text/html; charset=utf-8');

if(!empty($_POST['dd1']))
{
    $dd1 = $_POST['dd1'];
}
else
{
    $dd1.='No respondio';
}

if(!empty($_POST['dd2']))
{
    $dd2 = $_POST['dd2'];
}
else
{
    $dd2.='No respondio';
}

if(!empty($_POST['dd3']))
{
    $dd3 = $_POST['dd3'];
}
else
{
    $dd3.='No respondio';
}

if(!empty($_POST['dd4']))
{
    $dd4 = $_POST['dd4'];
}
else
{
    $dd4.='No respondio';
}

if(!empty($_POST['dd5']))
{
    $dd5 = $_POST['dd5'];
}
else
{
    $dd5.='No respondio';
}

if(!empty($_POST['om1']))
{
    $dd5 = $_POST['om1'];
}
else
{
    $dd5.='No respondio';
}

  if (isset($_REQUEST['nombre']) && isset($_REQUEST['apellidoP']) && isset($_REQUEST['email']) && isset($_REQUEST['apellidoM']) && isset($_REQUEST['zona']) && isset($_REQUEST['to']))  {
 
$dato1 = $_REQUEST['dato1'];
$dato2 = $_REQUEST['dato2'];
$dato3 = $_REQUEST['dato3'];
$dato4 = $_REQUEST['dato4'];
$dato5 = $_REQUEST['dato5'];
$dato6 = $_REQUEST['dato6'];
$dato7 = $_REQUEST['dato7'];
$dato8 = $_REQUEST['dato8'];
$dato9 = $_REQUEST['dato9'];
$dato10 = $_REQUEST['dato10'];
$dato11 = $_REQUEST['dato11'];
$dato12 = $_REQUEST['dato12'];
$dato13 = $_REQUEST['dato13'];
$dato14 = $_REQUEST['dato14'];
$dato15 = $_REQUEST['dato15'];
$dato16 = $_REQUEST['dato16'];
$dato17 = $_REQUEST['dato17'];
$dato18 = $_REQUEST['dato18'];
$dato19 = $_REQUEST['dato19'];
$dato20 = $_REQUEST['dato20'];
$dato21 = $_REQUEST['dato21'];
$dato22 = $_REQUEST['dato22'];
$dato23 = $_REQUEST['dato23'];
$dato24 = $_REQUEST['dato24'];
$dato25 = $_REQUEST['dato25'];
$dato26 = $_REQUEST['dato26'];
$dato27 = $_REQUEST['dato27'];
$dato28 = $_REQUEST['dato28'];
$dato29 = $_REQUEST['dato29'];
$dato30 = $_REQUEST['dato30'];
$dato31 = $_REQUEST['dato31'];
$dato32 = $_REQUEST['dato31'];


$nombre = $_REQUEST['nombre'];
$apellidoP = $_REQUEST['apellidoP'];
$apellidoM = $_REQUEST['apellidoM'];
$email = $_REQUEST['email'];
$zona = $_REQUEST['zona'];
$to = $_REQUEST['to'];

  //informacion
  $admin_email = "testinea123@gmail.com"; //from
  $subject = "Respuesta de $nombre $apellidoP $apellidoM en zona $zona";
  $comment = "1. $dato1\n\n2. $dato2\n\n3. $dato3\n\n4. $dato4\n\n5. $dato5\n\n6. $dato6\n\n7. $dato7\n\n8. $dato8\n\n9. $dato9\n\n10. $dato10\n\n11.1 $dato11\n11.2 $dato12\n\n12. $dato13\n\n13. $dd1\n\n14. $dd2\n\n15.1 $dato14\n15.2 $dato15\n15.3 $dato16\n\n16. $dato17\n\n17.1 $dato18\n17.2 $dato19\n\n18. $dato20\n\n19. $dato21\n\n20. $dato22\n\n21. $dato23\n\n22. $dato24\n\n23. $dato25\n\n24. $dato26\n\n25. $dato27\n\n26. $dato28\n\n27. $dato29\n\n28.1 $dato30\n28.2 $dd3\n\n29. $dato31\n\n30. $dd4\n\n31. $dd5\n";
  
  //enviar correo
  $headers = 'From: ' . $admin_email . "\r\n" .
             'Reply-To: ' . $email ."\r\n";
  if(mail($to, "$subject", $comment, $headers)){
  print "Se envio exitosamente el correo.<br/>";
  }
  else
  {
  print "ERROR\n";
  }
  
  }
  
  else  {
?>

<head>
<title>INEA CDMX</title>

<link rel="stylesheet" href="../css/estilo.css" type="text/css">

</head>

<body>
    <div id="cuerpo_principal">
        <div id="encabezado"></div>
        
        
        
        
        
        <body2>

            <div class="menu_principal">
              <div class="centrado">
                <ul>
                  <li><a href="../index.html"><span class="letra_menu">Inicio</span></a>
                   <!-- <ul>
                      <li class="letra_menu"><a href="inicio.php">Inicio Plazas Comunitarias</a></li>
                      <li class="letra_menu"><a href="http://df.inea.gob.mx/">Inicio Inea DF</a></li>                                      
                    </ul>-->
                  </li>
                  <li><a href="../index.html"><span class="letra_menu">Unidades</span></a>
	            <ul>
                    <li><a href="unidad1.html"><span class="letra_menu">Unidad1</span></a></li>
                  <li><a href="unidad2.html"><span class="letra_menu">Unidad2</span></a></li>
            	    <li><a href="unidad3.html"><span class="letra_menu">Unidad3</span></a></li>
                  <li><a href="unidad4.html"><span class="letra_menu">Unidad4</span></a></li>                                     
                            <li><a href="mail.php"><span class="letra_menu">Cuestionario</span></a></li>
                    </ul>
	          </li>

                  <li><a href="http://cdmx.inea.gob.mx/portal_plazas/ClasificacionPlazas.php"><span class="letra_menu">Clasificaci&oacute;n</span></a>
                    <ul>
                      <li class="letra_menu"><a href="http://cdmx.inea.gob.mx/portal_plazas/ClasificacionPlazas.php">Clasificaci&oacute;n Plazas Comunitarias</a></li>
                      <li class="letra_menu"><a href="http://cdmx.inea.gob.mx/portal_plazas/PlazaInstitucional.php">Plaza Institucional</a></li>
                      <li class="letra_menu"><a href="http://cdmx.inea.gob.mx/portal_plazas/PlazaColaboracion.php">Plaza de Colaboraci&oacute;n</a></li>
                      <li class="letra_menu"><a href="http://cdmx.inea.gob.mx/portal_plazas/pcDesarrolloyMovil.php">Plaza de Desarrollo y M&oacute;vil</a></li>                                                
                    </ul>
                  </li>
                  <li><a href="http://cdmx.inea.gob.mx/portal_plazas/EspecificacionesInstReuPlazas.php"><span class="letra_menu">Especificaciones</span></a>
                    <ul>
                      <li class="letra_menu"><a href="http://cdmx.inea.gob.mx/portal_plazas/EspecificacionesInstReuPlazas.php">Especific. Instal. Reubica. Plazas</a></li>                                          
                    </ul>
                  </li>
                  <li><a href="http://cdmx.inea.gob.mx/portal_plazas/Utilerias.php"><span class="letra_menu">Utilerias</span></a></li>
                  <li><a href="http://cdmx.inea.gob.mx/portal_plazas/Procedimientos.php"><span class="letra_menu">Procedimientos</span></a></li>      
	          	  </ul>
              </div>
            </div>
          </body2>
  
  
  
        <div id="cuerpo">
            <h1> Cuestionario </h1>
      	    
            <form method="post">

			<h2>Informaci&oacute;n</h2>
				<p>
				Correo de coordinador<input name="to" type="text" class="text-line" /></li><br />
				Nombre<input name="nombre" type="text" class="text-line" /></li><br />
				Apellido Paterno<input name="apellidoP" type="text" class="text-line" /></li><br />
				Apellido Materno<input name="apellidoM" type="text" class="text-line" /></li><br />
				RFC <input name="rfc" type="text" class="text-line" /></li><br />
				Correo electr&oacute;nico <input name="email" type="text" class="text-line" /></li><br />
				Coordinacion Zona <select name="zona"><option value="Alvaro Obregon Norte">Alvaro Obreg&oacute;n Norte</option><option value="Azcapotzalco">Azcapotzalco</option><option value="Benito Juarez">Benito Ju&aacute;rez</option>
				<option value="Coyoacan">Coyoacan</option>
				<option value="Cuajimalpa">Cuajimalpa</option>
				<option value="Cuauhtemoc">Cuauhtemoc</option>
				<option value="Gustavo A. Madero Oriente">Gustavo A. Madero Oriente</option>
				<option value="Iztacalco">Iztacalco</option>
				<option value="Iztapalapa Centro">Iztapalapa Centro</option>
				<option value="Magdalena Contreras">Magdalena Contreras</option>
				<option value="Milpa Alta">Milpa Alta</option>
				<option value="Tlahuac">Tlahuac</option>
				<option value="Tlalpan">Tlalpan</option>
				<option value="Venustiano Carranza">Venustiano Carranza</option>
				<option value="Xochimilco">Xochimilco</option>
				<option value="Gustavo A. Madero Poniente">Gustavo A. Madero Poniente</option>
				<option value="Iztapalapa Poniente">Iztapalapa Poniente</option>
				<option value="Alvaro Obregon Sur">&Aacute;lvaro Obreg&oacute;n Sur</option>
				<option value="Gustavo A. Madero Centro">Gustavo A. Madero Centro</option>
				<option value="Iztapalapa Oriente">Iztapalapa Oriente</option>
				</select></p>
			<h2>Unidad 1</h2>
			<ol><p>
			<li>&iquest;Qu&eacute; es internet?<input name="dato1" type="text" class="text-line" /></li><br />
			<li>&iquest;Alguna vez lo has utilizado?&iquest;Para qu&eacute;?<input name="dato2" type="text" class="text-line" /></li><br />
			<li>&iquest;Qu&eacute; navegador has utilizado?<input name="dato3" type="text" class="text-line" /></li><br />
			<li>Investiga cual es la temperatura m&iacute;nima y m&aacute;xima del estado en el que vives. <input name="dato4" type="text" class="text-line" /></li><br />
			<li>&iquest;C&oacute;mo identificas un v&iacute;nculo de un portal?<input name="dato5" type="text" class="text-line" /></li><br />
			<li>&iquest;De qu&eacute; otras formas se les conoce a los v&iacute;nculos?<input name="dato6" type="text" class="text-line" /></li><br />
			<li>&iquest;Qu&eacute; sitio de internet de los que has visitado, es el que m&aacute;s te ha gustado?<input name="dato7" type="text" class="text-line" /></li><br />
			<li>&iquest;Qu&eacute; es lo que mejor aprendiste de la unidad1?<input name="dato8" type="text" class="text-line" /></li><br />
			<li>&iquest;Qu&eacute; es lo m&aacute;s se te dificulto de la unidad 1?<input name="dato9" type="text" class="text-line" /></li><br />
			<li>&iquest;Qu&eacute; crees que le hace falta a la unidad 1?<input name="dato10" type="text" class="text-line" /></li><br />
			
  			<h2>Unidad 2</h2>
				<li>Para realizar búsquedas en internet, se utilizan <input name="dato11" type="text" class="text-line" />, es decir, programas especializados que por medio de palabras clave muestran la información que encuentran sobre cada tema.</li><br />
				<li>Realiza las siguientes b&uacute;squedas y comenta el contenido de alguna p&aacute;gina que
	hayas encontrado sobre cada tema:<br/><br/>
					<ul><li>fiestas+mexicanas:
					<input name="dato11" type="text" class="text-line" /></li><br />
					<li>"reptiles"-crocodilo:
					<input name="dato12" type="text" class="text-line" /></li><br />
					</ul>
				</li>
				<li>Obt&eacute;n una cuenta de correo electr&oacute;nico (si ya tienes una, saca otra para practicar). &iquest;Cu&aacute;l es tu direcci&oacute;n de correo electr&oacute;nico?<input name="dato13" type="text" class="text-line" /><br/></li>
				<li>Te parece &uacute;til tener una cuenta de correo electr&oacute;nico?
				<select name="dd1"><option value="Si">S&iacute;</option><option value="No">No</option></select>
				</li>

				<li>  
					&iquest;Cu&aacute;l de los siguientes es correcto? <br />
					<input type="radio" name="om1" value="pmario@hotmail.com">pmario-hotmail.com<br>
					<input type="radio" name="om1" value="pmario@hotmail.com">pmario@hotmail.com<br>
					<input type="radio" name="om1" value="pmario@hotmail.com">pmario.hotmail.com<br>
					<input type="radio" name="om1" value="pmario@hotmail.com">pmario@hotmail<br>
				</li>

				<li>
				Si una persona abre una cuenta de correo en M&eacute;xico, &iquest;podr&aacute; usarla cuando est&eacute; en otro pa&iacute;s?<select name="dd2"><option value="Si">S&iacute;</option><option value="No">No</option></select>
				</li>
				<li>
					Elabora un documento con el procesador de palabras, en el que comentes por qu&eacute; decidiste estudiar este m&oacute;dulo; despu&eacute;s gu&aacute;rdalo en el escritorio con el nombre que quieras.<br/><br/>Pide sus direcciones de correo electr&oacute;nico a tu asesor y a alg&uacute;n compa&ntilde;ero de la Plaza comunitaria, y env&iacute;ales un correo en el que adjuntar&aacute;s tu documento del procesador de palabras, marca Copia oculta (cc) para uno de ellos.Env&iacute;a este correo. <br/><br/>Pide a un compa&ntilde;ero o a tu asesor que te env&iacute;e un correo con un archivo adjunto. Abre este correo y el archivo correspondiente cuando lo recibas.<br/><br/>Responde las siguientes preguntas. Si tienes dudas, preg&uacute;ntale a tu asesor o a alg&uacute;n compa&ntilde;ero.
					<ul><li>&iquest;De qui&eacute;n es el primer correo que recibiste en tu bandeja de entrada al
sacar tu cuenta?<input name="dato14" type="text" class="text-line" /></li><br />
					<li>Abre tu correo electr&oacute;nico y observa. &iquest;D&oacute;nde puedes verificar los correos que has enviado? <input name="dato15" type="text" class="text-line" /></li>
					<li>Al revisar tu bandeja de entrada, &iquest;c&oacute;mo sabes si un correo contiene un
archivo adjunto?<input name="dato16" type="text" class="text-line" /></li>
					</ul>
				</li><br/>

				<li>Describe como Agregar un contacto en un programa de chat (como lo es Skype)<br/><textarea name="dato17" rows="15" cols="50"></textarea><br />
				</li><br/>
			
				<li>
					Ingresa a las siguientes p&aacute;ginas:<br/>
					<a href="http://www.chalino.com/foros/" target="_blank" >http://www.chalino.com/foros/</a><br/>
					<a href="http://foros.terra.com.mx" target="_blank" >http://foros.terra.com.mx</a><br/>
					<a href="http://foro.forosmexico.com" target="_blank" >http://foro.forosmexico.com</a><br/>
					<br/>
					&iquest;Qu&eacute; semejanzas y diferencias ves entre las tres p&aacute;ginas?<input name="dato18" type="text" class="text-line" /><br/>
					&iquest;Cu&aacute;l de las tres p&aacute;ginas de foros te gust&oacute; m&aacute;s? &iquest;Por qu&eacute;?<br/><textarea name="dato19" rows="15" cols="50"></textarea><br />
				</li><br/>

				<h2>Unidad 3</h2>
				<li>&iquest;Cu&aacute;l es el significado de las siglas html?<input name="dato20" type="text" class="text-line" /></li><br />
				<li>&iquest;Para que se utilizan los archivos html?<input name="dato21" type="text" class="text-line" /></li><br />
				<li>&iquest;Qu&eacute; tipo de datos se pueden almacenar en el formato zip?<input name="dato22" type="text" class="text-line" /></li><br />
				<li>&iquest;Qu&eacute; programa se necesita para abrir un pdf?<input name="dato23" type="text" class="text-line" /></li><br />
				<li>&iquest;Qu&eacute; tipos de archivos hay para las im&aacute;genes?<input name="dato24" type="text" class="text-line" /></li><br />
				<li>&iquest;Tienes antivirus en tu computadora? (en caso de SI) &iquest;Cu&aacute;l es el nombre del antivirus que tienes?<input name="dato25" type="text" class="text-line" /></li><br />
				<li>Si vas a utilizar un CD o memoria usb, &iquest;qu&eacute; se recomienda que hagas antes de abrir un archivo?<input name="dato26" type="text" class="text-line" /></li><br />
				<li>Explica el procedimiento para enviar en un correo electr&oacute;nico un archivo adjunto con una imagen que has bajado de internet.<br/><textarea name="dato27" rows="15" cols="50"></textarea></li><br />
				<li>&iquest;Qu&eacute; aprendiste de la unidad 3?<br/><textarea name="dato28" rows="15" cols="50"></textarea></li><br />
				<li>&iquest;Qu&eacute; te resulto f&aacute;cil de la unidad 3?<input name="dato29" type="text" class="text-line" /></li><br />
				
				<h2>Unidad 4</h2>

				<li>
					Ingresa a alguna de las siguientes direcciones para ver periodicos en internet:<br/> <a href="http://www.diario.com.mx" target="_blank" >http://www.diario.com.mx</a>, <a href="http://www.cuartopoder.mx/" target="_blank">http://www.cuartopoder.mx/</a>, <a href="http://www.elporvenir.com.mx" target="_blank" >http://www.elporvenir.com.mx</a>, <a href="http://www.elnorte.com" target="_blank" >http://www.elnorte.com</a> y <a href="http://www.jornada.unam.mx" target="_blank" >http://www.jornada.unam.mx</a><br/>.<br/>Resume la noticia que m&aacute;s te intereso:<br/><textarea name="dato30" rows="15" cols="50"></textarea><br />
					&iquest;Ya conoc&iacute;as estas noticias? <select name="dd3"><option value="Si">S&iacute;</option><option value="No">No</option></select>
				</li><br/>
				<li>
					Ingresa a la p&aacute;gina de las siguiente revista: <a href="http://revista.dgt.es/es/" target="_blank" >http://www.revista.dgt.es/es/</a><br/>
					&iquest;Cu&aacute;l es el tema de la revista?<input name="dato31" type="text" class="text-line" /><br/>
				</li><br/>
				<li>
					Ingresar a <a href="http://www.aulafacil.com" target="_blank">http://www.aulafacil.com</a> y ver que cursos hay disponibles. &iquest;Cu&aacute;l t&oacute;pico es el que m&aacute;s te interesa?<select name="dd4"><option value="Idiomas">Idiomas</option><option value="Informatica">Inform&aacute;tica</option><option value="Internet">Internet</option><option value="Manualidades">Manualidades</option><option value="Autoayuda">Autoayuda</option><option value="Empresa">Empresa</option><option value="Cocina">Cocina</option><option value="Aficiones">Aficiones</option><option value="Dibujo">Dibujo</option><option value="Otras">Otras</option></select>
				</li><br/>
				<li>
					Ingresar a la p&aacute;gina <a href="https://translate.google.com/?hl=es" target="_blank">https://translate.google.com/?hl=es</a>. Traduce el siguiente texto de espa&ntilde; a ingl&eacute;s:<br/> Las computadoras en la actualidad est&aacute;n casi en todas las oficinas, es com&uacute;n verlas funcionando como m&aacute;quinas de escribir o como medios para buscar, procesar y analizar informaci&oacute;n.<br/>
					Observa y compara las palabras, esto te ayudar&aacute; a aprender frases en otros idiomas. &iquest;Aprendiste alguna frase? <select name="dd5"><option value="Si">S&iacute;</option><option value="No">No</option></select><br/>
			</ol>
			
			
                	<input type="submit" value="Submit" />
            </form>
        </div>
	
    </div>
    <div id = "pie">
</body>
<?php
  }
?>
