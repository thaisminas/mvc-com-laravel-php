<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name = "viewport">
    <title>{{ $title }} - Controle de Séries</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  </head>
  <body>
    <div class="container">
      <h1>{{ $title }}</h1>

      {{ $slot }}
    </div>
  </body>
</html>