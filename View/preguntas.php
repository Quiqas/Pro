<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "preguntas";
	
// --------------------------------------------------------------------
//  Include header    substr($Subforos['Descripcion'],0,65)
// --------------------------------------------------------------------	
	include_once('static/Header.php');
	include_once 'static/connection.php';


    $sql = "SELECT * FROM question";
    
      $result = mysqli_query($sql);
      $resultcheck = mysqli_num_rows($result);

     

    
?>

<div class="content-wrapper">	
	<div id="content" class="site-content MargenTop">
		<div class="container  box box-danger preguntas">
			<header class="page-header">
				<h1 class="page-title">Aprende, Comparte y Construye</h1>						
					<div class="page-description">
						<p>Only Code esta pensada para programadores para ayudarlos a solucionar código, desarrollar nuevas habilidades y compartir conocimiento.</p>
					</div>
			</header>
			<div class="row row-eq-height">
				<div class="primary-wrap col-md-8">
					<div id="primary" class="content-area">
						<div class="page-content">
							<div class="dwqa-container" >
								<div class="dwqa-questions-archive">
									<form id="dwqa-search" class="dwqa-search">
										<input data-nonce="cca955ae62" type="text" placeholder="¿Qué estas buscando?" name="qs" value="">
									</form>
									<div class="dwqa-question-filter">
										<span>Filtro:</span>
										<a href="/question/?qs&#038;filter=all" class="active">All</a>
										<a href="/question/?qs&#038;filter=open" class="">Open</a>
										<a href="/question/?qs&#038;filter=resolved" class="">Resueltas</a>
										<a href="/question/?qs&#038;filter=closed" class="">Cerradas</a>
										<a href="/question/?qs&#038;filter=unanswered" class="">Sin Responder</a>
									</div>
									<div class="dwqa-questions-list">
									<!-- Estructura Pregunta -->
										<div class="box box-danger">
		            						<div class="box-header with-border">
		              								<h3 class="box-title">Preguntas Recientes...</h3>
													
		            						</div>
								            <!-- /.box-header -->
								            <div class="box-body">
								              <ul class="products-list product-list-in-box">
								                <?php while ($row = mysqli_fetch_assoc($result)){ ?>
								                 <!-- /.item -->
								                <li class="item">
								                  <div class="product-img">
								                    <img alt="Product Image" src="<?=$GLOBALS['COD']->dir?>/assets/images/photo1.png">
								                  </div>
								                  <div class="product-info">
								                    <a class="product-title" href="javascript:void(0)"><?=$row['question_title'];?>
								                      <span class="label label-success pull-right"><?=$row['question_status'];?></span></a>
								                    <span class="product-description">
								                          <?=substr($row['question_description'],0,65);?>
								                        </span>
								                  </div>
								                </li>
								                <?php } ?>
								                <!-- /.item -->
								                <!-- /.item -->
								              </ul>
								            </div>
								            <!-- /.box-body -->
								          
								            <!-- /.box-footer -->
								          </div>
									<!-- Fin Pregunta -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="secondary-wrap col-md-4">
					<div id="secondary" class="widget-area" role="complementary">
						<aside id="text-20" class="widget widget_text">			
							<div class="textwidget">
								<a href="<?=$GLOBALS['COD']->dir?>/crearpregunta" class="btn btn-success btn-block btn-lg">Has una Pregunta</a>
							</div>
						</aside>
						<aside id="dwqa-categories-3" class="widget widget_categories dwqa_widget dwqa_widget_categories">
							<h3 class="widget-title">Categorias</h3>
								<ul>
									<li class="cat-item cat-item-214">
										<a href="https://www.designwall.com/question/category/anything-wordpress/" title="Anything WordPress">Cualquier Cosa</a>&#32;<span class="badge">&#40;159&#41;</span>
									</li>
									<li class="cat-item cat-item-79">
										<a href="https://www.designwall.com/question/category/general-question/" title="General Question">Preguntas Generales</a>&#32;<span class="badge">&#40;1650&#41;</span>
									</li>
									<li class="cat-item cat-item-80">
										<a href="https://www.designwall.com/question/category/pre-sale-question/" title="Pre-Sale Question">Peliculas</a>&#32;<span class="badge">&#40;162&#41;</span></li>
									<li class="cat-item cat-item-141">
										<a href="https://www.designwall.com/question/category/technical-question/" title="Technical Question">Preguntas Técnicas</a>&#32;<span class="badge">&#40;3710&#41;</span>
									</li>
								</ul>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
	include_once('static/Footer.php');
?>