<!doctype html>
<html lang="en" class="no-js">
<head>
	@include('partials.metas')
	@include('partials.styles')
</head>
<body>
	@yield('content')
</body>
<script src="{{ elixir('js/custom-scripts.min.js')}}"></script>
</body>
</html>