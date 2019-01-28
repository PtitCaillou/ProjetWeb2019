

<form method="POST" action="{{('status')}}">
	 {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nom de l'utilisateur</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Entrer le nom">
</div>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nouvel id de status</label>
    <input type="id" class="form-control" id="exampleInputEmail1" name="status" aria-describedby="emailHelp" placeholder="Entrer le nouvel id">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Confirmer</button>
</form>
