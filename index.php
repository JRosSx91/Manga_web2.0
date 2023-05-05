<!DOCTYPE html>
<html>
<head>
	<title>Manga Libre - ¡Tu página para leer y descargar Manga!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estils.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
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
		        <li><a href="#">Noticias</a></li>
		        <li><a href="#">Contacto</a></li>
		        <li><a href="#">Foro</a></li>
		      </ul>
		      <div id="navdown">
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
		      </div>
		    </div><!-- /.navbar-collapse -->
		    <div class="navbar-right enlaces">
                <a href="https://twitter.com/?lang=es" rel="external" target="_blank">
                    <img class="tw" src="imatges/twitter.png">
                </a>
                <a href="https://es-es.facebook.com/" rel="external" target="_blank">
                    <img class="fb" src="imatges/facebook.png">
                </a>
          </div>
		  </div><!-- /.container-fluid -->
		</nav>
		<nav id="navdown2">
			<div class="navdown2nav">
				<div class="navdown2nav-left">
					<form class="navbar-form navbar-left">
			        	<div class="form-group">
			          		<input type="text" class="form-control" placeholder="Search">
			        	</div>
			        	<button type="submit" class="btn btn-default">Buscar</button>
			      	</form>
				</div>
				<div class="navdown2nav-right">
					<ul class="nav navbar-nav navbar-right acceso">
		        		<li><a id="header-join2" href="ingreso.php" style="border:1px rgba(0,0,0,.2) solid"><strong>Accede</strong></a></li>
		        		<li><a id="header-join" href="formulario.php" style="border:1px rgba(0,0,0,.2) solid"><strong>Únete</strong></a> </li>
		      		</ul>
				</div>
			</div>
		</nav>
		<div class="logo-fondo">
			<div>
				<img src="imatges/logofondo.png" class="img-responsive">
			</div>
		</div>
	</header>
	<main>
		<section>
			<h2>Noticias</h2>
			<article id="post">
				<img src="imatges/chap23super.jpg">
				<div class="post-content">
					<a href="mangas/dbs/23/read_dbs23.php"><h3>Dragon Ball Super Cap. 23 (Completo)</h3></a>
					<div>
						<p>El capítulo 23 de Dragon Ball Super está completo y totalmente disponible en castellano.</p>
						<div id="footer-post">
							<p class="data">
							18 de mayo 2017 - 11:53
							</p>
						</div>
					</div>
				</div>
			</article>
		</section>
	</main>
	<aside>
		<section>
			<h3>Actualizaciones</h3>
			<div id="last-pub">
				<a class="last-tit" href="#"> Últimos publicados</a>
				<a class="list" href="mangas/leer.php">
					<div>
						<span>1</span>
						&nbsp; Dragon Ball Super
					</div>
				</a>
			</div>
		</section>	
	</aside>
	<footer>
		
	</footer>
</body>
</html>