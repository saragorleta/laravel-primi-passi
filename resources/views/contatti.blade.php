<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <h1>contatti</h1>

@foreach ($lista_contatti as $contatto)
<p>{{$contatto}}</p>

@endforeach

</body>
</html>
