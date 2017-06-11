<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css') ?>"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <title>Registrar</title>
    </head>
    <body>
        <div class="container" style="margin-top: 100px;">
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <div class="panel-title">Bienvenido al registro de Preceptores</div>
                  </div>
                  <div class="panel-body">

                    <?php 
                      if (validation_errors()) {
                        ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong><?php echo validation_errors(); ?></strong>
                        </div>
                       <?php 
                        }
                        echo form_open('login/register','class="myclass"');
                       ?>
                    
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                         <?php 
                      echo form_label('','fullname');
                      echo form_input('fullname','','class="form-control" id="fullname" placeholder="Nombre Completo"') 
                      ?>
                      </div>
                      </div>
                       <div class="form-group">
                        <div class="input-group"> 
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <?php 
                      echo form_label('','username');
                      echo form_input('username','','class="form-control" id="username" placeholder="Username"') 
                      ?>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <?php 
                          echo form_label('','password');
                          echo form_password('password','','class="form-control" id="password" placeholder="Contraseña"');
                         ?>
                      </div>
                    </div>
                    <div class="form-group">
                        <?php echo form_submit('daftar', 'Registrarse', 'class="btn btn-success"'); ?> o si
                    </div>
                    <div class="form-group">
                      <div>
                        Ya tienes una cuenta, ingresa ahora!
                        <a href="<?php echo site_url('login'); ?>" class="btn btn-primary">Ingresar</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-md-4"></div>
          </div>
        </div>
      </div>
      <!--Import jQuery before materialize.js-->
       <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.min.js') ?> "></script>
      <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.min.js') ?> "></script>
    </body>
</html>
        