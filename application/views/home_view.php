  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>../assets/css/bootstrap.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>../assets/css/styles.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
                        <div class="alert alert-warning alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong><?php echo validation_errors(); ?></strong>
                        </div>
                       <?php 
                        }
                       ?>
                    <form action="<?php echo site_url('login'); ?>">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                    <a href="<?php echo site_url('login'); ?>" class="btn btn-link">Sign up</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="<?php echo base_url() ?> https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?> js/materialize.min.js"></script>
    </body>
  </html>
        