@extends('layouts.template')

@section('title')
    Services
@endsection

@section('content')

    <p>This is product Service page. you can find the services here.</p>
    @foreach($cars as $d)
	<li>{{ $d }}</li>
	<?php 
		echo "<br>" 
	?>
    @endforeach
@endsection
