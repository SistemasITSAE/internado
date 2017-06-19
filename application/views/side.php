 <head>
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/style2.css'); ?>">
<!--external css-->
<link href="<?php echo base_url('/assets/css/elegant-icons-style.css')?>" rel="stylesheet" />
<link href="<?php echo base_url('/assets/css/font-awesome.min.css')?>" rel="stylesheet" />
<!-- full calendar css-->
<link href="<?php echo base_url('/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')?>" rel="stylesheet" />
<link href="<?php echo base_url('/assets/fullcalendar/fullcalendar/fullcalendar.css')?>" rel="stylesheet" />
<!-- easy pie chart-->
<link href="<?php echo base_url('/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')?>" rel="stylesheet" type=text/css" media="screen"/>
<!-- owl carousel -->
<link rel="stylesheet" href="<?php echo base_url('/assets/css/owl.carousel.css')?>" type="text/css">
<link href="<?php echo base_url('/assets/css/jquery-jvectormap-1.2.2.css')?>" rel="stylesheet">
<!-- Custom styles -->
<link rel="stylesheet" href="<?php echo base_url('/assets/css/fullcalendar.css')?>">
<link href="<?php echo base_url('/assets/css/widgets.css')?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/style-responsive.css')?>" rel="stylesheet" />
<link href="<?php echo base_url('/assets/css/xcharts.min.css')?>" rel=" stylesheet">
<link href="<?php echo base_url('/assets/css/jquery-ui-1.10.4.min.css')?>" rel="stylesheet">
 </head>
 <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" style="display: block;">
                  <li class="">
                      <a class="" href="#">
                          <i class="icon_house_alt"></i>
                          <span>Inicio</span>
                      </a>
                  </li>
				  				<li>
                      <a href="#" data-toggle="collapse" data-target="#demo" class="collapsed">
                          <i class="icon_document_alt"></i>
                          <span>Registro</span>
                      </a>
                      <ul id="demo" class="collapse in">
                          <li><a class="" href="<?php echo site_url('student/student_view'); ?>">Estudiantes</a></li>
                          <li><a class="" href="form_validation.html">Form Validation</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Lavanderia</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>Restaurant</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Garita</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table.html">Basic Table</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
