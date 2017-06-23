<header class="header dark-bg">
  <div class="toggle-nav">
    			<div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
  		</div>
			<!--logo start-->
  		<a href="<?php echo site_url('home/home_view') ?>" class="logo"><span class="#">Sistema Internado ITSAE</span></a>
			<!--logo end-->
			<!--  search form start -->
			<div class="nav search-row" id="top-menu">
				<ul class="nav top-menu">
					<li>
						<form class="navbar-form">
				 			<div class="form-group">
				   			<input type="text" class="form-control" placeholder="Buscar Alumno">
				 			</div>
						</form>
					</li>
				</ul>
			</div>
  <!-- user login dropdown start-->
  		<div class="top-nav notification-row">
  			<ul class="nav pull-right top-menu">
      <li class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
          <span class="profile-ava">
            <img alt="" src="<?php echo base_url('/assets/img/avatar-mini2.jpg')?>">
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
     	</li>                    <!-- user login dropdown end -->
</header>
