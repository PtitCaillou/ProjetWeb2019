@extends('layouts.app')
<html>
<body>
  @section('li')
  <header>
    <div class= "menu-top">
      <a href="{{('productadd')}}" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"> Ajouter un produit</a>
      <a href="{{('basket')}}" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"> Panier</a>

      @include('searchBar')
       <form style= "position: relative; margin-left: 120%; margin-top: -1rem; max-width: 20%;" action="{{('filter')}}" >
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Options</label>
      </div>  
      <select class="custom-select" id="inputGroupSelect01">
        <option selected>Choose...</option>
        @foreach($prod as $prod)
          <option name="filterCat" value="">
            {{$prod->type}}
          </option>
        @endforeach
        <option>Prix par ordre croissant</option>
        <option>Prix par ordre décroissant</option>
      </select>
    </div>
    <button class="btn btn-sm" style="background-color: rgb(238, 193, 94);">Filtrer</button>
  </form>
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
</html>