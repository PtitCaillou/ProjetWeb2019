@foreach($data as $data)

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>{{$data->title}}</h2>
    <ul>
      <li><strong>Nom</strong> : {{ $data->name }}</li>
      <li><strong>Email</strong> : {{ $data->email }}</li>
      <li><strong>Message</strong> : {{$data->content}}</li>
    </ul>
  </body>
</html>
@endforeach