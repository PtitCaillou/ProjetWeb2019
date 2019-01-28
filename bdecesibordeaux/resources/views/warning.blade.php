@extends('layouts.app')
@include('menu')
<?php $email = auth()->user()->email;
$user = auth()->user()->name;
 ?>
<form method="post" action="{{('mail')}}">
	 {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Objet</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Merci de préciser le nom de la publication que vous signaler">
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea class="form-control" name="content" id="content" placeholder="Description" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="title">email</label>
    <input type="email" readonly class="form-control" id="email" name="email" placeholder="name@example.com" value="lea.ragot33@gmail.com">
  </div>
  <div class="form-group">
    <label for="title">Nom</label>
    <input type="text" readonly class="form-control" id="name" name="name" placeholder="name@example.com" value="{{$user}}">
  </div>
  <div class="form-group">
    <label for="title">Destinataire</label>
    <input type="text" readonly class="form-control" id="name" name="to_email" placeholder="name@example.com" value="lea.ragot33@gmail.com">
  </div>
   <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
</form>

