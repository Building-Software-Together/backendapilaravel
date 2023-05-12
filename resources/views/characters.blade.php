<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="{{ asset('js/main.js') }}"></script>

    @vite('resources/js/main.js', 'public/css/main.css')
		@vite('resources/js/bootstrap.min.js')
		@vite('public/css/plugins.css')
    <!-- All Plugin Css -->

    <link rel="stylesheet" type="text/css" href="{{ url('/css/apicharacters.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/plugins.css') }}" />
    <!-- Style & Common Css -->
    <link rel="stylesheet" href="{{ url('/css/common.css')}}" />
    <link rel="stylesheet" href="{{ url('/css/main.css')}}" />
    <link rel="stylesheet" href="{{ url('/css/navbar.css')}}" />
    <link rel="stylesheet" href="{{ url('/css/apicharacters.css')}}" />

    <title>Premium JOBS</title>
    <style>
      .characters {
        color: black;
      }
    </style>
  </head>
  <body>
    <!-- Navigation Start  -->
    <nav class="navbar navbar-default navbar-sticky bootsnav navbarfixed">
      <div class="container">
        <!-- Start Header Navigation -->
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target="#navbar-menu"
          >
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="/"
            ><img src="img/logo.png" class="logo" alt=""
          /></a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul
            class="nav navbar-nav navbar-right"
            data-in="fadeInDown"
            data-out="fadeOutUp"
          >
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
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>
    <!-- Navigation End  -->
    <section class="main-charactersx">
      <ul id="allCharacters">
      </ul>
    </section>

    <script>
      const url = "https://jsonplaceholder.typicode.com/users";
      const url2 = "https://rickandmortyapi.com/api/character";

      fetch(url2)
        .then((response) => response.json())
        .then((data) => showData(data))
        .catch((error) => console.error(error, "****** ERRORRR :/"))
        .finally(console.log("Finished"));

      const showData = (data) => {
        console.log(data.results);
        const charactersData = data.results;
        let paintDataInHtml = '';
        charactersData.map((cha, id) => {
          //paintDataInHtml += `${cha.id} ${cha.name} ${cha.email}`
          paintDataInHtml += `<div class='testt'> <li>${cha.id}</li> <li>${cha.name}</li> <li>${cha.status}</li> </div>`;

          /* console.log(cha.id);
          console.log(cha.name);
          console.log(cha.email);
          console.log("..........."); */
        });
        document.getElementById("allCharacters").innerHTML = paintDataInHtml;
      };
    </script>

  </body>
</html>
