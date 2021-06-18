<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
        <!-- Personal Style sheet -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>App Livraria</title>
    </head>
    <body>
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
                        <p class="p-footer-text">
                            But we wish we can do more. Given that Bootstrap 4 is one of the most useful design frameworks to build a website, and there are way too many Bootstrap 4 footer template available nowadays that may cost you much time to choose a suitable one, so we have put together 30 of the best Bootstrap 4 footer templates and you can certainly use them in your next projects.
                        </p>
                    </span>
                </div>
                <div class="col-sm-3">
                    <h1 class="h1-footer">SOBRE</h1>
                    <span>
                        <p class="p-footer-text">C</p>
                        <p class="p-footer-text">PHP</p>
                        <p class="p-footer-text">JAVA</p>
                        <p class="p-footer-text">ANDROID</p>
                    </span>
                </div>
                <div class="col-sm-3">
                    <h1 class="h1-footer">ACESSO RÁPIDO</h1>
                    <span>
                        <p class="p-footer-text">Sobre Nós</p>
                        <p class="p-footer-text">Contato</p>
                        <p class="p-footer-text">Contribuição</p>
                        <p class="p-footer-text">Política de Privacidade</p>
                    </span>
                </div>
            </div>
            <!-- Linha 3 de Conteúdo -->
            <div class="row div-footer-divisor"></div>
            <!-- Linha 3 de Conteúdo -->
            <div class="row mt-3">
                <div class="col-sm-9">
                    <span>
                        <p class="p-footer-text">
                            Copyright @ 2021 Todos os direitos reservados por Wilder V. Gaspar
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
        </section>

        <script>
            $('div.alert').not('.alert-important').delay(2000).fadeOut(350);
        </script>
    </body>
</html>
