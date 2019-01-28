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
             <form  style="position: relative; left: 80%; margin-top: 1rem; max-width: 20%;" action="{{('searchActivity')}}" id='search' autocomplete="true" >
        @include('searchBar')
        </form>
       <script type="text/javascript">

        var url = "{{ route('autocompleteActivity') }}";

        $('#search_text').typeahead({

            source:  function (query, process) {

            return $.get(url, { query: query }, function (data) {

                    return process(data);

                });

            }

        });

    </script>
           </script> 
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
              <form method="post" action="{{('description')}}">
                 {{ csrf_field() }}
              <input type="hidden" readonly class="form-control-plaintext" name="description" id="name" value="{{$event->id}}">
               <button type="submit" class="btn btn-primary mb-2">Voir plus</button>
              </form>
               @if(checkPermission(['employee']))
              <a href="#" class="btn btn-primary">Signaler</a>
              @endif
              @if(checkPermission(['bde'])) 
              <form method="post" action="{{('hide')}}">
                {{ csrf_field() }}
                <input type="hidden" readonly class="form-control-plaintext" name="id" id ='id' value="{{$event->id}}">
                <button type="submit" class="btn btn-primary mb-2">Masquer</button>
              </form>
              @endif
            </div>
          </div>
        </div>

    </div>
    </div>
    @endforeach
</main>

 <div class="container">
        <footer>
            @extends('footer')
        </footer>
    </div>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet"href="//codeorigin.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</body>
</html>
 