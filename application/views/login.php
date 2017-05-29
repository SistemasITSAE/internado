<!DOCTYPE html>
<html>
<head>
    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
    <link rel='stylesheet' href='../../assets/css/materialize.css'>
    <link rel='stylesheet' href='../../assets/css/styles.css'>
    <!-- Compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/<materialize class="m"></materialize>-->
   <!--Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</head>
  <body>
    <div id="login-page" class="row">
      <div class="col s12 z-depth-6 card-panel">
        <form class="login-form" action="" method="POST">
          <div class="row">
            <div class="input-field col s10 center">
              <!--<img src="http://i.imgur.com/C86iotJ.jpg" alt="" class="responsive-img">
              <p class="center login-form-text">Welcome to Internado</p>-->
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="mdi-social-person-outline prefix"></i>
              <input class="form-control" id="email" type="email" placeholder="email">
               <label for="email" data-error="wrong" data-success="right" class="center-align"></label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="mdi-action-lock-outline prefix"></i>
              <input id="password" type="password" name="password" class="form-control" placeholder="password">
              <label for="password" class="center-align"></label>
            </div>
          </div>
          <div class="row">          
            <div class="input-field col s12 m12 l12  login-text">
                <input type="checkbox" id="remember-me" />
                <label for="remember-me">Recordarme</label>
            </div>
          </div>
          <div class="row">
            <input type="submit" value="Ingresar" class="btn waves-light waves-effect col s12">
            <!--<div class="input-field col s12">
                <a href="login.html" class="btn waves-effect waves-light col s12">Ingresar</a>
            </div>-->
          </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
              <p class="margin medium-small"><a href="register.php">Registrarse</a></p>
            </div>
            <div class="input-field col s6 m6 l6">
                <p class="margin right-align medium-small"><a href="forgot-password.html">Olvidaste tu contraseña?</a></p>
            </div>          
          </div>
        </form>
      </div>
    </div>
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
  </body>
</html>
  



