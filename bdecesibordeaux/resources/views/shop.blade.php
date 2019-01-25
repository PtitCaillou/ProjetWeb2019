<html>
<head>
    <title>Boutique</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
   <!-- Page Content -->

<!-- We check if one user is connected -->
        @if(Auth::check())

<!-- If there is an user connected, we get is role id -->
<!-- When this id is equal to 1 he has a student status. So we create the page for a student -->
 @if( Auth::user()->role_id == '1'){
 <header>
        <h3>Boutique</h3>
        <!-- Button to have an access to the user's basket -->
         <div class="basket">
           <a href="{{('basket')}}" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"><i class="fas fa-shopping-basket" style="max-width: 20%; position: relative; right: 15%"></i> Panier</a>
        </div>
                </header>
  
        @include('menu')

        @include('goodiesDuMois')
        <!-- creating the product view -->
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
   }

   <!-- When this id is equal to 2 he has a BDE member status. So we create the page for a BDE member -->
 @elseif( Auth::user()->role_id == '2'){
  <header>
        <h3>Boutique</h3>
       <!--  adding button to add an article  -->
        <div class="add-article">
          <a href="{{('add.product')}}" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);">Ajouter un article</a>     
           </div>
        <div class="basket">
           <a href="{{('basket')}}" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"><i class="fas fa-shopping-basket" style="max-width: 20%; position: relative; right: 15%"></i> Panier</a>
        </div>
       
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
              <div class ="hide">
                <!-- adding button to hide products -->
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
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
              <div class ="hide">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
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
              <div class ="hide">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
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
              <div class ="hide">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
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
              <div class ="hide">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
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
              <div class ="hide">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
            </div>
          </div>
</div>
</div>
</div>
 
        <!-- /.col-md-4 -->
 }
  <!-- When the id is equal to 3 he has a employee status. So we create the page for an employee -->
 @elseif( Auth::user()->role_id == '3'){
  <h3>Boutique</h3>
   <div class="basket">
           <a href="{{('basket')}}" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"><i class="fas fa-shopping-basket" style="max-width: 20%; position: relative; right: 15%"></i> Panier</a>
        </div>
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
              <div class ="hide">
               <!--  Changing button to send an e-mail to a BDE member -->
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
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
              <div class ="hide">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
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
              <div class ="hide">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
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
              <div class ="hide">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
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
              <div class ="hide">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
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
              <div class ="hide">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
            </div>
          </div>
</div>
</div>
</div>
 
        <!-- /.col-md-4 -->

 
<!--      <div class="container">
   <footer>
       @extends('footer')
   </footer>
    </div> -->
</body>
 }
@endif
@else
 <header>
        <h3>Boutique</h3>
        <!-- Button to have an access to the user's basket -->
                </header>
  
        @include('menu')

        @include('goodiesDuMois')
        <!-- creating the product view -->
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
</div>
</div> 

        <!-- /.col-md-4 -->

 
     <div class="container">
        <footer>
            @extends('footer')
        </footer>
    </div>
</body>
   }
@endif


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</html>


 