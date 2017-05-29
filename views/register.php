<?php ?>
<html>  
  <head>
    <link rel="stylesheet" type="text/css" href="../assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>

  </head>
  <body>
<div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="form sign-up">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">Bienvenido al Internado del ITSAE</p>
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
            <label for="password-again">Repita su contraseña</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="register.html" class="btn waves-effect waves-light col s12">Registrarse</a>
          </div>
          <div class="input-field col s12 back">
            <p class="center medium-small sign-up">Ya tienes una cuenta? <a href="login.php" class="inside">Ingresa aqui</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</html>
</body>