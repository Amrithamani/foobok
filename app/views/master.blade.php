<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'Foobooks')</title>

    <meta charset='utf-8'>
    <link rel='stylesheet' href='/css/foobooks.css' type='text/css'>

    @yield('head')

</head>
<body>

	<a href='/'><img class='logo' src='images/laravel-foobooks-logo@2x.png' alt='Foobooks logo'>

	<nav>
		<ul>
			<li><a href='/list'>List All</a></li>
			<li><a href='/add'>+ Add Book</a></li>
	    </ul>
	</nav>	
		
    @yield('content')
	
	@yield('body')

</body>
</html>