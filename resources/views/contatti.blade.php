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

<p>
  @foreach ($lista_contatti as $contatto)
    {{ $contatto }}@if(!$loop->last),
    @endif
  @endforeach
</p>



</body>
</html>
