@extends('layout')

@section('body');

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Edit Player</h1>
	<form method="post" action="{{Route('kheladi.update',$data['id'])}}">
	<p>Name:</p>
	<input type="text" name="name" value="{{$data->name}}"><br><br>
	
	<p>Game</p>
	<input type="text" name="game" value="{{$data->game}}"><br><br>
	


	<input type="submit" value="Update" class="btn btn-primary"><br><br>
				{{ method_field('PUT') }}

	{{csrf_field()}}
</form>
</body>
</html>

@endsection

