@if(checkPermission(['bde']))
<head>
	<title>Ajouter un produit</title>
</head>

<body>
	<header>
		<h1>Ajouter un produit</h1>
		@include('menu')
	</header>
	<main>
		@yield('body')
		<form style="margin-top: 5rem;" method="POST" action="{{('add-product')}}">
	<div class="form-group">
    <label for="exampleFormControlInput1" style="color: white; position: relative; left: 20%; ">Nom du produit</label>
    <input type="text" name="name" class="form-control" style="position: relative; left: 20%; max-width: 50%; " id="exampleFormControlInput1" placeholder="Titre">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" style="color: white; position: relative; left: 20%; ">Prix</label>
    <input type="price" name="price" class="form-control" style="position: relative; left: 20%; max-width: 50%; " id="exampleFormControlInput1" placeholder="Titre">
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1" style="color: white; position: relative; left: 20%; ">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" style="position: relative; left: 20%; max-width: 50%;" rows="3"></textarea>
  </div>
  <select style="position: relative; left: 20%; max-width: 50%;" name="type" class="custom-select">
  <option selected>Choisir le type de produit</option>
  <option value="1">Mug</option>
  <option value="2">Pull</option>
  <option value="3">Tee shirt</option>
</select>
  <div class="form-group">
    <label for="exampleFormControlFile1">Ajouter une image</label>
    <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1" style=" position: relative; left: 20%; max-width: 50%;">
  </div>
	<button type="submit" class="btn btn-primary" style= "position: relative; left: 20%;">Ajouter le produit</button>
</form>
	</main>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css/style.css">
</body>
@elseif(checkPermission(['student','employee']))
<p>Vous n'etes pas autorisé a acceder a cette page.</p>
<a href="{{('activity')}}">Retour</a>
@else
<?php
	header('Location : login');
	exit();
?>
@endif