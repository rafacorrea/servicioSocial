<?php header('Content-Type: text/html; charset=utf-8');
//if "email" variable is filled out, send email

  
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "testINEA123@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  $headers = 'From: ' . $admin_email . "\r\n" .
             'Reply-To: ' . $email ."\r\n";
  if(mail($admin_email, "$subject", $comment, $headers)){
  print "Email successful";
  }
  else
  {
  print "ERROR";
  }
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  else  {
?>

<head>
<title>INEA CDMX</title>

<link rel="stylesheet" href="css/estilo.css" type="text/css">

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
  			<h2>Unidad 2</h2>
			<ol><p>Abre la p&aacute;gina de tu buscador (por ejemplo, http://www.google.com).</p>
				<li>Realiza las siguientes b&uacute;squedas y comenta el contenido de alguna p&aacute; que
	hayas encontrado sobre cada tema:<br/><br/>
					<ul><li>fiestas+mexicanas:
					<input name="dato1" type="text" class="text-line" /></li><br />
					<li>"reptiles"-crocodilo:
					<input name="dato2" type="text" class="text-line" /></li><br />
					</ul>
				</li>
				<li>Obt&eacute;n una cuenta de correo electr&oacute;nico (si ya tienes una, saca otra para prac-
ticar). &iquest;Cu&aacute;l es tu direcci&oacute;n de correo electr&oacute;nico?<input name="dato3" type="text" class="text-line" /><br/></li>
				<li>Te parece &uacute;til tener una cuenta de correo electr&oacute;nico?
				<select name="dd1"><option value="Si">S&iacute;</option><option value="No">No</option></select>
				</li>

				<li>
				Si una persona abre una cuenta de correo en M&eacute;xico, ¿podr&aacute; usarla cuando est&eacute; en otro pa&iacute;s?<select name="dd2"><option value="Si">S&iacute;</option><option value="No">No</option></select>
				</li>
				<li>
					Elabora un documento con el procesador de palabras, en el que comentes por qu&eacute; decidiste estudiar este m&oacute;dulo; despu&eacute;s gu&aacute;rdalo en el escritorio con el nombre que quieras.<br/><br/>Pide sus direcciones de correo electrónico a tu asesor y a algún compa&ntilde;ero de la Plaza comunitaria, y env&iacute;ales un correo en el que adjuntarás tu documento del procesador de palabras, marca Copia oculta (cc) para uno de ellos.Envía este correo. <br/><br/>Pide a un compañero o a tu asesor que te envíe un correo con un archivo adjunto. Abre este correo y el archivo correspondiente cuando lo recibas.<br/><br/>Responde las siguientes preguntas. Si tienes dudas, pregúntale a tu asesor o a algún compañero.
					<ul><li>&iquest;De quién es el primer correo que recibiste en tu bandeja de entrada al
sacar tu cuenta?<input name="dato4" type="text" class="text-line" /></li><br />
					<li>Abre tu correo electrónico y observa. &iquest;Dónde puedes verificar los correos que has enviado? <input name="dato5" type="text" class="text-line" /></li>
					<li>Al revisar tu bandeja de entrada, &iquest;cómo sabes si un correo contiene un
archivo adjunto?<input name="dato6" type="text" class="text-line" /></li>
					</ul>
				</li><br/>

				<li>Describe como Agregar un contacto en un programa de chat (como lo es Skype)<br/><textarea name="dato7" rows="15" cols="50"></textarea><br />
				</li><br/>
			
				<li>
					Ingresa a las siguientes p&aacute;ginas:<br/>
					<a href="http://www.chalino.com/foros/" target="_blank" >http://www.chalino.com/foros/</a><br/>
					<a href="http://foros.terra.com.mx" target="_blank" >http://foros.terra.com.mx</a><br/>
					<a href="http://foro.forosmexico.com" target="_blank" >http://foro.forosmexico.com</a><br/>
					<br/>
					&iquest;Qu&eacute; semejanzas y diferencias ves entre las tres p&aacute;ginas?<input name="dato8" type="text" class="text-line" /><br/>
					&iquest;Cu&aacute;l de las tres p&aacute;ginas de foros te gust&oacute; m&aacute;s? &iquest;Por qu&eacute;?<br/><textarea name="dato9" rows="15" cols="50"></textarea><br />
				</li><br/>

				<h2>Unidad 4</h2>

				<li>
					Ingresa a alguna de las siguientes direcciones para ver periodicos en internet:<br/> <a href="http://www.diario.com.mx" target="_blank" >http://www.diario.com.mx</a>, <a href="http://www.cuartopoder.mx/" target="_blank">http://www.cuartopoder.mx/</a>, <a href="http://www.elporvenir.com.mx" target="_blank" >http://www.elporvenir.com.mx</a>, <a href="http://www.elnorte.com" target="_blank" >http://www.elnorte.com</a> y <a href="http://www.jornada.unam.mx" target="_blank" >http://www.jornada.unam.mx</a><br/>.<br/>Resume la noticia que m&aacute;s te intereso:<br/><textarea name="dato10" rows="15" cols="50"></textarea><br />
					&iquest;Ya conoc&iacute;s estas noticias? <select name="dd3"><option value="Si">S&iacute;</option><option value="No">No</option></select>
				</li><br/>
				<li>
					Ingresa a la página de las siguiente revista: <a href="http://revista.dgt.es/es/" target="_blank" >http://www.revista.dgt.es/es/</a><br/>
					&iquest;Cu&aacute;l es el tema de la revista?<input name="dato11" type="text" class="text-line" /><br/>
				</li><br/>
				<li>
					Ingresar a <a href="http://www.aulafacil.com" target="_blank">http://www.aulafacil.com</a> y ver que cursos hay disponibles. &iquest;Cu&aacute;l t&oacute;pico es el que m&aacute;s te interesa?<select name="dd4"><option value="Idiomas">Idiomas</option><option value="Informatica">Inform&aacute;tica</option><option value="Internet">Internet</option><option value="Manualidades">Manualidades</option><option value="Autoayuda">Autoayuda</option><option value="Empresa">Empresa</option><option value="Cocina">Cocina</option><option value="Aficiones">Aficiones</option><option value="Dibujo">Dibujo</option><option value="Otras">Otras</option></select>
				</li><br/>
				<li>
					Ingresar a la p&aacute;gina <a href="https://translate.google.com/?hl=es" target="_blank">https://translate.google.com/?hl=es</a>. Traduce el siguiente texto de espa&ntilde; a ingl&eacute;s:<br/> Las computadoras en la actualidad están casi en todas las oficinas, es común verlas funcionando como máquinas de escribir o como medios para buscar, procesar y analizar información.<br/>
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
