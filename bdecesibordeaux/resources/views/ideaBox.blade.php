@extends('layouts.app') 
@section('li')
<html>
<body>    
@section('content')
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" style="background-color: rgb(238, 193, 94)" type="button" id="dropdownMenu1"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Filtrer
                    <span class="caret"></span>
            </button>
        <ul class="dropdown-menu" style="background-color: rgb(238, 193, 94)" aria-labelledby="dropdownMenu1">
            <li>
                <p href="#" title="Lien 1">Catégories</p>
            </li>
            <li>
                <p href="#" title="Lien 2">Soirées</p>
            </li>
            <li>
                <p href="#" title="Lien 3">Manifestations</p>
            </li>
            <li>
                <p href="#" title="Lien 4">Associations</p>
            </li>
        </ul>
    </div>
    <div class="container">
        @foreach($idea as $idea)
        <?php 
                $id = $idea->id;
                $name = $idea->name;
                $description = $idea->description;
                $type = $idea->type;
                $image = $idea->image;
                $user = $idea->user;
                $likes = $idea->like;
            ?>
        <div class="well">
            <div class="idea">
                <img class="idea-image" src="{{ $image }}">
                <div class="media-body">
                    <h4 class="text-left">{{ $name }}</h4>
                    <p class="text-left">{{ $description }}</p>
                    <form method="post" action="{{('likeidea')}}">
                        {{ csrf_field() }}
                        <input type="hidden" readonly class="form-control-plaintext" name="hide" value="{{ $idea->id }}">
                        <button type="submit" class="btn btn-primary mb-2">Vote : {{ $likes }}</button>
                    </form>
                    <p class="text-right">Autheur : {{ $user }}</p>
                    @if(checkPermission(['employee']))
                    <a href="#" class="btn btn-primary">Signaler</a> @endif @if(checkPermission(['bde']))
                    <form method="post" action="{{('hideidea')}}">
                        {{ csrf_field() }}
                        <input type="hidden" readonly class="form-control-plaintext" name="hide" value="{{ $idea->id }}">
                        <button type="submit" class="btn btn-primary mb-2">Masquer</button>
                    </form>
                    <form method="post" action="{{('acceptidea')}}">
                        {{ csrf_field() }}
                        <input type="hidden" readonly class="form-control-plaintext" name="hide" value="{{ $idea->id }}">
                        <button type="submit" class="btn btn-primary mb-2">Accepter</button>
                    </form>
                    @endif
                    <ul class="list-inline list-unstyled">
                        <div class="comments">
                            <li><span><p class="like"></span></li>
                            <!-- <img class="thumb-up" src="images/like.png"> -->
                            <span><p class="comment"></p></span>
                        </div>
                        <i class="glyphicon glyphicon-thumbs-up"></i>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="body-idea">
        <form method="post" action="{{('add-idea')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <p>Titre de l'idée : </p>
            <input type="text" class="form-control" name="titre">
            <p>Description de l'idée : </p>
            <input type="text" class="form-control" name="description">
            <p>Image : </p>
            <input type="file" class="form-control-file" name="image" accept="image/*">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
  crossorigin="anonymous"></script>
</body>
</html>