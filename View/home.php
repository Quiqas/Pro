<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "home";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto ">
        <div class="row MargenTop">
          <div class="col-lg-12 mx-auto ">
            <div class="login-logo">
              <a href="<?=$GLOBALS['COD']->dir?>/"><img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/Only.png" class=" responsive Logo-Code-Main" alt="Logo Only Code"></a>
            </div>
            <h1 >
              "La <span class="sp-1">Mejor</span> Manera de Predecir el Futuro es <span class="sp-2">Inventarlo</span>"
            </h1>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto">
            <p class="text-faded mb-5">Aprendizaje Ilimitado, Posibilidades Ilimitadas</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Saber Más</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary section1" id="about">
      <div class="container ">
        <div class="row">
          <div class="col-lg-8 auto-center text-center">
            <h2 class="section-heading text-white"><span class="sp-3">¡Libera</span> tus Habilidades en <span class="sp-4">Programación!</span></h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Sin importar si apenas estas escribiendo tus primeras lineas de código ó por terminar tu carrera, con nosotros podrás mantenerte informado y continuar mejorando.</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="section1 Blanco">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">¡A Tu Servicio!</h2>
            <hr class="my-4 hr1">
          </div>
        </div>
      </div>
      <br><br><br>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">¡Sigue Mejorando!</h3>
              <p class="text-muted mb-0">No te quedes solo con lo que sabes, aprende más en nuestros foros.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Maximiza tu Impacto</h3>
              <p class="text-muted mb-0">Crea el futuro que quieres en cualquier área.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Up to Date</h3>
              <p class="text-muted mb-0">Nos actualizamos constantemente para mantener las cosas frescas.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Hecho con Amor</h3>
              <p class="text-muted mb-0">¡Siempre tienes que programar con amor!</p>
            </div>
          </div>
        </div>
      </div>
    </section>


  <section id="contact" class="section1 Blanco">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <h2 class="section-heading">¡Mantengámonos en contacto!</h2>
            <hr class="my-4 hr1">
            <p class="mb-5">
            ¿Tienes alguna inquietud? ¡Mandanos un email y nosotros te responderemos tan pronto nos sea posible!</p>
          </div>
        </div>
      <br><br>
        

        <div class="box box-danger sombra">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Only Code - Email</h3>
              <!-- tools box -->
             
              <!-- /. tools -->
            </div>
            <div class="box-body">
               <form action="https://formspree.io/albert502@outlook.com" method="POST" >
                <div class="form-group">
                   <input type="text" class="form-control" id="nombre" placeholder="¿Cómo te llamas?" required name="Nombre">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="¿Cuál es tu correo electrónico?" name="_replyto" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="Telefono" placeholder="¿Cuál es tu número telefónico?"  name="Telefono">
                </div>  
                <div class="form-group">
                  <input type="text" class="form-control" name="_subject" placeholder="Tema">
                </div>
                <div>


                  <textarea class="textarea" placeholder="¿Cuál es tu inquietud?"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required name="Inquietud"></textarea>
                </div>

                <div class="box-footer clearfix">
                    <button type="submit" class="pull-right btn btn-default" id="sendEmail" >Enviar
                      <i class="fa fa-arrow-circle-right"></i></button>
                  </div>
                
              </form>
              </div>
            </div>
            
      </div>
    </section>

    <!-- /.content -->
  </div>
  

<?php
	include_once('static/Footer.php');
?>