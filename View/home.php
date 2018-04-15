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

<div id="container">

    <section>
        <div class="Inicio">
            <div class="container  Espacio">
                <div class="row">
                   <div class="col-sm-4 clearfix left">
                        <div class="left">
                            <img src='<?=$GLOBALS['COD']->dir?>/assets/images/Code.png?<?$elapsed_time?>' class="img-responsive pequeña" alt="Imagen Codigo">
                        </div>
                        <h2>
                            <p><a href="#Contacto" data-ancla="Contacto"><strong>Código</strong></a>
                               Soluciones simples para todo tipo de problemas, con un código impecable y bien origanizado.
                        </p>
                        </h2>
                   </div>
                   <div class="col-sm-4 clearfix left">
                        <div class="left">
                            <img src='<?=$GLOBALS['COD']->dir?>/assets/images/design.png?<?$elapsed_time?>' class="img-responsive pequeña" alt="Imagen Diseño">
                        </div>
                        <h2>
                            <p><strong>Diseño</strong>
                                Diseños atractivos y amigables para los usuarios tanto para páginas web como para celulares. 
                            </p>
                        </h2>
                   </div>
                   <div class="col-sm-4 clearfix left">
                        <div class="left">
                            <img src='<?=$GLOBALS['COD']->dir?>/assets/images/deliver.png?<?$elapsed_time?>' class="img-responsive pequeña" alt="Imagen Entrego">
                        </div>
                        <h2>
                            <p><strong>Entrega</strong>
                                Los proyectos se entregan en tiempo y forma.
                            </p>
                        </h2>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </section>

    <section id="nombre">
            <div class="container cont">
                <div class="row Espacio trans">
                    <div class="col-sm-8 col-xs-12 ">
                        <h1 >Cristhian Alberto Hernández Moreno</h1>
                      <p> ¿Quién Soy? </p>
                      <p>Estudiante de Ingeniería en Sistemas Computacionales en el Instituto Tecnológico de Ciudad Juárez. Decidí estudiar esta carrera ya me apasiona mucho todo lo que se puede lograr con tan solo escribir unas pequeñas líneas de código. Me gustan los desafíos y constantemente me encuentro aprendiendo algo nuevo que me ayude a mejorar como programador y como persona.</p>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src='<?=$GLOBALS['COD']->dir?>/assets/images/Web.png?<?$elapsed_time?>' alt="Experiencia web" class="img-responsive center-block"></div>
                </div>
        </div>

    </section>

    <section id="Contacto">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Contáctame</h3>
                    <p>No seas Tímido</p>
                    <p>Puedes enviarme un <a href="mailto:albert502@outlook.com"> Email </a> ó llenar el <a href="Contacto.html">formulario</a> de la página.</p>
                    <p>Tambien puedes ver mi <a href="">curriculum </a> para saber más acerca de mi experiencia y educación.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
	include_once('static/Footer.php');
?>