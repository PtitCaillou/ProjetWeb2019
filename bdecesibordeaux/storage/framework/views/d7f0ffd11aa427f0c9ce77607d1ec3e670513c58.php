<head>
	<title>Boite à idées</title>
</head>
<body>
<header>
	<h3>Boite à idées</h3>

</header>
<div class="body-idea">
<div class="idea-group">
	<div class="idea">
	<div class="card">
  <div class="card-body">
    This is some text within a card body.
  </div>
  </div>
</div>
<div class="idea">
	<div class="card">
  <div class="card-body">
    This is some text within a card body.
  </div>
  </div>
</div>
<div class="idea">
	<div class="card">
  <div class="card-body">
    This is some text within a card body.
  </div>
  </div>
</div>
</div>
<form class="add-idea">
<div class="form-group">
    <label for="exampleFormControlTextarea1" style="color: white;">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   <div class="form-group">
    <label for="exampleFormControlFile1" style="color: white;">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
   <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css/style.css">




 
<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>