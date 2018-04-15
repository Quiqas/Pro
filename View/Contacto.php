<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// -------------------------------------------------------------------- 
  $page_title = "Contacto";
  
// --------------------------------------------------------------------
//  Include header
// -------------------------------------------------------------------- 
  include_once('static/Header.php');
?>

<div id="container">

	<section id="form">
		<div class="container Espacio">
			<div class="row">
				<div class="col-xs-12">
					<h3>Contacto</h3>
				</div>
			</div>
			<div class="row letra">
					<div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">(656) 534-97-46</div>
					<div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">albert502@outlook.com</div>
					<div class="col-sm-5 col-md-5 col-lg-5 col-xs-12">Ciudad Juárez, Chihuahua</div>
			</div>
			<hr>
			<div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <p class="message">ENVIAME UN MENSAJE </p>
                </div>
                <div class="col-md-7 col-sm-8 col-xs-12">
                    <form action="https://formspree.io/albert502@outlook.com" method="POST" >
                       
                        <div class="form-group col-md-11 col-xs-12 sinpadding">
                            <input type="text" class="form-control" id="nombre1" placeholder="¿Cómo te llamas?" required name="nombre">
                        </div>
                        <div class="form-group col-md-11 col-xs-12 sinpadding">
                            <input type="email" class="form-control" id="email" placeholder="¿Cuál es tu correo electronico?" name="_replyto" required>
                        </div>
                        <div class="form-group col-md-11 col-xs-12 sinpadding">
                            <input type="text" class="form-control" id="telefono" placeholder="¿Cuál es tu número telefónico?" required name="telefono">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="comentarios" placeholder="¿Cuál es tu inquietud?" rows="8" required name="comentarios"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-default">ENVIAR</button>
                        </div>

                        <input type="hidden" name="_next" value="//site.io/thanks.html" />
                        <input type="hidden" name="_subject" value="New submission!" />
                        <input type="hidden" name="_cc" value="14111367@itcj.edu.mx" />
                        <input type="hidden" name="_format" value="plain" />
                    </form>
                </div>
            </div>
		</div>

	</section>
</div>

<?php
  include_once('static/Footer.php');
?>

	<!-- <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/swiper.min.js"></script>
    Latest compiled and minified JavaScript 
    <script src="js/bootstrap.min.js" ></script>
</body>
</html>-->