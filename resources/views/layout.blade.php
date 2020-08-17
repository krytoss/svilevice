<!DOCTYPE html>
<html>
<head>
	<title>Služba včasnej intervencie Levice - @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/fa.min.css') }}"> -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i&display=swap&subset=latin-ext" rel="stylesheet">
	@yield('styles', '')
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body id="body">

	<header id="main-header">

		<div id="top-header">
			
			<div class="container">
				
				<div class="row">

						<div class="row logo text-center">
							<div class="col col-12">
								<a href="{{ request()->is('/') ? '' : '/' }}#body" class="anchor body"><img src="{{ asset('img/logo.png') }}"></a>
							</div>
								
						</div>
					
					<nav class="navbar navbar-dark navbar-expand-md">

						
						<a href="{{ request()->is('/') ? '' : '/' }}#body" class="anchor body responsive"><img src="{{ asset('img/logo.png') }}"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="pull-right">
								  <span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarNav">
							<div class="nav-wrapper">
								<ul id="main-nav" class="nav vertical-nav">
									<li class="logo-link text-center">
										<a href="{{ request()->is('/') ? '' : '/' }}#main-header" class="anchor intro icons"><img src="{{ asset('img/logo.png') }}"></a>
									</li>
									<li>
										<a href="{{ request()->is('/') ? '' : '/' }}#intro" class="anchor intro icons">O nás</a>
									</li>
									<li>
										<a href="{{ request()->is('/') ? '' : '/' }}#job" class="anchor job icons">Čo robíme</a>
									</li>
									<li>
										<a href="{{ request()->is('/') ? '' : '/' }}#help" class="anchor help">Hľadám pomoc</a>
									</li>
									<li>
										<a href="gallery" class="{{ request()->is('gallery') ? 'active' : '' }}">Fotogaléria</a>
									</li>
									<li>
										<a href="{{ request()->is('/') ? '' : '/' }}#links" class="anchor links">Užitočné odkazy</a>
									</li>
									<li>
										<a href="{{ request()->is('/') ? '' : '/' }}#contact" class="anchor contact map">Kontakt</a>
									</li>
								</ul>
							</div>

						</div>

					</nav>

				</div>

			</div>

		</div>

		<div id="slider" class="carousel slide" data-ride="carousel">

			<ul class="carousel-indicators">
			    <li data-target="#slider" data-slide-to="0" class="active"></li>
			    <li data-target="#slider" data-slide-to="1"></li>
			 </ul>

			<div class="carousel-inner">
				
				<div class="carousel-item active">
					<img src="{{ asset('img/header01.jpg') }}">
					<div class="carousel-caption">
				        <h3 class="black">"Každý je génius. Ale ak budete posudzovať rybu podľa toho, či sa dokáže vyškriabať na strom, strávi celý život vo viere, že je neschopná."</h3>
				        <p class="black">Albert Einstein</p>
				    </div>
				</div>

				<div class="carousel-item">
					<img src="{{ asset('img/header02.jpg') }}">
				</div>

				<div class="carousel-item">
					<img src="{{ asset('img/01.png') }}">
				</div>

			</div>

			<a class="arrow arrow-left carousel-control-prev" href="#slider" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
		    	<span class="sr-only">Previous</span>
			</a>
			<a class="arrow arrow-right carousel-control-next" href="#slider" data-slide="next">
				<span class="carousel-control-next-icon"></span>
		    	<span class="sr-only">Next</span>
			</a>

		</div>

	</header>

	<main>
		
		@yield('content')

	</main>

	<footer id="main-footer">

		<div class="container">
			<div class="row">
				<div class="col col-sm-6 offset-sm-3 col-12">
					<h2>SLUŽBA VČASNEJ INTERVENCIE LEVICE</h2>
					<p>
						Družstevnícka 22, 934 80 Levice
						<br>Telefón: +421 910 753 003
						<br>E-mail: jesenzivotalv@gmail.com
					</p>
				</div>
			</div>
		</div>
		
		<div class="footer-fixed">
			<div class="container">
				<div class="row">
					<div class="col col-4 text-center">
						jesenzivotalv@gmail.com
					</div>
					<div class="col col-4 text-center spacing">
						PODPORA RODINÁM A DEŤOM
					</div>
					<div class="col col-4 text-center">
						+421 910 753 003
					</div>
				</div>
			</div>
		</div>

	</footer>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
	@if(request()->is('/')) {
		<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
	}
	@endif
	<script src="https://kit.fontawesome.com/8d80d3b633.js"></script>
	@yield('scripts', '')
</body>
</html>