<!DOCTYPE html>
<html>
<head>
	<title>Activités</title>
</head>

<body>
	<!-- We check if one user is connected -->

<!-- If there is an user connected, we get is role id -->
<!-- When this id is equal to 1 he has a student status. So we create the page for a student -->
<header>
	<h3>Activités</h3>
	 @if(checkPermission(['bde']))
        <div class="add-article">
        <a href="{{('add.activity')}}" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"> Ajouter une activité</a>
        </div>
        @endif
             @include('menu')
             <form  style="position: relative; left: 80%; margin-top: 1rem; max-width: 20%;" action="{{('searchActivity')}}" id='search' autocomplete="true" class="typehead">
        @include('searchBar')
        </form>
           <!-- <script type="text/javascript">
               var path = "{{ route('autocompleteActivity') }}";
               $('input.typehead').typeahead({
                   source:  function (query, process) {
                   return $.get(path, { query: query }, function (data) {
                return process(data);
            });
                   }
               });
           </script> -->
@yield('body')
<main>
	@include('eventDuMois')

	<h2>Autres activités</h2>
  @foreach($event as $event)
	<div class="event">
 <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title"> {{ $event->name }} </h4>
              <img class= "night" src="{{('css/event.jpg')}}" class="d-block w-100" alt="...">
              <p class="card-text"> {{ $event->description }}</p>
              <a href="#" style="color: blue;">Voir plus</a>
               @if(checkPermission(['employee']))
              <a href="#" class="btn btn-primary">Signaler</a>
              @endif
              @if(checkPermission(['bde']))
              <a href="#" class="btn btn-primary">Masquer</a>
              @endif
            </div>
          </div>
        </div>
@endforeach
    </div>
    </div>
</main>

 <div class="container">
        <footer>
            @extends('footer')
        </footer>
    </div>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css/style.css">

</body>
</html>
 