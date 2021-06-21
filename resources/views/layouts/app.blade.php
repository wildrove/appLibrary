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
        <div class="dashboard-header mb-5">
            <nav class="navbar navbar-expand-lg bg-white fixed-top"> <a class="navbar-brand" href="#">SchoolLibrary</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar"> <input class="form-control" type="text" placeholder="Search.."> </div>
                        </li>
                        <li class="nav-item dropdown notification"> <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group"> <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="https://img.icons8.com/office/100/000000/administrator-female.png" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Hukonah</span>accepted your invitation to join the team. <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a> <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="https://img.icons8.com/color/48/000000/administrator-female.png" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Sammy</span>updated the email address <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a> <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="https://img.icons8.com/color/100/000000/name.png" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Kioh Samso</span> is watching your main repository <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection"> <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 "> <a href="#" class="connection-item"><img src="https://img.icons8.com/nolan/100/000000/github.png" alt=""> <span>Github</span></a> </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 "> <a href="#" class="connection-item"><img src="https://img.icons8.com/color/100/000000/dribbble.png" alt=""> <span>Dribbble</span></a> </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 "> <a href="#" class="connection-item"><img src="https://img.icons8.com/color/100/000000/dropbox.png" alt=""> <span>Dropbox</span></a> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 "> <a href="#" class="connection-item"><img src="https://img.icons8.com/color/100/000000/bitbucket.png" alt=""> <span>Bitbucket</span></a> </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 "> <a href="#" class="connection-item"><img src="https://img.icons8.com/color/100/000000/remove-ads.png" alt=""><span>Facebook ads</span></a> </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 "> <a href="#" class="connection-item"><img src="https://img.icons8.com/wired/64/000000/slack.png" alt=""> <span>Slack</span></a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user"> <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://img.icons8.com/dusk/100/000000/user-female-circle.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Tikoha Samga</h5> <span class="status"></span><span class="ml-2">Available</span>
                                </div> <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a> <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a> <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
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
                <span class="d-flex justify-content-center p-footer-text">
                       <blockquote>Desenvolvido por Wilder V. Gaspar</blockquote>
                </span>
            </div>
        </section>
        <script>
            $('div.alert').not('.alert-important').delay(2000).fadeOut(350);
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>
