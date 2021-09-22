<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
    <body>
        @section('topbar')
        <a>Home</a> &emsp;
        <a>our</a>
        {{--<a href="{{ route('home') }}">Home</a>
        <a href="{{ route('service') }}">Service</a>
        <a href="{{ route('ourTeam') }}">Our Teams</a>
        <a href="{{ route('about') }}">About Us</a>
        <a href="{{ route('contact') }}">Contact Us</a>--}}

        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>