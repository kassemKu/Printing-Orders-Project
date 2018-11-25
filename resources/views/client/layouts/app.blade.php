<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl" class="uk-background-muted">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>
	{{-- Fonts --}}
	<link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=bein" />
	
	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="uk-background-muted uk-height-viewport">
	<div id="app">
		
		<header class="uk-background-default">
			@include('client.partials.navs.mainNav')
			<hr class="uk-margin-remove">
		</header>
		<main class="uk-container uk-margin">
			@yield('content')
		</main>
		<footer class="uk-container-expand uk-background-default">

		</footer>
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>