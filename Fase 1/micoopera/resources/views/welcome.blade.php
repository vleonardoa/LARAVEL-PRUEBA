<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="{{'/'}}" aria-current="page">COOPERATIVA <span class="visually-hidden">(current)</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('producto')}}">Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('cliente')}}">clientes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('contacto')}}">Contactos con clientes</a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" href="{{url('usuario')}}">Usuarios</a>
        </li> --}}
    </ul>
</nav>
  <main class="container">

<div class="row ">
    <div class="col-md-1"></div>
    <div class="col-md-10">
<br>
        @yield('content')

    </div>
    <div class="col-md-1"></div>
</div>



  </main>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

