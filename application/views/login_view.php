  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css') ?>"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/css/styles.css') ?>"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
    </head>
    <body>
        <div class="container" style="margin-top: 100px;">
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <div class="panel panel-default">
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
                      <?php 
                      echo form_label('Username','username');
                      echo form_input('username','','class="form-control" id="username placeholder="Username"') 
                      ?>
                    </div>
                    <div class="form-group">
                        <?php 
                          echo form_label('Password','password');
                          echo form_password('password','','class="form-control" id="password placeholder="Password"');
                         ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_submit('login', 'Login', 'class="btn btn-primary"'); ?>
                        <a href="<?php echo site_url('login/register'); ?>" class="btn btn-link">Registrarse</a>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-md-4"></div>
          </div>
        </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="<?php echo base_url('https://code.jquery.com/jquery-2.1.1.min.js') ?> "></script>
      <script type="text/javascript" src="<?php echo base_url('js/materialize.min.js') ?> "></script>
    </body>
  </html>
        