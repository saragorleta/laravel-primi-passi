<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>


  <h1>Prova</h1>



  <h2>
    @foreach ($cose as $cosa)
    <p>{{$cosa}}</p>
    @endforeach
  </h2>

  <h3>
    @forelse ($animali as $animale)
    {{$animale}}
    @empty
    <p>no Animal</p>
    @endforelse
  </h3>
</body>
</html>
