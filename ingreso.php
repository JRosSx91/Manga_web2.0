<!DOCTYPE html>
<html lang="es-ES"> 
    <head>
        <meta charset="UTF-8"/>
        <title>Login MySQL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/css-formulario/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/css-formulario/style.css" />
		<link rel="stylesheet" type="text/css" href="css/css-formulario/animate-custom.css" />
        <link rel="stylesheet" type="text/css" href="css/css-formulario/prueba.css">
        <link rel="stylesheet" type="text/css" href="css/estils.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><img src="imatges/logoprueba.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catálogo<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <div class="triangle"></div>
                            <li><a href="#">Catálogo completo</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Shônen Manga</a></li>
                            <li><a href="#">Shôjo Manga</a></li>
                            <li><a href="#">Kodomo Manga</a></li>
                            <li><a href="#">Seinen Manga</a>
                            </li>
                            <li><a href="#">Josei Manga</a>
                            </li>
                        </ul>
                    </li>
                <li><a href="index.php">Noticias</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Foro</a></li>
              </ul>
              <form class="navbar-form navbar-right">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a id="header-join2" href="ingreso.php">Accede</a></li>
                <li><a id="header-join" href="formulario.php">Únete a <strong>Manga Libre</strong></a> </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>
    <section>               
    <div id="container_demo" >
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>
    <div id="wrapper">
    <div id="login" class="animate form">
        <form action="#reconsulta2" method="post" autocomplete="on"> 
                            <h1>INICIAR SESION</h1>
                            <p id="reconsulta2">
                                <?php
                                    $nom = $_POST['nom'];
                                    $cognom = $_POST['cognom'];
                                    $mail = $_POST['mail'];
                                    $data = $_POST['data'];
                                    $username = $_POST['username'];
                                    $username2 = $_POST['username2'];
                                    $pass = $_POST['pass'];
                                    $pass2 = $_POST['pass2'];
                                    $pass3 = $_POST['pass3'];
                                    $boto1 = $_POST['boto1'];
                                    $boto2 = $_POST['boto2'];
                                    $recuerda = $_POST['loginkeep'];

                                    if(isset($boto2)){
                                        $conexion2 = mysqli_connect("localhost", "root", "root") or die("No s'ha pogut establir la conexió amb el servidor.");
                                        mysqli_set_charset($conexion2, "utf8");
                                        mysqli_select_db($conexion2, "mangalibre") or die("No s'ha pogut conectar amb la base de dades.");
                                        $instruccion2 = "SELECT User FROM User WHERE User = '$username2' && Password = '$pass3'";
                                        $instruccion3 = "SELECT User FROM User WHERE User = '$username2'";
                                        $consulta2 = mysqli_num_rows($conexion2->query($instruccion2));

                                        if ($consulta2 > 0 && $recuerda != 1){
                                            echo "¡Bienvenido/a, ".$username2."!";
                                        }
                                        else if($consulta2 > 0 && $recuerda == 1){
                                            echo "¡Bienvenido/a, ".$username2."!";
                                            setcookie('cookieuser', $username2, time()+ (86400 * 30), "/");
                                            setcookie('cookiepass', $pass3, time()+ (86400 * 30), "/");
                                        }
                                        else{
                                            $consulta3 = mysqli_num_rows($conexion2->query($instruccion3));
                                            if ($consulta3 > 0){
                                                echo "La contraseña es incorrecta.";
                                            }
                                            else{
                                                echo "No estás registrado/a.";
                                            } 
                                        }
                                    }
                                ?>
                            </p>
                            <div class="fb-login-button" data-max-rows="1" data-size="medium" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>
                            <p> 
                                <label for="username" class="uname icon-u" data-icon="icon-u" > Nombre de usuario </label>
                                <input id="username" name="username2" required="required" type="text" placeholder="MiNombreDeUsuario"/>
                            </p>
                            <p> 
                                <label for="password" class="youpasswd icon-l" data-icon="icon-l"> Contraseña </label>
                                <input id="password" name="pass3" required="required" type="password" placeholder="ej. X8df!90EO" /> 
                            </p>
                            <p class="keeplogin"> 
                                <input type="checkbox" name="loginkeep" id="loginkeeping" value="1" /> 
                                <label for="loginkeeping">Recúerdame</label>
                            </p>
                            <p class="login button"> 
                                <input type="submit" name="boto2" value="Ingresa" /> 
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>