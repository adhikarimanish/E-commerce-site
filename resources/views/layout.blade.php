<!DOCTYPE html>
<html>
<head>
	<title>My Awesome Blog</title>
	<link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/bootstrap.min.css')}}">
</head>
<body>

@include('partials.nav');
<div class="container">

 @yield('body')
 </div>
 @include('partials.footer')

</body>
</html>