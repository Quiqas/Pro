<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Only Code | <?=ucfirst($page_title)?> </title>

  <link rel="shortcut icon" type="image/x-icon" href="<?=$GLOBALS['COD']->dir?>/assets/images/Icono.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css?<?=$elapsed_time?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/bower_components/font-awesome/css/font-awesome.min.css?<?=$elapsed_time?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/bower_components/Ionicons/css/ionicons.min.css?<?=$elapsed_time?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/dist/css/Custom.min.css?<?=$elapsed_time?>">

  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/dist/css/skins/skin-red.min.css?<?=$elapsed_time?>">

  <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/dist/css/<?=$page_title?>.css?<?=$elapsed_time?>">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

  <!-- Bootstrap core CSS 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom fonts for this template
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">  -->

    <!-- Plugin CSS -->
    <link href="<?=$GLOBALS['COD']->dir?>/assets/magnific-popup/magnific-popup.css?<?=$elapsed_time?>" rel="stylesheet">

    <!-- Custom styles for this template -->
   
</head>


<body class="hold-transition skin-red sidebar-mini ">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?=$GLOBALS['COD']->dir?>/" class="logo">
      <span class="logo-mini"><b>&lt / &gt</b></span>
      <!-- logo for regular state& lt and mobile devices -->
      <span class="logo-lg"><img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/Only.png" class="navbar-brand responsive Logo-Code" alt="User Image"></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a  class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- Menu de Mensajes -->

          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Fin Menu de Mensajes -->

          <!-- Menu Notificaciones -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>

          <!-- Fin Menu Notificacion -->

          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Cristhian A. Hernández M.</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Cristhian A. Hernánde Moreno - Web Developer
                  <small>Miembro desde Abril 2018</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Seguidores</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Articulos</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Amigos</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=$GLOBALS['COD']->dir?>/Perfil/" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=$GLOBALS['COD']->dir?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Cristhian A. Hernández</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Secciones</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?=$GLOBALS['COD']->dir?>/">
          <i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="active"><a href="<?=$GLOBALS['COD']->dir?>/login">
          <i class="fa  fa-user"></i> <span>Login</span></a></li>
        <li><a href="<?=$GLOBALS['COD']->dir?>/registro">
          <i class="fa fa-user-plus"></i> <span>Registro</span></a></li>
           <li><a href="<?=$GLOBALS['COD']->dir?>/registro">
          <i class="fa fa-users"></i> <span>Perfil</span></a></li>
        <li><a href="<?=$GLOBALS['COD']->dir?>/foros">
          <i class="fa fa-list-alt"></i> <span>Foros</span></a></li>
        <li><a href="<?=$GLOBALS['COD']->dir?>/preguntas">
          <i class="fa fa-question-circle"></i> <span>Preguntas</span></a></li>
        <li><a href="<?=$GLOBALS['COD']->dir?>/">
          <i class="fa fa-cogs"></i> <span>Configuración</span></a></li>
        
        <!--
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  

    
