<?php ?>
<html>  
  <head>
    <link rel="stylesheet" type="text/css" href="../../assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>

  </head>
  <body>
<div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="form sign-up">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">Welcome to Internado ITSAE</p>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" class="validate">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email" class="validate">
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" class="validate">
            <label for="password">Contraseña</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password-again" type="password">
            <label for="password-again">Confirme su contraseña</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="register.html" class="btn waves-effect waves-light col s12">Register Now</a>
          </div>
          <div class="input-field col s12 back">
            <p class="margin center medium-small sign-up">Already have an account? <a href="login.php" class="inside">Login</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</html>
</body>