<head>
<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>" media="screen,projection"/>
</head>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="nav navbar-header" id="top_menu">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('home/home_view') ?>">Bienvenido al Sistema Internado ITSAE</a>
    </div>
    <!--  search form start -->
    <div class="nav navbar-left">
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar Alumno">
        </div>
      </form>
    </div>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
         <a data-toggle="dropdown" class="dropdown-toggle" href="#">
             <span class="profile-ava">
                <img alt="" src="<?php echo base_url('/assets/img/.jpg')?>">
             </span>
             <span class="username">Usuario1</span>
             <b class="caret"></b>
         </a>
         <ul class="dropdown-menu extended logout">
             <div class="log-arrow-up"></div>
             <li class="eborder-top">
                 <a href="#"><i class="icon_profile"></i> Mi Perfil</a>
             </li>
             <li>
                 <a href="#"><i class="icon_clock_alt"></i> Ver Usuarios</a>
             </li>
             <li>
                 <a href="<?php echo site_url('home/logout'); ?>"><i class="icon_key_alt"></i> Salir</a>
             </li>
             <li>
                 <a href="documentation.html"><i class=""></i> Observaciones</a>
             </li>
         </ul>
     </li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
