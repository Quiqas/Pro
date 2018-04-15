<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// -------------------------------------------------------------------- 
  $page_title = "About";
  
// --------------------------------------------------------------------
//  Include header
// -------------------------------------------------------------------- 
  include_once('static/Header.php');
?>

<div id="container">

	<a href="index.html" class="contact button unit Espacio">Ver Proyectos</a>

    <div class="logo Espacio">
          <h1>
            <a class="d-none  d-sm-inline">Cristhian A. Hernández</a> <a class="d-sm-none">Cristhian</a> | <span>Sobre Mí</span>
          </h1>
    </div>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12  photo-wrapper">
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 text-left">
            <div class="about-text">
                <h1>Hola!</h1>
                <h3>Mi nombre es Cristhian.<br> Soy un estudiante de ingeniería en sistemas computacionales en el instituto tecnológico de ciudad Juárez.</h3>

                <p>Me apasiona el diseño y programación de aplicaciones. Me gusta analizar a los usuarios, su comportamiento y sus necesidades en orden de crear la mejor solución posible para cada proyecto.He diseñado varias páginas web haciendo tnato el Front-end como el Back-end y usando bases de datos SQL y NoSQL.</p>

                <p>Cuando no me encuentro diseñando o programando, puedes estar seguro que me encuentro aprendiendo algo nuevo, o estoy leyendo un libro o viendo una pelicula.</p>

                <h5>Si tienes algún proyecto, o solo quieres saludarme enviame un mensaje a <a href="mailto:albert502@outlook.com">albert502@outlook.com</a> ó <a href="Contacto.html">aquí</a> mismo en la página.</h5>

                <p>Pedes conocer más acerca de mi y mi trabajo aquí:</p>
                <ul class="social">
                  <li><a href="" target="_blank">LinkedIn</a></li>
                  <li><a href="" target="_blank">Twitter</a></li>
                  <li><a href="" target="_blank">Instagram</a></li>
                </ul>
            </div>
        </div>
   </div>
      </div>
    </section>
   </div>

<?php
  include_once('static/Footer.php');
?>