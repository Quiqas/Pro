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
    <section class="content container-fluid container">

      <div class="row box box-danger">
        <div class="col-md-4 col-xs-12 ">
          <h1 >Only Code</h1>
          <h2> ¿Qué es? </h2>
          <p>Estudiante de Ingeniería en Sistemas Computacionales en el Instituto Tecnológico de Ciudad Juárez. Decidí estudiar esta carrera ya me apasiona mucho todo lo que se puede lograr con tan solo escribir unas pequeñas líneas de código. Me gustan los desafíos y constantemente me encuentro aprendiendo algo nuevo que me ayude a mejorar como programador y como persona.</p>
        </div>
        <div class="col-md-offset-1 col-md-7 col-xs-12 MargenTop">
          <img src='<?=$GLOBALS['COD']->dir?>/assets/images/portada.png?<?$elapsed_time?>' alt="Experiencia web" class="img-responsive center-block">
        </div>
      
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  

<?php
	include_once('static/Footer.php');
?>