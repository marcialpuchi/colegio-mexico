<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Colegio México | Galeria de Imagenes</title>	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Galeria de Imagenes del Colegio Mexico">
	<meta name="author" content="The Develovers">

	<!-- Styles -->	
	<link href="../assets/libs/bootstrap-3.1.1/css/bootstrap.css" rel="stylesheet">
	<link href="../assets/libs/collagePlus/css/transitions.css" rel="stylesheet">

	<link href="../assets/css/basic.css" rel="stylesheet">
	<link href="../assets/css/icons.css" rel="stylesheet">
	<link href="galeria.css" rel="stylesheet">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700' rel='stylesheet' type='text/css'>

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="../assets/ico/favicon.png">

</head>
<body>

	<!-- NAVBAR -->
	<div class="navbar navbar-fixed-top navbar-light">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="../" class="navbar-brand">
					Colegio <img src="../assets/img/eagle-logo.png" alt="" /> México
				</a>
			</div>

			<nav class="navbar-collapse collapse" id="main-nav" role="navigation">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../#top">INICIO</a></li>
					<li><a href="../#about">NOSOTROS</a></li>
					<li><a href="../#services">OFERTA ACADÉMICA</a></li>
					<li><a href="../#team">EQUIPO</a></li>
					<li><a href="../#contact">CONTACTO</a></li>
				</ul>
			</nav>

		</div>
	</div>
	<!-- END NAVBAR -->	

	<!-- MAIN CONTENT -->
	<div id="main-content" class="main-content darker">
		
		<!-- GALLERY -->
		<div id="gallery" class="section darker">
			<div class="section-heading">
				<h2>Galería de Imágenes</h2>
				<p>Un excelente ambiente educativo</p>
				<a href="../" class="read-more">
					<i class="i fa fa-arrow-circle-left"></i>
					<span>Regresar a la página principal</span>
				</a>
				<br>
				<hr />
			</div>
			<div class="section-content collage">
				<?php
					$dir    = 'gallery/*.jpg';
					$images = glob($dir, GLOB_NOSORT);

					usort($images, create_function('$a,$b', 'return filemtime($a) - filemtime($b);'));

					foreach ($images as $img) {
						$size = getimagesize($img);
						echo '<img class="lazy" src="'.$img.'"/>';
					}
				?>
				
			</div>
		</div>
		<!-- END GALLERY -->

	</div>
	<!-- END MAIN CONTENT -->


	<!-- FOOTER -->
	<footer id="footer" class="section">
		<div class="container">
			<p class="copyright pull-left">&copy; 2014. TODOS LOS DERECHOS RESERVADOS.</p>

			<ul class="list-inline pull-right social-icon">
				<li><a href="https://www.facebook.com/pages/Colegio-México/503065089773557" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://plus.google.com/113049807828608510951" rel="publisher" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
			</ul>

			<p class="copyright" style="text-align:center;"> CLAVE DE INCORPORACIÓN 06PJN0063R</p>
		</div>
	</footer>
	<!-- END FOOTER -->

	<div class="back-to-top">
		<a href="#top"><i class="fa fa-chevron-up"></i></a>
	</div>

	<!-- Le Javascript -->
	<script src="../assets/libs/jquery-2.1.1.min.js"></script>
	<script src="../assets/libs/bootstrap-3.1.1/js/bootstrap.min.js"></script>
	<script src="../assets/libs/jquery.scrollTo.js"></script>
	<script src="../assets/libs/jquery.localscroll.min.js"></script>
	<script src="../assets/libs/collagePlus/jquery.collagePlus.min.js"></script>
	<script src="../assets/libs/collagePlus/extras/jquery.removeWhitespace.min.js"></script>

	<script src="gallery.js"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60019429-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>