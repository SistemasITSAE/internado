      <!--main content start-->
      <?php include 'links.php' ?>
      <?php include 'scripts.php' ?>
      <?php include 'side.php' ?>
      <?php include 'header.php' ?>
      <section id="main-content">
      <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i> Estudiantes</h3>
          <ol class="breadcrumb">
            <li ><i class="fa fa-home"></i><a classs="btn btn-primary btn-lg" href="<?php echo site_url('home/home_view'); ?>" role="button">Inicio</a></li>
            <li><i class="icon_document_alt"></i>Reglamentos</li>
            <li><i class="fa fa-files-o"></i>Datos Personales</li>
          </ol>
        </div>
      </div>
              <!-- Form validations -->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Datos Personales
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="">
                                    
                 
                       <?php 
                      
                        echo form_open('Student/student_view','class="myclass"');
                       ?>
                                      <div class="form-group ">
                                       <label for="cname" class="control-label col-lg-2">Nombres<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <?php 
                      echo form_label('','nombres');
                      echo form_input('nombres','','class="form-control col-lg-2" id="nombres" placeholder="Completo"') 
                      ?>
                                          </div>
                                      </div>
                                    
                                       <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Apellidos<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                               <?php 
                      echo form_label('','apellidos');
                      echo form_input('apellidos','','class="form-control" id="apellidos" placeholder="Completo"') 
                      ?>
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Lugar de Nacimiento<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <?php 
                      echo form_label('','lugar');
                      echo form_input('lugar','','class="form-control" id="lugar" placeholder="Completo"') 
                      ?>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Fecha de Nacimiento<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                               <?php 
                      echo form_label('','fech_nacimiento');
                      echo form_input('fech_nacimiento','','class="form-control" id="fech_nacimiento" placeholder="Completo"') 
                      ?>
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Cedula/Pasaporte<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <?php 
                      echo form_label('','cedula');
                      echo form_input('cedula','','class="form-control" id="cedula" placeholder="Completo"') 
                      ?>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <?php 
                      echo form_label('','email');
                      echo form_input('email','','class="form-control" id="email" placeholder="Completo"') 
                      ?>
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Edad<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <?php 
                      echo form_label('','edad');
                      echo form_input('edad','','class="form-control" id="edad" placeholder="Completo"') 
                      ?>
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Nacionalidad<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <?php 
                      echo form_label('','nacionalidad');
                      echo form_input('nacionalidad','','class="form-control" id="nacionalidad" placeholder="Completo"') 
                      ?>
                                          </div>
                                      </div>
                                       <div class="form-group "> <label for="cname" class="control-label col-lg-2">Celular
                                          <span class="required">*</span></label>
                                           <div class="col-lg-10">
                                          <?php 
                      echo form_label('','celular');
                      echo form_input('celular','','class="form-control" id="celular" placeholder="Completo"') 
                      ?></div>
                                      </div>
                                      <div class="form-group">
                                           <div class="form-group">

                        <?php echo form_submit('guardar', 'guardar', 'class="btn btn-success btn-lg btn-block" width="20px"'); ?>
                    </div>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
           <!--  codigo hay que borrar  submit isset presion by jefferson                   <?php
                                    IF (isset($_POST ['submit'])){
  require('student.php');
}
                                  ?>-->   
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            Datos de Padres
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal " id="register_form" method="get" action="">
                                      <div class="form-group ">
                                          <label for="fullname" class="control-label col-lg-2">Nombres del Padre<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="nombrespadre" name="nombrespadre" type="text" />
                                          </div>
                                      </div>
                                        <div class="form-group ">
                                          <label for="fullname" class="control-label col-lg-2">Estado Civil<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="estadocivil" name="estadocivil" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Address <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="address" name="address" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Username <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="username" name="username" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password" name="password" type="password" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="confirm_password" class="control-label col-lg-2">Confirm Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="confirm_password" name="confirm_password" type="password" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" name="email" type="email" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="agree" class="control-label col-lg-2 col-sm-3">Agree to Our Policy <span class="required">*</span></label>
                                          <div class="col-lg-10 col-sm-9">
                                              <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" />
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
             <?php include 'footer.php' ?>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
        </div>
    </div>
  </section>
