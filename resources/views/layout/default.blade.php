<!DOCTYPE html>
<html>
<head>
	<title>My app - @yield('title')</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
	<h1>title</h1>
	@section('sidebar')

		<a href="{{route('home')}}">Accueil</a>
		<a href="{{route('about')}}">A propos de moi</a>
		<a href="{{route('portfolio')}}">Portfolio</a>
	@show

	<div class="container">
		@yield('content')
	
	</div>

</body>
</html>