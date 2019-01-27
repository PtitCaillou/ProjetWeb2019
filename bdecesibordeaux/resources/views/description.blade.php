<!DOCTYPE html>
<html>


<head>
	<title>Description d'activité</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<header>
		<h1>Description</h1>
		@include('menu')
	</header>
	<main>
		@foreach($event as $event)
		<h2>{{$event->name}}</h2>
		<p>{{$event->price}}</p>
		<p style="color: white">{{$event->description}}</p>
		<a href="#"><img src="#"> Album</a>
		@endforeach
	</main>
	@include('footer')
</body>
</html>