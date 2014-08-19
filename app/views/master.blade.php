<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>How to you feel today?</title>
	{{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}

    {{ HTML::script('/css/jquery.carousel.fullscreen.css') }}
    {{ HTML::style('/css/main.css') }}



</head>
<body>
    @include('partials.errors')
    @yield('content')

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    {{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js') }}
    {{ HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js') }}

    {{ HTML::script('http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js') }}
    {{ HTML::script('/js/jquery.counterup.min.js') }}
    {{ HTML::script('js/jquery.carousel.fullscreen.js') }}


    <script>
        $( document ).ready(function() {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>

</body>
</html>
