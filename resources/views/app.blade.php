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
				<h1 class="icon-03-1"></h1>
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
	</body>
</html>