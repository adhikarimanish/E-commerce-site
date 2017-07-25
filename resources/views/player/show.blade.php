@extends('layout')

@section('body')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<br>
<center>
<a href="{{route('kheladi.index')}}" class="btn btn-primary btn-sm">Back</a>
</center>
<div class="col-lg-offset-4 col-lg-4">

<h1>{{$data->name}}</h1>
<p>{{$data->game}}</p>

</div>
</br>


</body>
</html>

@endsection


