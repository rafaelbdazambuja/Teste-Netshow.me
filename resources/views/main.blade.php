<!doctype html>
<html lang="pt-BR">
  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=5.0"/>

    <title>Teste técnico Netshow.me - Rafael de Azambuja</title>

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>
  <body>
    <main id="app" class="container">
        @yield('content')
    </main>
    <script type="text/javascript" src="/js/app.js"></script>
  </body>
</html>