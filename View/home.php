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
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    

      <!-- <div class="row box box-danger sombra">
        <div class="col-md-4 col-xs-12 ">
          <h1 >Only Code</h1>
          <hr>
          <h2> ¿Qué es? </h2>
          <p>Estudiante de Ingeniería en Sistemas Computacionales en el Instituto Tecnológico de Ciudad Juárez. Decidí estudiar esta carrera ya me apasiona mucho todo lo que se puede lograr con tan solo escribir unas pequeñas líneas de código. Me gustan los desafíos y constantemente me encuentro aprendiendo algo nuevo que me ayude a mejorar como programador y como persona.</p>
        </div>
        <div class="col-md-offset-1 col-md-7 col-xs-12 MargenTop">
          <img src='<?=$GLOBALS['COD']->dir?>/assets/images/portada.png?<?$elapsed_time?>' alt="Experiencia web" class="img-responsive center-block">
        </div>
      
      </div>
      <!-- /.row -->

      <!-- Main jumbotron for a primary marketing message or call to action -->
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


    <!-- /.content -->
  </div>
  

<?php
	include_once('static/Footer.php');
?>