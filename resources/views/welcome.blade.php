<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Jober Desk | Responsive Job Portal Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		@vite('resources/js/main.js')
		@vite('resources/js/bootstrap.min.js')
		@vite('public/css/plugins.css')

		
        <!-- Style & Common Css -->
        <link rel="stylesheet" href="{{ url('/css/common.css')}}" />
        <link rel="stylesheet" href="{{ url('/css/main.css')}}" />
        <link rel="stylesheet" href="{{ url('/css/navbar.css')}}" />
        <link rel="stylesheet" href="{{ url('/css/apicharacters.css')}}" />
		<link rel="stylesheet" href="{{ url('/css/plugins.css')}}" />


    </head>

    <body>



		<!--Boton ir arriba-->
		<a class="goup" href="#up" javascript:void(0)  title="Volver arriba">
			<img class="arrow-icon" src="{{URL::asset('img/arrow-up.jpg')}}" width="50" height="50">

		</a>

		<!-- Boton Whatsapp-->
		 <a class="btn-wsp" target="_blank" href="https://api.whatsapp.com/send?phone=573113049940">
		   <img class="wicon" src="img/wsp-icon.png"  width="50" height="50">
		 </a>

		<!-- Navigation Start  -->
		<nav class="navbar navbar-default navbar-sticky bootsnav navbarfixed">


			<div class="container" >
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
		<section class="main-banner" id="up" style="background:#242c36 url(img/grupo-personas-trabajando-plan-negocios-oficina.jpg) no-repeat">
			<div class="container">
				<div class="caption">
					<h2>Construye tu Carrera</h2>
					<form>
						<fieldset>
							<div class="col-md-4 col-sm-4 no-pad">
								<input type="text" class="form-control border-right" placeholder="Habilidades, cargos, compañias" />
							</div>
							<div class="col-md-3 col-sm-3 no-pad">
								<select class="selectpicker border-right">
								  <option>Experiencia</option>
								  <option>Sin experiencia</option>
								  <option>1 Año</option>
								  <option>2 Años</option>
								  <option>3 Años</option>
								  <option>4 Años</option>
								  <option>5 Años</option>
								  <option>6 Años</option>
								  <option>7 Años</option>
								  <option>8 Años</option>
								  <option>9 Años</option>
								 <option>10 Años</option>
								</select>
							</div>
							<div class="col-md-3 col-sm-3 no-pad">
								<select class="selectpicker">
								  <option>Categoria</option>
								  <option>Finanzas</option>
								  <option>Tecnologías e información</option>
								  <option>Marketing</option>
								  <option>Comidas y restaurantes</option>
								</select>
							</div>
							<div class="col-md-2 col-sm-2 no-pad">
								<input type="submit" class="btn seub-btn" value="submit" />
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</section>

		<section class="features">
			<div class="container">
				<div class="col-md-4 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true" class="icon-dial"></span></span>
						<h3>Crea una cuenta</h3>
						<p>Create una cuenta para mantener al día con información sobre nuevos trabajos y proyectos.</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true" class="icon-search"></span></span>
						<h3>Busca el trabajo soñado</h3>
						<p>Mas de 1000+ trabajos alrededor del mundo son publicados en nuestra plataforma, encuentra el trabajo que siempre has soñado</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true" class="icon-printer"></span></span>
						<h3>Envianos tu Curriculum</h3>
						<p>Multiples empresas de diferentes sectores utilizan nuestra plataforma para encontrar personal, envianos tu hoja de vida y abrete a nuevas empresas</p>
					</div>
				</div>



			</div>
		</section>

		<section class="counter">
			<div class="container">
				<div class="col-md-3 col-sm-3">
					<div class="counter-text">
						<span aria-hidden="true" class="icon-briefcase"></span>
						<h3>1000</h3>
						<p>Trabajos publicados</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-3">
					<div class="counter-text">
						<span class="box1"><span aria-hidden="true" class="icon-expand"></span></span>
						<h3>207</h3>
						<p>Compañias</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-3">
					<div class="counter-text">
						<span class="box1"><span aria-hidden="true" class="icon-profile-male"></span></span>
						<h3>700+</h3>
						<p>Miembros</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-3">
					<div class="counter-text">
					<span class="box1"><span aria-hidden="true" class="icon-sad"></span></span>
						<h3>802+</h3>
						<p>Miembros Satisfechos</p>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="splide">
					<button id="prev">&#10094;</button>
					<img id="slider">


					<button id="next">&#10095;</button>
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
					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="img/uber-logo.png" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>IOS Developer<span class="full-time">Full Time</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>Uber</span><span class="company-location"><i class="fa fa-map-marker"></i> 535 Mission St, San Fransisco, California, United States</span><span class="package"><i class="fa fa-money"></i>$22,000-$50,000</span></p>
								</div>
							</div>
						</div>
					</div>

					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="img/microsoft.png" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>Back-End developer<span class="part-time">Part Time</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>Microsoft</span><span class="company-location"><i class="fa fa-map-marker"></i> 7th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$20,000-$52,000</span></p>
								</div>
							</div>
						</div>
					</div>

					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="img/apple.png" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>UI/UX Designer<span class="freelance">Freelance</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>Apple</span><span class="company-location"><i class="fa fa-map-marker"></i> 7th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$22,000-$50,000</span></p>
								</div>
							</div>
						</div>
					</div>

					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="img/wipro.png" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>IOS developer<span class="internship">Intership</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>LA Lakers</span><span class="company-location"><i class="fa fa-map-marker"></i> 8th Avenue, Los Angeles, California, United States</span><span class="package"><i class="fa fa-money"></i>$24,000-$52,000</span></p>
								</div>
							</div>
						</div>
					</div>

					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="img/twitter.png" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>Marketing Holder<span class="full-time">Full Time</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>Twitter</span><span class="company-location"><i class="fa fa-map-marker"></i> 4th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$24,000-$48,000</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<input type="button" class="btn brows-btn" value="Mas trabajos" />
				</div>
			</div>
		</section>

		<section class="testimonials dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="testimonial-slider" class="owl-carousel">
							<div class="testimonial">
								<div class="pic">
									<img src="img/client-1.jpg" alt="">
								</div>
								<p class="description">
									" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
								</p>
								<h3 class="testimonial-title">williamson</h3>
								<span class="post">Web Developer</span>
							</div>

							<div class="testimonial">
								<div class="pic">
									<img src="img/client-2.jpg" alt="">
								</div>
								<p class="description">
									" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
								</p>
								<h3 class="testimonial-title">kristiana</h3>
								<span class="post">Web Designer</span>
							</div>

							<div class="testimonial">
								<div class="pic">
									<img src="img/client-3.jpg" alt="">
								</div>
								<p class="description">
									" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
								</p>
								<h3 class="testimonial-title">kristiana</h3>
								<span class="post">Web Designer</span>
							</div>

							<div class="testimonial">
								<div class="pic">
									<img src="img/client-4.jpg" alt="">
								</div>
								<p class="description">
									" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
								</p>
								<h3 class="testimonial-title">kristiana</h3>
								<span class="post">Web Designer</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="pricind">
			<div class="container">
				<div class="col-md-4 col-sm-4">
					<div class="package-box">
						<div class="package-header">
							<i class="fa fa-cog" aria-hidden="true"></i>
							<h3>Profesional</h3>
						</div>
						<div class="package-info">
							<ul>
							<li>1 Diseño</li>
							<li>2 opciones de color</li>
							<li>4GB Espacio</li>
							<li>Chat-bot Soporte</li>
							</ul>
						</div>
						<div class="package-price">
							<h2><sup>$ </sup>10<sub>/Mes</sub></h2>
						</div>
						<button type="submit" class="btn btn-package">Lo quiero</button>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="package-box">
						<div class="package-header">
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
							<h3>Standard</h3>
						</div>
						<div class="package-info">
							<ul>
							<li>3 Diseños</li>
							<li>4 Opciones de color</li>
							<li>8GB Espacio</li>
							<li>Full Support</li>
							</ul>
						</div>
						<div class="package-price">
							<h2><sup>$ </sup>110<sub>/Mes</sub></h2>
						</div>
						<button type="submit" class="btn btn-package">Lo quiero</button>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="package-box">
						<div class="package-header">
							<i class="fa fa-cube" aria-hidden="true"></i>
							<h3>Premium</h3>
						</div>
						<div class="package-info">
							<ul>
							<li>8 Diseños</li>
							<li>6 color Option</li>
							<li>16GB Espacio</li>
							<li>Full Support</li>
							</ul>
						</div>
						<div class="package-price">
							<h2><sup>$ </sup>170<sub>/Mes</sub></h2>
						</div>
						<button type="submit" class="btn btn-package">Lo quiero</button>
					</div>
				</div>
			</div>
		</section>

		<section class="membercard dark">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="left-widget-sidebar">
							<div class="card-widget bg-white user-card">
								<div class="u-img img-cover" style="background-image: url(img/bg-1.jpg);background-size:cover;"></div>
								<div class="u-content">
									<div class="avatar box-80">
										<img class="img-responsive img-circle img-70 shadow-white" src="img/avatar3.jpg" alt="">
										<i class="fa fa-circle-o fa-green"></i>
									</div>
									<h5>Sazzel Shi</h5>
									<p class="text-muted">UX/ Diseñadora</p>
								</div>
								<div class="user-social-profile">
									<ul>
										<li><a href=""><i class="fa fa-facebook"></i></a></li>
										<li><a href=""><i class="fa fa-google-plus"></i></a></li>
										<li><a href=""><i class="fa fa-twitter"></i></a></li>
										<li><a href=""><i class="fa fa-instagram"></i></a></li>
										<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="left-widget-sidebar">
							<div class="card-widget bg-white user-card">
								<div class="u-img img-cover" style="background-image: url(img/bg-2.jpg);background-size:cover;"></div>
								<div class="u-content">
									<div class="avatar box-80">
										<img class="img-responsive img-circle img-70 shadow-white" src="img/avatar2.jpg" alt="">
										<i class="fa fa-circle-o fa-green"></i>
									</div>
									<h5>Daniel Dezox</h5>
									<p class="text-muted">CEO Fundador</p>
								</div>
								<div class="user-social-profile">
									<ul>
										<li><a href=""><i class="fa fa-facebook"></i></a></li>
										<li><a href=""><i class="fa fa-google-plus"></i></a></li>
										<li><a href=""><i class="fa fa-twitter"></i></a></li>
										<li><a href=""><i class="fa fa-instagram"></i></a></li>
										<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="left-widget-sidebar">
							<div class="card-widget bg-white user-card">
								<div class="u-img img-cover" style="background-image: url(img/bg-3.jpg);background-size:cover;"></div>
								<div class="u-content">
									<div class="avatar box-80">
										<img class="img-responsive img-circle img-70 shadow-white" src="img/avatar1.jpg" alt="">
										<i class="fa fa-circle-o fa-green"></i>
									</div>
									<h5>Silp Sizzer</h5>
									<p class="text-muted">Recursos Humanos</p>
								</div>
								<div class="user-social-profile">
									<ul>
										<li><a href=""><i class="fa fa-facebook"></i></a></li>
										<li><a href=""><i class="fa fa-google-plus"></i></a></li>
										<li><a href=""><i class="fa fa-twitter"></i></a></li>
										<li><a href=""><i class="fa fa-instagram"></i></a></li>
										<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="newsletter">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
					<h2>Quieres estar actualizado en los últimos trabajos?</h2>
					<p>Subscribase a nuestra lista de mail para recibir la información de primera mano</p>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Esribenos tu email...">
						<span class="input-group-btn">
							<button type="button" class="btn btn-default">Subscribirse!</button>
						</span>
					</div>
					</div>
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
