@extends('layouts.app')
<html>
<body>
@section('content')
  <header>
  @include('searchBar')
    @if(checkPermission(['student','employee','bde']))
    @foreach($product as $product)
      <?php
        $name = $product->name;
        $quantity = $product->quantity;
        $image = $product->image;
      ?>
      <div class="produits" style="left:-20%;">
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <div class="card-body" style="position:relative; width:60%;">
                <h4 class="card-title" name ="name" >{{$name}}<? return $name ?></h4>
                <img class= "{{$name}}" src="{{$image}}" class="d-block w-100" style="width:50%; position:relative;" alt="...">
              </div>
              <div class="card-footer" style=" height:60%;">
                <a href="#" class="btn btn-primary" style="position:relative;">{{$quantity}}<? return $price ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach 
    <div class="finishbasket" style="top:50%;">
    <form method="post" action="{{('finish-basket')}}">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary mb-2" style="position:relative;left:80%;">Finaliser le panier</button>
    </form>
    <form method="post" action="{{('del-basket')}}">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary mb-2"style="position:relative;left:80%;">Supprimer le panier</button>
    </form>
</div>
    @else
      <?php 
        header('Location: login'); 
        exit();
      ?>
      <p>Vous n'etes pas connecté, vous ne pouvez donc pas acceder a cette page.</p><br>
      <p>Pour vous connecter cliquez <a href="{{('login')}}"> ici</a></p>
    @endif
  </header>

  @endsection
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</body>
</html>