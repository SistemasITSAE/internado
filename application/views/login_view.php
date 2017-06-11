  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
    </head>
    <body>
        <div class="container" style="margin-top: 100px;">
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                      <div class="panel-title">Bienvenido al Sistema Internado ITSAE</div>
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
                        echo form_open('login','class="myclass"');
                       ?>
                    
                    <div style="margin-bottom:" class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                           <i class="glyphicon glyphicon-user"></i></span>
                            <?php 
                            echo form_label('','username');
                            echo form_input('username','','     class="form-control" id="username"     placeholder="Nombre de usuario"') 
                            ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <?php 
                          echo form_label('','password');
                          echo form_password('password','','class="form-control" id="password"
                            placeholder="Contraseña"');
                         ?>
                      </div>
                    </div>
                    <div class="form-group">
                        <?php echo form_submit('login', 'Ingresar', 'class="btn btn-success"'); ?>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12 control"> 
                        <div>
                          No tienes una cuenta!
                         <a href="<?php echo site_url('login/register'); ?>" class="btn btn-primary">Registrate aqui</a>
                        <?php echo form_close() ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-md-4"></div>
          </div>
        </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.min.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.min.js') ?>"></script>
    </body>
  </html>
        