  <html lang="es">
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/css/login.css') ?>"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
    </head>
    <body>
      <div class="page-wrap gradient-primary">
        <div class="container" style="margin-top:;">
                <div class="content">
                  <h1 class="logo"><a href="http://www.itsae.edu.ec"></a></h1>
                <div class="panel">
                  <h3>Ingresar a tu cuenta</h3>
                    <!--<div class="panel-heading">
                      <div class="panel-title">Bienvenido al Sistema Internado ITSAE</div>
                    </div>-->
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
                    
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                           <i class="glyphicon glyphicon-user"></i></span>
                            <?php 
                            echo form_label('','email');
                            echo form_input('email','','class="form-control" id="email" placeholder="correo" type="email"') 
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
                        <?php echo form_submit('login', 'Ingresar', 'class="btn btn-success btn-lg btn-block"'); ?>
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
                <a href="/account/password/reset" style="margin-left: 25px" class="remember">Olvidaste tu contraseña?</a>
                </div>
              </div>
            <div class="col-md-4"></div>
          </div>
        </div>
      <footer class="logo-sfdc">
        <a href="https://soluciones-agiles.000webhostapp.com/" title="#">Agile Solutions <span></span> company</a>
          <ul class="legal">
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Cookies</a></li>
          <li>© 2017 agilesolutions.com</li></ul>
      </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.min.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.min.js') ?>"></script>
    </body>
  </html>
        
