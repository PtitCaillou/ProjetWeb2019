@extends('layouts.app')
<html>

<body>
  
@section('li')
  <header>
    <div class="menu-top">
      @if(checkPermission(['bde']))
      <a href="{{('productadd')}}" class="btn btn-lg active" role="button" aria-pressed="true" style="position:relative; background-color: rgb(238, 193, 94); left:160%;"> Ajouter un produit</a>      @endif
      <a href="{{('basket')}}" class="btn btn-lg active" role="button" aria-pressed="true" style="position:relative; background-color: rgb(238, 193, 94); left:200%;"> Panier</a>
    </div>
  </header>
@endsection
 
@section('content')
  @include('searchBar')
  @include('goodiesDuMois')
  <h2>BOUTIQUE</h2>
  @foreach($product as $product)
  <?php 
        $id = $product->id;
        $name = $product->name;
        $price = $product->price;
        $description = $product->description;
        $image = $product->image;
      ?>
  <div class="produits">
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title" name="name">{{$name}}
            <? return $name ?>
          </h4>
          <img class="pullbleu" src="{{$image}}" class="d-block w-100" alt="...">
        </div>
        <div class="card-footer">
          <p>{{$description}}</p>
          <a href="#" class="btn btn-primary">{{$price}}<? return $price ?></a>
          <form method="post" action="{{('add-basket')}}">
            {{ csrf_field() }}
            <input type="hidden" readonly class="form-control-plaintext" name="add" id="name" value="{{ $product->id }}">
            <button type="submit" class="btn btn-primary mb-2">Ajouter au panier</button>
          </form>
          @if(checkPermission(['employee']))
          <a href="#" class="btn btn-primary">Signaler</a> @endif @if(checkPermission(['bde']))
          <form method="post" action="{{('hideproduct')}}">
            {{ csrf_field() }}
            <input type="hidden" readonly class="form-control-plaintext" name="hide" value="{{ $product->id }}">
            <button type="submit" class="btn btn-primary mb-2">Masquer</button>
          </form>
          @endif
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
  crossorigin="anonymous"></script>

</html>