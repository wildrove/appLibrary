<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <!-- Personal Style sheet -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <title>App Livraria</title>
    </head>
    <body>

        <nav class="navbar fixed-top navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    <i class="fas fa-shopping-cart"></i>
                    <i class="fas fa-user-circle"></i>
                </a>
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="btn-group dropstart">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <i class="fas fa-user-circle"></i>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Preferências</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            @include('flash::message')
            @yield('content')


        </div>

        <section class="footer-content">
            <!-- Linha de Conteúdo -->
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="h1-footer">SOBRE</h1>
                    <span>
                        <p class="">
                            But we wish we can do more. Given that Bootstrap 4 is one of the most useful design frameworks to build a website, and there are way too many Bootstrap 4 footer template available nowadays that may cost you much time to choose a suitable one, so we have put together 30 of the best Bootstrap 4 footer templates and you can certainly use them in your next projects.
                        </p>
                    </span>
                </div>
                <div class="col-sm-3">
                    <h1 class="h1-footer">SOBRE</h1>
                    <span>
                        <p class="">C</p>
                        <p class="">PHP</p>
                        <p class="">JAVA</p>
                        <p class="">ANDROID</p>
                    </span>
                </div>
                <div class="col-sm-3">
                    <h1 class="h1-footer">ACESSO RÁPIDO</h1>
                    <span>
                        <p class="">Sobre Nós</p>
                        <p class="">Contato</p>
                        <p class="">Contribuição</p>
                        <p class="">Política de Privacidade</p>
                    </span>
                </div>
            </div>
            <!-- Linha 3 de Conteúdo -->
            <div class="row div-footer-divisor"></div>
            <!-- Linha 3 de Conteúdo -->
            <div class="row mt-3">
                <div class="col-sm-9">
                    <span>
                        <p class="">
                            Copyright @ 2021 Todos os direitos reservados.
                        </p>
                    </span>
                </div>
                <div class="col-sm-3">
                    <span class="btn-group fa-lg">
                        <a href="#" class="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="" class="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </span>
                </div>
            </div>
            <!-- Linha 4 de Conteúdo -->
            <div class="row">
                <span class="d-flex justify-content-center">
                       <blockquote>Desenvolvido por Wilder V. Gaspar</blockquote>
                </span>
            </div>
        </section>
        <script>
            $('div.alert').not('.alert-important').delay(2000).fadeOut(350);
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
