<html>
<head><title>CRUD</title>
	
<link href="{{url('css/style.css')}}" rel="stylesheet">
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
</head>

<body>
<div class="container">
	@include('templates.header')
	@yield('content')
	@include('templates.footer')
</div>
</body>