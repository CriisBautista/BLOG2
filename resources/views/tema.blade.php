<!DOCTYPE HTML>

<html>
	<head>
		<title>{{$publit->TITULO}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="right-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="{{route('vista.1')}}">BLOG CLIENTE-SERVIDOR</a></h1>
							<p>CREADORES: CRISTIAN BAUTISTA, YAIR LOPEZ y BRANDON ROMERO</p>
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a class="icon solid fa-home" href="{{route('vista.1')}}"><span>LOBBY</span></a></li>
									<li>
										<a href="#" class="icon fa-chart-bar"><span>TEMARIO</span></a>
										<ul>
											<li>
												<a >Introducción a la arquitectura  Cliente/Servidor</a>
												<ul>
													@foreach ($publiSub1 as $publicacionesSub1)
													<li><a href="{{route('temas', $publicacionesSub1['slug'])}}">{{$publicacionesSub1['TITULO']}}.</a></li>
													@endforeach
												</ul>
											</li>
											<li>
												<a>Componentes y características del  Cliente/Servidor</a>
												<ul>
													@foreach ($publiSub2 as $publicacionesSub2)
													<li><a href="{{route('temas', $publicacionesSub2['slug'])}}">{{$publicacionesSub2['TITULO']}}.</a></li>
													@endforeach
												</ul>
											</li>
											<li>
												<a>Estrategias de reparto de complejidad</a>
												<ul>
													@foreach ($publiSub3 as $publicacionesSub3)
													<li><a href="{{route('temas', $publicacionesSub3['slug'])}}">{{$publicacionesSub3['TITULO']}}.</a></li>
													@endforeach
												</ul>
											</li>
											<li>
												<a>Modelos Multinivel</a>
												<ul>
													@foreach ($publiSub4 as $publicacionesSub4)
													<li><a href="{{route('temas', $publicacionesSub4['slug'])}}">{{$publicacionesSub4['TITULO']}}.</a></li>
													@endforeach
												</ul>
											</li>
											<li>
												<a>Modelo Vista Controlador</a>
												<ul>
													@foreach ($publiSub5 as $publicacionesSub5)
													<li><a href="{{route('temas', $publicacionesSub5['slug'])}}">{{$publicacionesSub5['TITULO']}}.</a></li>
													@endforeach
												</ul>
											</li>
											<li>
												<a>Sockets</a>
												<ul>
													@foreach ($publiSub6 as $publicacionesSub6)
													<li><a href="{{route('temas', $publicacionesSub6['slug'])}}">{{$publicacionesSub6['TITULO']}}.</a></li>
													@endforeach
												</ul>
											</li>
										</ul>
									</li>
									
								</ul>
									</li>
								</ul>
							</nav>

					</div>
				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">

							<!-- Content -->
								<div id="content" class="col-8 col-12-medium">
									
									<!-- Post -->
										<article class="box post">
											<header>
												<h2>{{$publit->TITULO}}</h2>
											</header>
											<span class="image featured"><img src="{{$publit->IMAGEN}}" alt="" /></span>
											<p>{{$publit->ARTICULO1}}</p>
											<p>{{$publit->ARTICULO2}}</p>
											<p>{{$publit->ARTICULO3}}</p>
											<p>{{$publit->ARTICULO4}}</p>
											<p></p>{{$publit->ARTICULO5}}</p>
											<p>{{$publit->ARTICULO6}}</p>
										</article>
										

								</div>

							<!-- Sidebar -->
								<div id="sidebar" class="col-4 col-12-medium">

									<!-- Excerpts -->
										<section>
											<ul class="divided">
												<li>
													
													<!-- Excerpt -->
													<article class="box excerpt">
														<header>
															<span class="date">{{$publiAl->created_at}}</span>
															<h3><a href="{{$publiAl->slug}}">{{$publiAl->TITULO}}</a></h3>
														</header>
														<p>{{$publiAl->ARTICULO1}}</p>
													</article>
													
													
												</li>
												
											</ul>
										</section>

									<!-- Highlights -->
										<section>
											<ul class="divided">
												<li>

													<!-- Highlight -->
														<article class="box highlight">
															<header>
																<h3><a href="{{$publiAl2->slug}}">{{$publiAl2->TITULO}}</a></h3>
															</header>
															<a href="#" class="image left"><img src="{{$publiAl2->IMAGEN}}" alt="" /></a>
															<p>{{$publiAl2->ARTICULO1}}</p>
															<ul class="actions">
																<li><a href="{{$publiAl2->slug}}" class="button icon solid fa-file">SEGUIR LEYENDO...</a></li>
															</ul>
														</article>

												</li>
												
											</ul>
										</section>

								</div>

						</div>
					</div>
				</section>

			<!-- Footer -->
			<section id="footer">
				<div class="container">
					<header>
						<h2>Quedamos a sus ordenes para resolver cualquier duda.</h2>
					</header>
					<div class="row">
						<div class="col-6 col-12-medium">
							<section>
								<form method="post" action="mailto:cesaryairlopez48@gmail.com">
									<div class="row gtr-50">
										<div class="col-6 col-12-small">
											<input name="name" placeholder="Nombre" type="text" />
										</div>
										<div class="col-6 col-12-small">
											<input name="email" placeholder="Email" type="text" />
										</div>
										<div class="col-12">
											<textarea name="message" placeholder="Mensaje"></textarea>
										</div>
										<div class="col-12">
											<a href="mailto:cesaryairlopez48@gmail.com" class="form-button-submit button icon solid fa-envelope">Enviar Mensaje</a>
										</div>
									</div>
								</form>
							</section>
						</div>
						<div class="col-6 col-12-medium">
							<section>
								<p>En este blog podras ver los temas relacionados a cliente servidor y conocer mas a fondo acerca de ellos</p>
								<div class="row">
									<div class="col-6 col-12-small">
										<ul class="icons">
											<li class="icon solid fa-home">
												Prolongación 5 de Mayo #10,<br />
												Colonia Felipe Villanueva, Centro Tecámac,<br />
												Estado de México  
											</li>
											<li class="icon solid fa-phone">
												<a href="tel:+5585281986">(55) 8528-1986</a>
											</li>
											<li class="icon solid fa-envelope">
												<a href="mailto:cesaryairlopez48@gmail.com">cesaryairlopez48@gmail.com</a>
											</li>
										</ul>
									</div>
									<div class="col-6 col-12-small">
										<ul class="icons">
											<li class="icon brands fa-twitter">
												<a href="https://twitter.com/github">@Github</a>
											</li>
											<li class="icon brands fa-instagram">
												<a href="https://www.instagram.com/yairmellody/">yairmellody</a>
											</li>
											<li class="icon brands fa-facebook-f">
												<a href="https://www.facebook.com/criis.bautista.96">Criis Bautista</a>
											</li>
											<li class="icon brands fa-facebook-f">
												<a href="https://www.facebook.com/rootssb.grft">Yair Tanner</a>
											</li>
										</ul>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div id="copyright" class="container">
					<ul class="links">
						<li>&copy; Los Capos. Todos los derechos reservados.</li>
					</ul>
				</div>
			</section>

	

		</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.dropotron.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>