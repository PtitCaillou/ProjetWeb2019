<html>
<head>
    <title>Votre panier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <header>
    <h3>PANIER</h3>
    @if(checkPermission(['student','employee','bde']))
    


    @foreach($product as $product)
      <?php
        $name = $product->name;
        $quantity = $product->quantity;
        $image = $product->image;
      ?>
      <div class="produits">
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title" name ="name" >{{$name}}<? return $name ?></h4>
                <img class= "{{$name}}" src="{{$image}}" class="d-block w-100" alt="...">
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">{{$quantity}}<? return $price ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach 
    <form method="post" action="{{('finish-basket')}}">
      {{ csrf_field() }}
      <button type="submit" class="btn btn-primary mb-2">Finaliser le panier</button>
    </form>

    <form method="post" action="{{('del-basket')}}">
      {{ csrf_field() }}
      <button type="submit" class="btn btn-primary mb-2">Supprimer le panier</button>
    </form>

    @else
      <?php 
        header('Location: login'); 
        exit();
      ?>
      <p>Vous n'etes pas connecté, vous ne pouvez donc pas acceder a cette page.</p><br>
      <p>Pour vous connecter cliquez <a href="{{('login')}}"> ici</a></p>
    @endif
  </header>


  <div class="container">
    <footer>
      @extends('footer')
    </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</body>
</html>