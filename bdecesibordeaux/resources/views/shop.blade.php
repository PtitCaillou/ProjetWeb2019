@extends('layouts.app')
<html>
<body>
  @section('li')
  <header>
    <div class= "menu-top">
      <a href="{{('add.product')}}" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"> Ajouter un produit</a>
      <a href="{{('basket')}}" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"> Panier</a>
      @include('searchBar')
</a>
</div>
  </header>
  @endsection
  @section('content')
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
              <h4 class="card-title" name ="name" >{{$name}}<? return $name ?></h4>
              <img class= "pullbleu" src="{{$image}}" class="d-block w-100" alt="...">
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
                <a href="#" class="btn btn-primary">Signaler</a>
              @endif
              @if(checkPermission(['bde']))
                <a href="#" class="btn btn-primary">Masquer</a>
              @endif
            </div>
          </div>
        </div>
      </div>
    @endforeach
  @endsection
</body>
</html>