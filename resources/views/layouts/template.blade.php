<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<title>
    @yield('title')
</title>

    <body>
    {{--<?php include('../components/navbar.php'); ?>--}}
        <div>
            <a href="{{ route('home') }}">Home</a> &emsp;
            <a href="{{ route('service') }}">Services</a> &emsp;
            <a href="{{ route('teams') }}">Our Teams</a> &emsp;
            <a href="{{ route('aboutus') }}">About Us</a> &emsp;
            <a href="{{ route('contact') }}">Contact Us</a>
        </div>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>