<!DOCTYPE html>
<html>
<head>
	<title>Activités</title>
</head>

<body>
	<!-- We check if one user is connected -->
        @if(Auth::check())

<!-- If there is an user connected, we get is role id -->
<!-- When this id is equal to 1 he has a student status. So we create the page for a student -->
 @if( Auth::user()->role_id == '1'){
<header>
	<h3>Activités</h3>
	 @include('menu')
	
</header>
@yield('body')
<main>
	@include('eventDuMois')

	<h2>Autres activités</h2>
	<div class="event">
 <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
          </div>
        </div>

 		<div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
          </div>
        </div>

         <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
          </div>
        </div>

          <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
          </div>
        </div>

         <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
          </div>
        </div>

    </div>
    </div>
</main>

 <div class="container">
        <footer>
            @extends('footer')
        </footer>
    </div>

 <!-- When this id is equal to 2 he has a BDE member status. So we create the page for a BDE member -->
    @elseif( Auth::user()->role_id == '2')
    <header>
	<h3>Activités</h3>
	<div class="add-article">
		 <a href="{{('add.product')}}" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);">Ajouter une activité</a> 
 	 </div>
	 @include('menu')
	 
</header>

<main>
	@include('eventDuMois')

	<h2>Autres activités</h2>
	<div class="event">
 <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
          </div>
        </div>

 		<div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
          </div>
        </div>

         <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
          </div>
        </div>

          <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
          </div>
        </div>

         <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
          </div>
        </div>

    </div>
    </div>
</main>

 <div class="container">
        <footer>
            @extends('footer')
        </footer>
    </div>

    @elseif( Auth::user()->role_id == '3')
    <header>
	<h3>Activités</h3>
	 @include('menu')
	 
</header>

<main>
	@include('eventDuMois')

	<h2>Autres activités</h2>
	<div class="event">
 <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
          </div>
        </div>

 		<div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
          </div>
        </div>

         <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
          </div>
        </div>

          <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
          </div>
        </div>

         <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
          </div>
        </div>

    </div>
    </div>
</main>

 <div class="container">
        <footer>
            @extends('footer')
        </footer>
    </div>
    @endif
    @endif

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css/style.css">

</body>
</html>
 