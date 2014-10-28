<!DOCTYPE html>
<html>
<head>
	
    <title>@yield('title', 'CSCIE-15 Course')</title>
  	<meta name="description" content="website description" />
  	<meta name="keywords" content="website keywords, website keywords" />
  	<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    @yield('head')
</head>
<body>

    @yield('logo')

    @yield('menu')

    @yield('content')

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>

    @yield('footer')

</body>
</html>