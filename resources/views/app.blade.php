<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style/global.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style/header.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style/footer.css') }}" >

    <!-- font-awesome -->
    <link rel="stylesheet" href="{{ asset('/plugins/fa/css/font-awesome.min.css') }}">
	<!-- Fonts -->
	{{--<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>--}}
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    @yield('style')

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    @include('partials.topbar')

    @include('partials.header')

	@yield('content')

    @include('partials.footer')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    @yield('script')
</body>
</html>
