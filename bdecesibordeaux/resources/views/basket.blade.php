 @if(checkPermission(['student','employee','bde']))
 <p>Votre panier</p>
 @else
 <?php 
header('Location: login'); 
  exit();
 ?>
<!--  <p>Vous n'etes pas connecté, vous ne pouvez donc pas acceder a cette page.</p><br>
<p>Pour vous connecter cliquez <a href="{{('login')}}"> ici</a></p> -->
 @endif