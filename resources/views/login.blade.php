<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Jober Desk | Responsive Job Portal Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="{{ url('/css/apicharacters.css') }}" />
        <link rel="stylesheet" href="{{ url('/css/plugins.css') }}" />
        <!-- Style & Common Css -->
        <link rel="stylesheet" href="{{ url('/css/common.css')}}" />
        <link rel="stylesheet" href="{{ url('/css/main.css')}}" />
        <link rel="stylesheet" href="{{ url('/css/navbar.css')}}" />
        <link rel="stylesheet" href="{{ url('/css/apicharacters.css')}}" />
		<script src="js/md5.min.js"></script>

    </head>

    <body>

		<!-- Navigation Start  -->
		<nav class="navbar navbar-default navbar-sticky bootsnav navbarfixed">

			<div class="container">
				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="index.html"><img src="img/logo.png" class="logo" alt=""></a>
				</div>
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li id="thehome"><a href="">Inicio</a></li>
						<li id="session-li"><a href="login">Iniciar Sesión</a></li>
						<li id="companiesP"><a href="companies">Compañias</a></li>
						<li id="premium"><a href="characters">Trabajos Premium</a></li>
						<li id="logoutfrom"><a href="">Cerrar Sesión</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<!-- Navigation End  -->

		<!-- login section start -->
		<section class="login-wrapper">
			<div class="container">
				<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
					<form id="l-form">
						<img class="img-responsive" alt="logo" src="img/logo.png">
						<input type="text" id="email" class="form-control input-lg" placeholder="Email" required>
						<input type="password" id="password" class="form-control input-lg" placeholder="Password" required>
						<label><a href="">¿Olvidaste la contraseña?</a></label>
						<button id="btnlgn" type="submit"  class="btn btn-primary">Iniciar Sesión</button>
						<p>¿No tienes una cuenta?<a href="#" id="newAccount">Crear una cuenta.</a></p>
					</form>
				</div>
			</div>
		</section>
		<!-- login section End -->

		<!-- footer start -->
		<footer>
			<div class="container">
				<div class="col-md-3 col-sm-6">
					<h4>Elaborado por: </h4>
				</div>

				<div class="col-md-3 col-sm-6">
					<h4>Juan Pablo Palomino</h4>

					<ul>
						<li>Estudiante Ing. en Sistemas</li>
						<li><a href="mailto:juan.palomino@upb.edu.co">Email: juan.palomino@upb.edu.co</a></li>
						<li>Tel: 311304940</li>
					</ul>

				</div>

				<div class="col-md-3 col-sm-6">
					<h4>Andres Romaña</h4>
					<ul>
					<li>Estudiante Ing. en Sistemas</li>
					<li><a href="mailto:andres.romana@upb.edu.co">Email: andres.romana@upb.edu.co</a></li>
					<li>Tel: 311407406</li>
					</ul>
				</div>

				<div class="col-md-3 col-sm-6">
					<h4>Envianos un Correo</h4>
					<form>
						<input type="text" class="form-control input-lg" placeholder="Nombre">
						<input type="text" class="form-control input-lg" placeholder="Correo...">
						<textarea class="form-control" placeholder="Mensaje"></textarea>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</form>
				</div>


			</div>
			<div class="copy-right">
			 <p>&copy;Copyright 2018 Jober Desk | Design By <a href="https://themezhub.com/">ThemezHub</a></p>
			</div>
		</footer>


    </body>
</html>
