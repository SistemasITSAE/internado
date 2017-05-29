<?php
   /* define('DB_SERVER', 'localhost:3036')
  /*define
    /*
    $username = 'user'; // Set accepted username
    $password = 'password'; // Set accepted password
    $loginstatus = FALSE; // Sets loginstatus to false by default, content will only be shown if the following code changes this to TRUE

    if(!isset($_COOKIE['loggedin'])) { // If cookie loggedin not set.
        if(isset($_POST['username'])) {// Check if POST data exists from login form.
            if ($_POST['username'] === $username && $_POST['password'] === $password) { // If username and password correspond.
                setcookie('loggedin', TRUE, time() + (86400), '/'); // Sets loggedin cookie as true, 86400 = 1 day expirey, "/" sets the cookie to be accessed across the whole website.
                $loginstatus = TRUE; // Username and Password were correct so set $loginstatus to TRUE to allow user to view content
            } else { // Username or password did not match
                echo 'Username or Password incorrect please try again.'
            }
        }
    } else { // Cookie loggedin is set
        if ($_COOKIE['loggedin'] == TRUE) { // Double check the cookie value is TRUE
            $loginstatus = TRUE; // Cookie was set and valid so set login to TRUE
        }
    }
    if ($loginstatus !== TRUE) */{ // If $loginstatus not equal to TRUE display login form
        ?>
        <html>
        <head>
            <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
            <link rel='stylesheet' href='../assets/css/materialize.css'>
            <link rel='stylesheet' href='../assets/css/styles.css'>
            <!-- Compiled and minified CSS -->
            <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">-->
            <!--Compiled and minified JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
        </head>
        <!--<body background="">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <label for="username">Username:</label><input type="text" name="username"><br>
                <label for="password">Password:</label><input type="password" name="password"><br>
                <input type="submit">
            </form>
        </body>-->
        <body>
          <div id="login-page" class="row">
            <div class="col s12 z-depth-6 card-panel">
              <form class="login-form">
                <div class="row">
                  <div class="input-field col s10 center">
                    <!--<img src="http://i.imgur.com/C86iotJ.jpg" alt="" class="responsive-img">
                    <p class="center login-form-text">Welcome to Internado</p>-->
                  </div>
               </div>
               <div class="row">
                  <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input class="validate" id="email" type="email">
                    <label for="email" data-error="wrong" data-success="right" class="center-align">Email</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password" type="password">
                    <label for="password" class="center-align">Contraseña</label>
                  </div>
               </div>
                <div class="row">          
                  <div class="input-field col s12 m12 l12  login-text">
                      <input type="checkbox" id="remember-me" />
                      <label for="remember-me">Recordarme</label>
                  </div>
                </div>
                <div class="row">
                 <div class="input-field col s12">
                  <a href="login.html" class="btn waves-effect waves-light col s12">Ingresar</a>
                  </div>
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
        </body>
        </html>
        <?php 
          //} else { // Else $loginstatus is equal to true so show restricted page content
        ?>
        <html>
        <body>
            <!-- Your restricted Content Here -->
             <!-- Start Page Loading -->





            <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="http://yourdomain.com/materialize-css/js/materialize.min.js"></script>
            <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
            <!--materialize js-->
            <script type="text/javascript" src="assets/js/materialize.min.js"></script>
            <!--prism-->
            <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
            <!--scrollbar-->
            <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
            <!--plugins.js - Some Specific JS codes for Plugin Settings-->
            <script type="text/javascript" src="js/plugins.min.js"></script>
            <!--custom-script.js - Add your own theme custom JS-->
            <script type="text/javascript" src="js/custom-script.js"></script>
        </body>
        </html>
        <?php
    }
    ?>