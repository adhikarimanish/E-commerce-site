@extends('layout')

@section('body')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Add New Player</h1>
	<form action="{{Route('kheladi.store')}}" method="post">
		<p>
				Name : <input type="text" name="name" value="{{old('name')}}" >
				@foreach($errors->get('name') as $n)
							<span style="color:red;">*{{$n}}<span>
						@endforeach
			</p>
			<p>
				game: <input type="text" name="game"  value="{{old('game')}}">
				@foreach($errors->get('game') as $g)
							<span style="color:red;">*{{$g}}<span>
						@endforeach
			</p>
			<input type="submit" value="Add" class="btn btn-primary btn-sm" >
			{{csrf_field()}}
		</form>
</body>
</html>

@endsection