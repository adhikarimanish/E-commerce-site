@extends('layout')

@section('body')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{URL('assets/css/bootstrap.min.css')}}">
</head>
<body>

	
	<div class="container">
		<a href="{{route('kheladi.create')}}"class="btn btn-primary btn-sm">Add new</a>
		<h1> From Player Controller Index </h1>

		@foreach( $players as $player )
			<h2>Name: {{ $player['name'] }}</h2>
			<p>Game : {{ $player['game'] }}</p>
			
			<form action="{{route('kheladi.destroy',$player['id'])}}" method="post">
				<input type="submit" value="Delete" class="btn btn-danger btn-sm">
				{{ method_field('DELETE') }}
				{{ csrf_field() }}

			</form>
			<a href="{{route('kheladi.show',$player['id'])}}" class="btn btn-info btn-sm">Show</a>
			<a href="{{route('kheladi.edit',$player['id'])}}" class="btn btn-info btn-sm">Edit</a>
		@endforeach

		<p>
		{{ $players->links() }}
		</p>
	</div>
</body>
</html>
@endsection