<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>How to you feel today?</title>
	{{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}
    {{ HTML::style('/css/main.css') }}
</head>
<body>
    @include('partials.errors')
    @yield('content')

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    {{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js') }}
    {{ HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js') }}


</body>
</html>
