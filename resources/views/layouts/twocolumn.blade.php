
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
<!-- main content -->
	<div class="container">
		<div class="main">
		@yield('content')
		</div>

<!-- sidebar content -->
		<div class="sidebar-wrap">
			<div class="sidebar">
			@yield('sidebar')
			</div>
		</div>	
	</div>
</div><!--Content-wrap end -->

	<footer class="row">
	@include('includes.footer')
	</footer>
</body>
</html>