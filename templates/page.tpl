<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Roboto:wght@100&family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Odor+Mean+Chey&family=Roboto:wght@100&family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{$BASE_URL}css/css.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Coopearativa</title>

</head>

<body>
    <nav class="w-100 ">
        <div class="navbar navbar-expand-lg w-100 navbar-light bg-light d-flex flex-row justify-content-between">
            <div class="ms-4">
                <img src="imagenes/logo_reciclado.png" height="128" width="128">
            </div>
            <div class="w-50 me-4">
                <ul class="navbar-nav align-items-center w-100 justify-content-around">
                    <li class="nav-item active">
                        <a class="nav-link font-bold fs-5" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-bold  fs-5" href="#foro">Foro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-bold fs-5" href="#materiales">Materiales</a>
                    </li>
                    <li class="nav-item text-align-center">
                    {if $isUserLoggedIn eq false}
                        <button type="button" class="btn btn-green text-white btn-pill px-5 py-3" data-bs-toggle="modal" data-bs-target="#login">
                            Log in
                        </button>
                    {else}
                        <div class="btn-group">
                            <a class="btn stretched-link btn-red text-white btn-pill p-0 px-5 py-3 " href="logout">
                                Log out
                            </a>
                        </div>
                    {/if}
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal  fade" id="login" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-body position-relative">
                    <div class="position-absolute top-0 end-0">
                        <button type="button" class="btn-close m-4" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="row  px-5">
                        <div class="text-center">
                            <h5 class="modal-title">Inicie sesión</h5>
                        </div>
                        <form action="login" method="POST" class="justify-content-center m-0">
                            <div class="form-group mt-3">
                                <label for="user">Usuario</label>
                                <input type="text" class="form-control" name="user" placeholder="Usuario">
                            </div>
                            <div class="form-group mt-3">
                                <label for="pass">Contraseña</label>
                                <input type="password" class="form-control" name="pass" placeholder="Contraseña">
                            </div>
                            <button type="submit" class="btn btn-success btn-lg ms-2 mt-2 text-white">Iniciar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 pt-5 position-relative">
        <div class="row">
            <div>
                <h1 class="fs-1 font-bold">
                    COOPERATIVA DE RECUPERADORES<br> URBANOS DE TANDIL
                </h1>
                <p>
                    Somo una cooperativa de recicladores urbanos que lucha<br>por cambiar nuestra comunidad, para dejarle<br>un mejor mundo a nuestros hijos
                </p>
                <div class="position-absolute top-0 end-0 z-index">
                    <img src="imagenes/reciclando_1.png" alt="" width="475px">
                </div>
            </div>
        </div>
    </div>

</body>
</html>