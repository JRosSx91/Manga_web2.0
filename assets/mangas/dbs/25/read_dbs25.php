<!DOCTYPE html>
<html>
<head>
	<title>Manga Libre - ¡Tu página para leer y descargar Manga!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../../css/estils.css">
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
		      <a class="navbar-brand" href="index.php"><img src="../../../imatges/logoprueba.png"></a>
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
		      <form class="navbar-form navbar-right">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Buscar</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a id="header-join2" href="../../../ingreso.php">Accede</a></li>
		        <li><a id="header-join" href="../../../formulario.php">Únete a <strong>MangaLibre</strong></a> </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<nav id="nav-manga">
			<div class="wrapper">
				<div id="controls">
					<div class="btn-group btn-reader-chapter">
						<select id="lista2" onload="MM()" onchange="window.location.href='../' + this.value + '/read_dbs' + this.value + '.php'">
							<?php
								$thumbs2 = glob("../*");
								$j;
								for ($j = 0; $j < count($thumbs2); $j++){
									echo "<option value'".($j+1)."'>".($j+1)."</option><br>";
								}
							?>
						</select>
					</div>
					<div class="btn-group btn-reader-page">
						<select id="lista" onchange="document.getElementById('pagina').src= this.value + '.png'">
							<?php
								$thumbs = glob("*.png");
								$i;
								for ($i = 0; $i < count($thumbs); $i++){
									echo "<option value='".($i+1)."'>".($i+1)."</option><br>";	
								}							
							?>
						</select>
					</div>
				</div>
				<ul class="pager">
					<li class="previous">
						<a href="#" onclick="NN()">← Prev</a>
					</li>
					<li class="next">
						<a href="#" onclick="N()">Next →</a>
					</li>
				</ul>	
			</div>
		</nav>
		<div id="cuerpo">
			<div class="manga">
				<img id="pagina" class="img-responsive" src="1.png" onclick="N()">
			</div>
			<script type="text/javascript">
				document.onkeydown = M;

				var url2 = window.location.href;
				var partes = url2.split("/");
				document.getElementById("lista2").value = partes[7];
				

				function NN(){
					var url = document.getElementById("pagina").src;
					var partes = url.split("/");
					var serie = partes[6];
					var cap = partes[7];
					var pag = partes[8];

					var imgpag = pag.split(".");
					var imgnum = imgpag[0];
					var imgformat = imgpag[1];
					imgnum2 = parseInt(imgnum);

					var contpag = document.getElementById("lista").length;

					if (imgnum2 != 1){
						document.getElementById("pagina").src = (imgnum2 - 1) + ".png";
						document.getElementById("lista").value = imgnum2 - 1;
					}
				}

				function N(){
					var url = document.getElementById("pagina").src;
					var partes = url.split("/");
					var serie = partes[6];
					var cap = partes[7];
					var pag = partes[8];

					var imgpag = pag.split(".");
					var imgnum = imgpag[0];
					var imgformat = imgpag[1];
					imgnum2 = parseInt(imgnum);

					var contpag = document.getElementById("lista").length;

					if (imgnum2 != contpag){
						document.getElementById("pagina").src = (imgnum2 + 1) + ".png";
						document.getElementById("lista").value = imgnum2 + 1;
					}
				}

				function M(e){

					var url = document.getElementById("pagina").src;
					var partes = url.split("/");
					var serie = partes[6];
					var cap = partes[7];
					var pag = partes[8];

					var imgpag = pag.split(".");
					var imgnum = imgpag[0];
					var imgformat = imgpag[1];
					imgnum2 = parseInt(imgnum);

					var contpag = document.getElementById("lista").length;

					if (!e){
						var e = window.event;
					}
					if(e.keycode){
						T = e.keycode;
					}
					if (e.which){
						T = e.which;
					}
					if (T == 37 && imgnum2 != 1){
						document.getElementById("pagina").src = (imgnum2 - 1) + ".png";
						document.getElementById("lista").value = imgnum2 - 1;
					}
					if (T == 39 && imgnum2 != contpag){
						document.getElementById("pagina").src = (imgnum2 + 1) + ".png";
						document.getElementById("lista").value = imgnum2 + 1;
					}
				}
			</script>
		</div>
	</body>
</html>