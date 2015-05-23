<!doctype html>
<html>
<head>
<title>Superberlin - @yield('title')</title>
	@include('includes.head')
</head>
<body>

	<header class="row">
		@include('includes.header')
	</header>




			@yield('content')


	<footer class="row">
		@include('includes.footer')
	</footer>

</body>
</html>