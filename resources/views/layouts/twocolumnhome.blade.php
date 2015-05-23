
<html>
<head>
<title>Superberlin - @yield('title')</title>
@include('includes.head')

</head>
<body>
	<header class="row">
		@include('includes.header')
	</header>
<!--Two column Wrap-->
<div class="master-wrap">
@yield('content')
	</div><!--Content-wrap end -->

	<footer class="row">
	@include('includes.footer')
	</footer>
</body>
</html>