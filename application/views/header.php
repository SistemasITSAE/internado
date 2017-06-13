<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Bienvenido al Sistema Internado ITSAE-CADE</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="#"><a href="#">Registro<span class="sr-only">(current)</span></a></li>
        <!--<li><a href="#">Buscar</a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CADE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Alumnos</a></li>
            <li><a href="#">Registro</a></li>
            <li><a href="#">Descripción</a></li>
            <li role="separator" class="divider"></li>
            <!--<li><a href="#">Mas</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"></a></li>-->
          </ul>
        </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ITSAE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Students</a></li>
            <li><a href="#">Regsitern</a></li>
            <li><a href="#">Descripción</a></li>
            <li role="separator" class="divider"></li>
            <!--
            <li><a href="#">Mas</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"></a></li>-->
          </ul>
        </li>
        <li class="#"><a classs="btn btn-primary btn-lg" href="<?php echo site_url('home/logout'); ?>" role="button">Salir</a></li>
      </ul>
      <!--
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php $fullname ?></a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo site_url('home/logout'); ?>">Salir</a></li>
          </ul>
        </li>-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>