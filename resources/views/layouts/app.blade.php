<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <!-- Personal Style sheet -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <title>App Livraria</title>
    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark nav-principal">
            <div class="container-fluid"> <a class="navbar-brand" href="{{route('home')}}">Logo</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @auth
                        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link @if(request()->is('admin/users*')) active @endif" aria-current="page" href="{{route('admin.users.index')}}">Usuários</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->is('admin/books*')) active @endif" href="{{route('admin.books.index')}}">Livros</a>
                            </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->is('admin/categories*')) active @endif" href="{{route('admin.categories.index')}}">Categorias</a>
                        </li>
                        </ul>
                        <div class="d-flex ml-auto">
                            <ul class="navbar-nav mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="dropdownCart" role="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownCart">
                                        <li>
                                            <a class="dropdown-item bg-transparent" href="#">
                                                <i class="fas fa-shopping-bag"></i>
                                                <span class="pl-2">Meu Carrinho</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item bg-transparent" href="#">
                                                <i class="fas fa-book"></i>
                                                <span class="pl-2">Item 1</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="dropdownProfile" role="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownProfile">
                                        <li>
                                            <a class="dropdown-item bg-transparent" href="#">
                                                <i class="far fa-cog"></i>
                                                <span class="pl-2">Configurações</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item bg-transparent" href="#">
                                                <i class="far fa-envelope"></i>
                                                <span class="pl-2">Menssagens</span>
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="btn dropdown-item bg-transparent ml-4" href="#" onclick="event.preventDefault();document.querySelector('form.logout').submit()">
                                                <form action="{{route('logout')}}" method="post" class="d-lg-none logout">
                                                    @csrf
                                                </form>
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span class="pl-2">Sair</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    @endauth
                </div>
            </div>
        </nav>
        <div class="container-fluid" style="margin-top: 80px;">
            @include('flash::message')
            @yield('content')
        </div>

        <script>
            $('div.alert').not('.alert-important').delay(2000).fadeOut(350);
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>
