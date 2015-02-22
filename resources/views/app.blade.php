<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/all.css">
</head>
<body>

	@include('partials.nav')

		<div class="container">
			@include('flash::message')

			@yield('content')
		</div>

		<script src="/js/all.js"></script>

		<script>
			$('#flash-overlay-modal').modal();
		</script>

		@yield('footer')

</body>
</html>