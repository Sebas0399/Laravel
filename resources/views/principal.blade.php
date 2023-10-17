<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Pizzería</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body class="bg-image" style="
background-image: url('assets/img/76.webp');
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
        <div class="container my-5">
            <div class="text-center">
                <img src="{{asset('assets/img/pizza-18.gif')}}" class="rounded" width="200" class="my-4">
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <h1 class="text-secondary fw-bold">Bienvenidos a mi negocio</h1>
                    <p class="text-justify text-primary fw-bold">¡El toque crujiente que te encantará en cada combo! La nueva
                        Cheesy cubierta con dos capas de queso mozarella con extra Tocino y Nachos. Prueba tus Crunchy Dips con 28
                        mini bordes de queso y salchicha!</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <h2 class="text-secondary fw-bold">Los mejores ingredienteas</h2>
                    <p class="text-justify">Contamos con una variedad de ingredientes, con la más alta calidad
                        cuidando siempre su frescura</p>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <h2 class="text-secondary fw-bold">Las mejores especialidades</h2>
                    <p class="text-justify">Nuestras pizzas cuentan con una selección exquisita
                        de ingredientes dando como resultado las mejores especialidades que puedas imaginarte</p>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <h2 class="text-secondary fw-bold">Siempre a tiempo</h2>

                    <p class="text-justify">Nuestras promesa tener tú pizza en solo 45 minutos
                        en la puerta de tu hogar, lsita para que puedas comerla al momento de tu antojo</p>
                </div>
               
            </div>
        </div>
    </section>
    <section>
        <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col sm-12 col-md-4 col-lg-4 col-xl-4">
                    <h2 class="text-secondary fw-bold font-family-sans-serif">Nuestra promesa</h2>
                    <p class="text-justify">"Proveer experiencias que sobrepasan las expectativas
                        de nuestros clientes, a través de la innovación y servicio diferenciado;
                        apoyado por el trabajo en equipo, la constante capacitación y el uso
                        responsable de los recursos.</p>
                    <P>Ser reconocidos como la organización operadora de restaurantes más
                        confiable y comprometida con la rentabilidad para los accionistas
                        y el bienestar de nuestros clientes y asociados”.</p>
                </div>
                <div class="col sm-12 col-md-8 col-lg-8 col-xl-8">
                    <h2 class="text-secondary fw-bold">Una tradición desde 1985</h2>
                    <p class="text-justify">NickSam Pizzería hace referencia a la tradición familiar, en la que toda la familia
                        junta se sentaban junto al horno de leña
                        a compartir la pizza preparada por el abuelo, que era muy leal y trabajador.
                        Nuestro horno de leña está diseñado en barro e inspirado en honor al abuelo quien junto a su fiel pareja que
                        duro para toda la vida preparaba pizza para compartir en familia todos los viernes.</p>
                    <p>Ahora conoces la historia detrás de la marca NickSam Pizzería que ha acompañado al Ecuador desde 1985</p>

                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="navbar-dark bg-dark text-secondary text-center">
            <p>NickSam Pizzería 2023</p>
        </div>
    </footer>

</body>

</html>