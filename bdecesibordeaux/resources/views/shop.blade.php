<html>
<head>
    <title>Boutique</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
   <!-- Page Content -->

   <header>
        <h3>Boutique</h3>
</header>
      

        @include('menu')

        @include('goodiesDuMois')
      <!-- Content Row -->
        <div class="produits">
      <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Pull Bleu</h4>
              <img class= "pullbleu" src="css/pull.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">20€</a>
              <a href="#" class="btn btn-primary">Ajouter au panier</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Pull Rouge</h4>
              <img class= "pullbleu" src="css/pull.jpg" class="d-block w-100" alt="...">
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">25€</a>
              <a href="#" class="btn btn-primary">Ajouter au panier</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Pull Gris</h4>
              <img class= "pullbleu" src="css/pull.jpg" class="d-block w-100" alt="...">
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">30€</a>
              <a href="#" class="btn btn-primary">Ajouter au panier</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Mug Cesi</h4>
              <img class= "pullbleu" src="css/pull.jpg" class="d-block w-100" alt="...">
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">10€</a>
              <a href="#" class="btn btn-primary">Ajouter au panier</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
                <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Thermos Cesi</h4>
              <img class= "pullbleu" src="css/pull.jpg" class="d-block w-100" alt="...">
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">7,99€</a>
              <a href="#" class="btn btn-primary">Ajouter au panier</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
                <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Bracelet Cesi</h4>
              <img class= "pullbleu" src="css/pull.jpg" class="d-block w-100" alt="...">
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">3€</a>
              <a href="#" class="btn btn-primary">Ajouter au panier</a>
            </div>
          </div>
</div>
 
        <!-- /.col-md-4 -->

 
     <div class="container">
        <footer>
            @extends('footer')
        </footer>
    </div>
</body>
</html>


 