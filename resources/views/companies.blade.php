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

		@vite('resources/js/main.js', 'public/css/main.css')
		@vite('resources/js/bootstrap.min.js')
		@vite('public/css/plugins.css')

		<script src="{{ asset('js/main.js') }}"></script>
        <!-- Style & Common Css -->
        <link rel="stylesheet" href="{{ url('/css/common.css')}}" />
        <link rel="stylesheet" href="{{ url('/css/main.css')}}" />
        <link rel="stylesheet" href="{{ url('/css/navbar.css')}}" />
        <link rel="stylesheet" href="{{ url('/css/apicharacters.css')}}" />

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
					<a class="navbar-brand" href="/"><img src="img/logo.png" class="logo" alt=""></a>
				</div>
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
					<li id="thehome"><a href="/">Inicio</a></li>
							@guest
							<li id="session-li"><a href="login">Iniciar Sesión</a></li>
							@endguest
							<li id="companiesP"><a href="trabajos">Compañias</a></li>
							<li id="premium"><a href="characters">Trabajos Premium</a></li>
							@auth
							<li id="perfil"><a href="dashboard">Perfil</a></li>
							<li id="logoutfrom">
							<form method="POST" action="{{ route('logout') }}">
                            @csrf
								<a href="route('logout')"
								onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}</a></form></li>
							@endauth
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<!-- Navigation End  -->

    <!-- Main jumbotron for a primary marketing message or call to action -->
	<section class="inner-banner" style="background:#242c36 url(img/mainbanner.jpg)no-repeat;">
		<div class="container">
			<div class="caption">
				<h2>Consigue tu trabajo</h2>
				<p>Hay mas de <span>202 Nuevos trabajos!</span></p>
			</div>
		</div>
	</section>

	
		
	<section class="jobs">
			<div class="container">
				<div class="row heading">
					<h2>Trabajos Populares</h2>
					<p>Empresas populares estan buscando personal...</p>
				</div>
				<div class="companies">
				@foreach($trabajos as $trabajo)
					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="{{ asset($trabajo->logo) }}" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>{{ $trabajo->nombre }}<span class="full-time">{{ $trabajo->tiempo }}</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>{{ $trabajo->empresa }}</span><span class="company-location"><i class="fa fa-map-marker"></i> {{ $trabajo->direccion }} </span><span class="package"><i class="fa fa-money"></i>{{ $trabajo->salario }}</span></p>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					
				<div class="row">
					<input type="button" class="btn brows-btn" value="Mas trabajos" />
				</div>
			</div>
		</section>



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
