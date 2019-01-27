<head>
	<title>Boite à idées</title>
</head>
<body>
<header>
    <h3>Boite à idées</h3>
     <a href="<?php echo e(('basket')); ?>" class="btn btn-lg active" style= "margin-left:75%"role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);">Nouvelle idée</a>
</header>

<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <h3>Idées prises en charge</h3>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css/style.css">

<div class="container">
  <div class="well">
      <div class="media">
      	<a class="pull-left" href="#">
    		<img class="media-object" src="http://placekitten.com/150/150">
  		</a>
  		<div class="media-body">
    		<h4 class="text-left">Receta 1</h4>
          <p class="text-left">Tu dois comprendre les options bootstrap</p>
          <p class="text-right">By Noé Duclos</p>
          <ul class="list-inline list-unstyled">
              <div class="comments">
  			<li><span><p class="text-left"></i> 2 days, 8 hours </span></li>
            <span><p class="text-left"></i> 2 comments</span>
</div>
            <i class="glyphicon glyphicon-thumbs-up"></i>
			</ul>
       </div>
    </div>
  </div>
   <div class="well">
      <div class="media">
    		<img class="idea-image" src="css/herisson.jpg">
  		</a>
  		<div class="media-body">
    		<h4 class="text-left">Receta 2</h4>
          <p class="text-right">By Anailuj</p>
          <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
Aliquam in felis sit amet augue.</p>
          <ul class="list-inline list-unstyled">
                <div class="comments">
                     <li><span><p class="text-left"></i> 2 days, 8 hours </span></li>
                    <span><p class="text-left"></i> 2 comments</span>
                </div>
			</ul>
       </div>
    </div>
  </div>
</div>
<div class="body-idea">
<form class="add-idea">
<div class="form-group">
    <label for="exampleFormControlTextarea1" style="color: white;">Titre de l'idée:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="color: white;">Description de l'idée:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
  </div>
   <div class="form-group">
    <label for="exampleFormControlFile1" style="color: white;">Images:</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
   <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>






 