<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test To Do list | #Dia01</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--My CSS -->
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="styles.css">


</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">To Do</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- <header class="cabecalho" id="-cabecalho">
        <h1>To Do</h1>
    </header> -->

    <main class="main" id="-main">
        <div class="div-content-01" id="div-01">
            <div class="div-card">
                <ul class="ul-card">
                <li class="li-card">
                    <div class="card">
                        <img class="card-img-top" src="img/foto-card-01.jpeg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                </li>
                <li class="li-card">
                    <div class="card">
                        <img class="card-img-top" src="img/foto-card-02.jpeg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                </li>
                <li class="li-card">
                    <div class="card">
                        <img class="card-img-top" src="img/foto-card-03.jpeg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                </li>
                <li class="li-card">
                    <div class="card">
                        <img class="card-img-top" src="img/foto-card-04.jpeg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                </li>
                <li class="li-card">
                    <div class="card">
                        <img class="card-img-top" src="img/foto-card-05.jpeg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                </li>

                <!-- <button type="button" class="btn btn-warning">Warning</button> -->
                </ul>
            </div>
        </div>

        <div class="div-content-02" id="div-02"></div>

    </main>

    <?php

    ?>

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>