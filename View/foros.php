<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "foros";
	
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

    <div class="box box-danger sombra">
        <div class="box-header with-border text-center blue mb-half">
          <h2>¡Imagina Tu Futuro!</h2>
        </div>
          <div class="col-xs-12 mb-1 text-center"><h5>¿Qué quieres aprender hoy? ¿Cuál es el trabajo de tus sueños?</h5></div>
          <div class="col-xs-12 mb-1 text-center"><h5><strong>Explora nuestros foros...</strong></h5></div>

     <div class="cards-wrapper wrap_left">
      

      <a class="path_card bg-android" href="<?=$GLOBALS['COD']->dir?>/subforos">
        <div class="path_card--description">
            <p class="white mb-0">
              Desarrollo
            </p>
            <p class="white mb-0">
              en Android
            </p>
        </div>
      </a>
        <a class="path_card bg-ios" href="<?=$GLOBALS['COD']->dir?>/subforos">
          <div class="path_card--description">
              <p class="white mb-0">
                Desarrollo
              </p>
              <p class="white mb-0">
                en IOS
              </p>
          </div>
        </a>

        <a class="path_card bg-artificial" href="<?=$GLOBALS['COD']->dir?>/subforos">
          <div class="path_card--description">
              <p class="white mb-0">
                Inteligencia
              </p>
              <p class="white mb-0">
                Artificial
              </p>
          </div>
        </a>

        <a class="path_card bg-marketing" href="<?=$GLOBALS['COD']->dir?>/subforos">
          <div class="path_card--description">
              <p class="white mb-0">
                Marketing
              </p>
          </div>
        </a>

        <a class="path_card bg-web" href="<?=$GLOBALS['COD']->dir?>/subforos" >
          <div class="path_card--description">
              <p class="white mb-0">
                Desarrollo 
              </p>
              <p class="white mb-0">
                Web
              </p>
          </div>
        </a>

        <a class="path_card bg-front" href="<?=$GLOBALS['COD']->dir?>/subforos">
          <div class="path_card--description">
              <p class="white mb-0">
                Diseño
              </p>
              <p class="white mb-0">
                Front End
              </p>
          </div>
        </a>

        <a class="path_card bg-full" href="<?=$GLOBALS['COD']->dir?>/subforos">
          <div class="path_card--description">
              <p class="white mb-0">
                Desarrollo
              </p>
              <p class="white mb-0">
                Full Stack
              </p>
          </div>
        </a>

        <a class="path_card bg-deep" href="<?=$GLOBALS['COD']->dir?>/subforos">
          <div class="path_card--description">
              <p class="white mb-0">
                Deep
              </p>
              <p class="white mb-0">
                Learning
              </p>
          </div>
        </a>

        <a class="path_card bg-robot" href="<?=$GLOBALS['COD']->dir?>/subforos">
          <div class="path_card--description">
              
              <p class="white mb-0">
                Robotica
              </p>
          </div>
        </a>

        <a class="path_card bg-data" href="<?=$GLOBALS['COD']->dir?>/subforos">
          <div class="path_card--description">
              <p class="white mb-0">
                Data
              </p>
              <p class="white mb-0">
                Analysis
              </p>
          </div>
        </a>
        
        <a class="path_card bg-virtual" href="<?=$GLOBALS['COD']->dir?>/subforos">
          <div class="path_card--description">
              <p class="white mb-0">
                Realidad
              </p>
              <p class="white mb-0">
                Virtual
              </p>
          </div>
        </a>

        <a class="path_card bg-design" href="<?=$GLOBALS['COD']->dir?>/subforos">
          <div class="path_card--description">
              
              <p class="white mb-0">
                Diseño
              </p>
          </div>
        </a>

        <a class="path_card bg-machine" href="<?=$GLOBALS['COD']->dir?>/subforos">
          <div class="path_card--description">
              <p class="white mb-0">
                Machine
              </p>
              <p class="white mb-0">
                Learning
              </p>
          </div>
        </a>

        <a class="path_card bg-self" href="<?=$GLOBALS['COD']->dir?>/subforos">
          <div class="path_card--description">
              <p class="white mb-0">
                Carros
              </p>
              <p class="white mb-0">
                Autónomos
              </p>
          </div>
        </a>

        <a class="path_card bg-crear" href="<?=$GLOBALS['COD']->dir?>/crearforo" >
          <div class="path_card--description">
              <p class="white mb-0">
                Crear
              </p>
              <p class="white mb-0">
                Foro
              </p>
          </div>
        </a>

      </div>
    </section>
    <!-- /.content -->
  </div>
  

<?php
  include_once('static/Footer.php');
?>