<!--<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Bienvenido al Sistema Internado ITSAE-CADE</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling --
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

        <li href="#">
        <a href="">        <i class="glyphicon glyphicon-user"></i>
</a>
        </li>

        <li class="#"><a href="#">Registro<span class="sr-only">(current)</span></a></li>
        <!--<li><a href="#">Buscar</a></li>--
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CADE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Alumnos</a></li>
            <li><a href="#">Registro</a></li>
            <li><a href="#">Descripción</a></li>
            <li role="separator" class="divider"></li>
            <!--<li><a href="#">Mas</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"></a></li>--
          </ul>
        </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ITSAE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Students</a></li>
            <li ><a href="<?php echo site_url('home/student_view'); ?>" ></a>Student</li>
            <li><a href="#">Descripción</a></li>
            <li role="separator" class="divider"></li>
            <!--
            <li><a href="#">Mas</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"></a></li>--
          </ul>
        </li>
     
        <li class="#"><a classs="btn btn-primary btn-lg" href="<?php echo site_url('student/student_view'); ?>" role="button">Student</a></li>
        <li class="#"><a classs="btn btn-primary btn-lg" href="<?php echo site_url('home/logout'); ?>" role="button">Salir</a></li>
      </ul>
      <!--
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>--
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
        </li>--
      </ul>
    </div><!-- /.navbar-collapse --
  </div><!-- /.container-fluid --
</nav>-->

      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo"><span class="lite">Bienvenido al Sistema Internado </span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Buscar alumno" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i><!--
                            <span class="badge bg-important">5</span>-->
                        </a>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i><!--
                            <span class="badge bg-important">7</span>-->
                        </a>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
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
                                <a href="documentation.html"><i class="icon_key_alt"></i> Observaciones</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->
