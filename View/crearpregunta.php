<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "crear";
	
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
            <div class="box-header with-border">
              <h3 class="box-title">Crear Pregunta</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="Nombre">Nombre del Foro</label>
                  <input class="form-control" required id="Nombre" type="text" placeholder="Introduce el Nombre del Foro">
                </div>
                <div class="form-group">
                  <label for="Categoria">Categoría</label>
                  <input class="form-control" id="Categoria" required type="text" placeholder="Introduce la Categoría de la Pregunta">
                </div>
                <textarea class="ckeditor" required name="editor"></textarea>
              <!-- /.box-body -->

              <div class="box-footer">
                <button class="btn btn-danger" type="submit">Guardar</button>
              </div>
            </form>
          </div>



    </section>
    <!-- /.content -->
  </div>
  

<?php
  include_once('static/Footer.php');
?>