<!DOCTYPE html>
<html lang="es">
	<head>
		@include('partials.metas')
		@include('partials.styles')
	</head>
	<body>
		<main class="cd-main">
			<header>
				<span class="icon-01-1"></span>
				@include('partials.social-menu')
				<div class="carousel-stuff">
				  <div><h1 class="icon-03-1"></h1></div>
				  <div>
				  	<p><strong>Visión</strong><br>Promover la cultura del diseño entre la comunidad de diseñadores y la población local.</p> <br><br>
				  	<p><strong>Misión</strong><br>Generar cultura del diseño en la comunidad por medio de talleres, conferencias, actividades, muestras, etc.</p>
				  </div>
				</div>
			</header>
			@include('partials.items')
			
		</main> <!-- .cd-main -->

		@include('partials.contact-form')

		<hr>
		
		<footer>
			<div class="icon-03-1"></div>
			@include('partials.social-menu')
		</footer>
		<div class="cd-folding-panel">
			
			<div class="fold-left"></div> <!-- this is the left fold -->
			
			<div class="fold-right"></div> <!-- this is the right fold -->
			
			<div class="cd-fold-content">
				<!-- content will be loaded using javascript -->
			</div>

			<a class="cd-close" href="#0"></a>
		</div> <!-- .cd-folding-panel -->

		<script src="{{ elixir('js/custom-scripts.min.js')}}"></script>

		<!--Google analytics-->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-55515309-9', 'auto');
		  ga('send', 'pageview');
		</script>
	</body>
</html>