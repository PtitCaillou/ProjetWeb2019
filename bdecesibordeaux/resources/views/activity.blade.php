@extends('layouts.app') 
@section('li')
<html>

<body>
    @if(checkPermission(['bde']))
        <a href="{{('add.activity')}}" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"> Ajouter une activité</a>
    @endif
    <form style="position: relative; left: 80%; margin-top: 1rem; max-width: 20%;" action="{{('searchActivity')}}" id='search'
        autocomplete="true">
    </form>
@endsection
 
@section('content')
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
    @include('searchBar')
    @include('eventDuMois')
        <h2>Autres activités</h2>
        @foreach($event as $event)
        <div class="event">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title"> {{ $event->name }} </h4>
                            <img class="night" src="{{ $event->media }}" class="d-block w-100" alt="...">
                            <p class="card-text"> {{ $event->description }}</p>
                            <form method="post" action="{{('likeactivity')}}">
                                {{ csrf_field() }}
                                <input type="hidden" readonly class="form-control-plaintext" name="hide" value="{{ $event->id }}">
                                <button type="submit" class="btn btn-primary mb-2">Like : {{ $event->like }}</button>
                            </form>
                            <form method="post" action="{{('description')}}">
                                {{ csrf_field() }}
                                <input type="hidden" readonly class="form-control-plaintext" name="description" id="name" value="{{$event->id}}">
                                <button type="submit" class="btn btn-primary mb-2">Voir plus</button>
                            </form>
                            @if(checkPermission(['employee']))
                            <a href="{{('warning')}}" class="btn btn-primary">Signaler</a> @endif @if(checkPermission(['bde']))
                            <form method="post" action="{{('hide')}}">
                                {{ csrf_field() }}
                                <input type="hidden" readonly class="form-control-plaintext" name="id" id='id' value="{{$event->id}}">
                                <button type="submit" class="btn btn-primary mb-2">Masquer</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
  crossorigin="anonymous"></script>
</body>
</html>