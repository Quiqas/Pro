<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "preguntas";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
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
										<div class="dwqa-question-item dwqa-status-answered">
											<header class="dwqa-question-title">
												<a href="https://www.designwall.com/question/dwqa-pro-vs-free/">¿¡Hola Mundo!?</a>
											</header>
											<div class="dwqa-question-meta">
												<span class="label label-primary">Resuelta</span>
												<span>
												<a href="https://www.designwall.com/question/?user=jpregullano">
												<img src="//www.gravatar.com/avatar/22a70068d0fb8e1dec9b7c057cb8fdb1?s=48&#038;r=g&#038;d=mm" class="avatar user-45136-avatar avatar-48 photo" width="48" height="48" alt="Profile photo of jpregullano" />Cristhian</a>
												publicada el 08/05/2018</span>
											</div>
											<div class="dwqa-question-stats">
												<span class="dwqa-views-count">
													<strong>58</strong> Vistas
												</span>
												<span class="dwqa-answers-count">
													<strong>1</strong> Respuestas
												</span>
											</div>
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