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
                    <p class="text-left">Vote : {{ $likes }}</p>
                    <p class="text-right">Autheur : {{ $user }}</p>
                    @if(checkPermission(['employee']))
                    <a href="#" class="btn btn-primary">Signaler</a>
                    @endif @if(checkPermission(['bde']))
                    <a href="#" class="btn btn-primary">Masquer</a>
                    <a href="#" class="btn btn-primary">Accepter</a>
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




</body>

</html>