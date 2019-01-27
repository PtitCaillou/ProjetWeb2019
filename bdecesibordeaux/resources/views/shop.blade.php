<html>
<head>
    <title>Boutique</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
   <!-- Page Content -->

   <header>
        <h3>BOUTIQUE</h3>
</header>
      
<!-- We check if one user is connected -->

<!-- If there is an user connected, we get is role id -->
<!-- When this id is equal to 1 he has a student status. So we create the page for a student -->

 <header>
        <h3>Boutique</h3>
        <!-- Button to have an access to the user's basket -->
         <div class="basket">
           <a href="{{('basket')}}" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"><i class="fas fa-shopping-basket" style="max-width: 20%; position: relative; right: 15%"></i> Panier</a>
        </div></a>
        @if(checkPermission(['bde']))
        <div class="add-article">
        <a href="{{('add.product')}}" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"> Ajouter un produit</a>
        </div>
        @endif
                </header>
        @include('menu')
        <form  style="position: relative; left: 80%; margin-top: 1rem; max-width: 20%;" action="{{('searchShop')}}" id='search' class="typehead">
        @include('searchBar')
        </form>
       <script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typehead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>
        <h2>Eléments les plus vendus</h2>
<div class= "carrousel">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
       <img class= "carrousel" src="css/PullCesi.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="carrousel" src="css/Capture.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
        @include('goodiesDuMois')
        @foreach($product as $product)
        <?php $name = $product->name;
        $price = $product->price;
        ?>
        <!-- creating the product view -->
      <!-- Content Row -->
        <div class="produits">
      <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title" name ="name" >{{$name}}<? return $name ?></h4>
              <img class= "pullbleu" src="css/pull.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">{{$price}}<? return $price ?></a>
              <a href="{{('add-basket')}}" class="btn btn-primary">Ajouter au panier</a>
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
</div>
@endforeach
 
        <!-- /.col-md-4 -->
 
     <div class="container">
        <footer>
            @extends('footer')
        </footer>
      </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</html>


 