@extends('layout')

@section('body')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="{{Route('blog.store')}}" method="post">
	<p>Title:</p>
	<p>
	 <input type="text" name="title" value="{{old('title')}}" >
				@foreach($errors->get('title') as $t)
							<span style="color:red;">*{{$t}}<span>
						@endforeach
			</p>
	<p>Description</p>
	<textarea class="form-control" name="description" value="{{old('title')}}">
		@foreach($errors->get('description') as $desc)
							<span style="color:red;">*{{$desc}}<span>
						@endforeach
	</textarea><br><br>


	<input type="submit" value="save" class="btn btn-primary"><br><br>
				
	{{csrf_field()}}
</form>

</body>
</html>
@endsection
