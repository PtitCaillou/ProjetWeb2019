 @if(checkPermission(['student','employee','bde']))
 <p>produit ajouté</p>
 <form>
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="name" value="{{App\Product::find($this)}}">
    </div>
  </div>
 @else
 <?php 
header('Location: login'); 
  exit();
 ?>
<!--  <p>Vous n'etes pas connecté, vous ne pouvez donc pas acceder a cette page.</p><br>
<p>Pour vous connecter cliquez <a href="{{('login')}}"> ici</a></p> -->
 @endif