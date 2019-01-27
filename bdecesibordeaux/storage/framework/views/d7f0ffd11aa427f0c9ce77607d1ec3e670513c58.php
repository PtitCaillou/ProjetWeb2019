<head>
	<title>Boite à idées</title>
</head>
<body>
<header>
    <h3>Boite à idées</h3>
</header>

<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <h3><br>Idées prises en charge</h3>
    <div class="dropdown">
<button class="btn btn-default dropdown-toggle"  style="background-color: rgb(238, 193, 94)"  type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
Filtrer
<span class="caret"></span>
</button>
<ul class="dropdown-menu"  style="background-color: rgb(238, 193, 94)"aria-labelledby="dropdownMenu1">
<li><p href="#" title="Lien 1">Catégories</p></li>
<li><p href="#" title="Lien 2">Lien 2</p></li>
<li><p href="#" title="Lien 3">Lien 3</p></li>
<li><p href="#" title="Lien 4">Lien 4</p></li>
</ul>
</div> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <li><br></li>

<div class="container">
  <div class="well">
      <div class="media">
    		<img class="idea-image" src="css/marteau.jpg">
  		</a>
  		<div class="media-body">
    		<h4 class="text-left">Le marteau de la mort</h4>
          <p class="text-left">Tu dois comprendre les options bootstrap</p>
          <p class="text-right">By Noé Duclos</p>
          <ul class="list-inline list-unstyled">
              <div class="comments">
  			<li><span><p class="likes"></i>5 likes&nbsp</span></li>
            <span><p class="comment"></i> 2 comments</span>
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
    		<h4 class="text-left">Le hérisson fou</h4>
          <p class="text-left">On est pas encore des anciens à ce stade.</p>
          <p class="text-right">By Thompu</p>
          <ul class="list-inline list-unstyled">
                <div class="comments">
                     <li><span><p class="likes"></i>10 likes &nbsp</span></li>
                    <span><p class="comment"></i> 2 comments</span>
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
      <div class="container">
        <footer>
            
        </footer>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>






 
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>