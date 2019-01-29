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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
  crossorigin="anonymous"></script>
  <!--  <p>Vous n'etes pas connecté, vous ne pouvez donc pas acceder a cette page.</p><br>
  <p>Pour vous connecter cliquez <a href="{//{('login')}}"> ici</a></p> -->
@endif