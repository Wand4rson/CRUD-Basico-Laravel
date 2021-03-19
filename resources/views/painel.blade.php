<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Principal</title>    
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
</head>
<body>

    <nav class="navbar navbar-expand navbar-dark bg-primary" aria-label="Second navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('painel.index')}}">App.TODO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav me-auto">
         
          <li class="nav-item">
            <a class="nav-link" href="{{route('painel.novo')}}">Novo</a>
          </li>

        </ul>        
      </div>

    </div>
  </nav>

    <div class="container">
        @yield('content')
    </div>


    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    
</body>
</html>