<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Pizzería</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</head>

<body class="bg-image" style="
  background-image: url('{{ asset('assets/img/76.webp') }}');
  height: 100vh;">

    <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">NickSam Pizzería</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="#">Inicio</a>
                        <a class="nav-link" href="#">Registrate</a>
                        <a class="nav-link" href="#">Ordena</a>
                        <a class="nav-link" href="#">Mis Pedidos</a>
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </div>
                    <div class="row w-10 align-items-end">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <section>
        @yield('contenido')
    </section>
    <footer>
        <div class="navbar-dark bg-dark text-secondary text-center">
            <p>NickSam Pizzería 2023</p>
        </div>
    </footer>

</body>

</html>