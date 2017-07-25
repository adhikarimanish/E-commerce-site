<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create City</title>
	<link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">

		@if(count($errors) > 0)
			<!-- {{ var_dump($errors->all()) }} -->
			<div class="alert alert-danger">
				@foreach($errors->all() as $e)
					{{$e}} <br>
				@endforeach
			</div>

		@endif

		<h1>Create new City</h1>
		<form action="/city/store" method="post">
			<p>
				City Name : <input type="text" name="city" value="{{old('city')}}" >
				@foreach($errors->get('city') as $c)
							<span style="color:red;">*{{$c}}<span>
						@endforeach
			</p>
			<p>
				Zone : <input type="text" name="zone"  value="{{old('zone')}}">
				@foreach($errors->get('zone') as $z)
							<span style="color:red;">*{{$z}}<span>
						@endforeach
			</p>
			<input type="submit" value="Add" class="btn btn-primary btn-sm" >
			{{csrf_field()}}
		</form>
	</div>
</body>
</html>