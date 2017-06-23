<!--sidebar start-->
<aside>
  <div id="sidebar"  class="nav-collapse ">
 	<!-- sidebar menu start-->
  	<ul class="sidebar-menu">
      <li class="">
        <a class="" href="<?php echo site_url('home/home_view')?>">
          <i class="icon_house_alt"></i>
          <span>Inicio</span>
        </a>
      </li>
			<li class="sub-menu">
        <a href="javascript:;" data-toggle="collapse" data-target="#demo" class="collapsed">
          <i class="icon_document_alt"></i><span>Registro</span>
        </a>
        <ul id="demo" class="collapse">
          <li><a class="" href="<?php echo site_url('student/student_view'); ?>"><i class="fa fa-users"></i>Estudiantes</a></li>
          <li><a class="" href="form_validation.html">Preceptores</a></li>
        </ul>
      </li>
      <li>
      	<a href="#" data-toggle="collapse" data-target="#demo1" class="collapsed">
        	<i class="icon_document_alt"></i>
          <span>Horario de Cultos</span>
      	</a>
                      <ul id="demo1" class="collapse">
                          <li><a class="" href="<?php echo site_url('student/student_view'); ?>">Mañana</a></li>
                          <li><a class="" href="form_validation.html">Tarde</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="#">
                          <i class="icon_genius"></i>
                          <span>Lavanderia</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="#">
                          <i class="icon_piechart"></i>
                          <span>Restaurant</span>
                      </a>
                  </li>

				  				<li>
                      <a href="#" data-toggle="collapse" data-target="#demo2" class="collapsed">
                          <i class="icon_document_alt"></i>
                          <span>Garita</span>
                      </a>
                      <ul id="demo2" class="collapse">
                          <li><a class="" href="<?php echo site_url('student/student_view'); ?>">Permisos</a></li>
                          <li><a class="" href="form_validation.html">Entradas</a></li>
                      </ul>
                  </li>
    </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
