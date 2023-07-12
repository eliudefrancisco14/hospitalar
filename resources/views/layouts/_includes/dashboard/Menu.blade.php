<nav class="topnav navbar navbar-light bg-white">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fe fe-user fe-16"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('admin.user.show', Auth::User()->id) }}">Perfil</a>
                <a class="dropdown-item" href="{{ route('admin.user.edit', Auth::user()->id) }}">Configurações</a>
                <a class="nav-link text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Terminar a Sessão
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </ul>
</nav>

@if (null !== Auth::user())
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
            <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
            <!-- nav bar -->
            <div class="w-100  d-flex">
                <a class="navbar-brand mx-auto  flex-fill text-center" href="{{ route('admin.home') }}">
                    <img rel="icon" src="/site/images/logo-vertical.png" style="width:170px; margin:auto" />

                </a>
            </div>

            <ul class="navbar-nav flex-fill w-100 mb-2">
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Painel</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.home') }}">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Painel</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('site.home') }}" target="_blank">
                            <i class="fe fe-globe fe-16"></i>
                            <span class="ml-3 item-text">Site</span>
                        </a>
                    </li>
                </ul>


                {{-- Menu de 43ª Cimeira --}}
                <p class="text-muted nav-heading mt-2 mb-1">
                    <span> 43ª Cimeira</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                 
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.signup.index') }}">

                            <i class="fe fe-users fe-16"></i>
                            <span class="ml-3 item-text">Inscrições</span>
                        </a>

                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.signup.log') }}">

                            <i class="fe fe-flag fe-16"></i>
                            <span class="ml-3 item-text">Logs de Atividades</span>
                        </a>



                        @if ('USP' == Auth::user()->level || 'MIREX' == Auth::user()->level)
                            {{-- Menu de 43ª Cimeira --}}
                            <p class="text-muted nav-heading mt-2 mb-1">
                                <span>JORNALISTAS</span>
                            </p>
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.press.index') }}">

                            <i class="fe fe-users fe-16"></i>
                            <span class="ml-3 item-text">Inscrições dos Jornalistas</span>
                        </a>
                    </li>
@endif
</ul>

{{-- Menu de Transportes --}}
<p class="text-muted nav-heading mt-4 mb-1">
    <span>Transportes</span>
</p>
<li class="nav-item dropdown">
    <a href="#car" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
        <i class="fe fe-users fe-16"></i>
        <span class="ml-3 item-text">Transportes </span>
    </a>
    <ul class="collapse list-unstyled pl-4 w-100" id="car">

        <li class="nav-item">
            <a class="nav-link pl-3" href="{{ route('admin.laceCar.create') }}">
                <span class="ml-1 item-text">Cadastrar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link pl-3" href="{{ route('admin.laceCar.index') }}">
                <span class="ml-1 item-text">Listar</span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item w-100">
    <a class="nav-link" href="{{ route('admin.laceCarDocument.show') }}">

        <i class="fe fe-file-text fe-16"></i>
        <span class="ml-3 item-text">Informações</span>
    </a>
</li>


@if ('Editor' == Auth::user()->level || 'Administrador' == Auth::user()->level)
    {{-- Menu de Slideshows --}}
    <p class="text-muted nav-heading mt-2 mb-1">
        <span> A SADC</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
            <a class="nav-link" href="{{ route('admin.about.show') }}">

                <i class="fe fe-file-text fe-16"></i>
                <span class="ml-3 item-text">Sobre</span>
            </a>
        </li>


    </ul>

    <li class="nav-item dropdown">
        <a href="#news" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-rss fe-16"></i>
            <span class="ml-3 item-text"> Notícias </span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="news">

            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.news.create') }}">
                    <span class="ml-1 item-text">Cadastrar Notícia</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.news.index') }}">
                    <span class="ml-1 item-text">Listar Notícias</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a href="#doc" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-file-text fe-16"></i>
            <span class="ml-3 item-text">Documentos</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="doc">

            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.doc.create') }}">
                    <span class="ml-1 item-text">Cadastrar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.doc.index') }}">
                    <span class="ml-1 item-text">Listar</span>
                </a>
            </li>
        </ul>
    </li>
    {{-- Menu de Programas & Actividades --}}
    <p class="text-muted nav-heading mt-4 mb-1">
        <span> Programas & Actividades </span>
    </p>
    <li class="nav-item dropdown">
        <a href="#schedule" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-users fe-16"></i>
            <span class="ml-3 item-text">Programas & Actividades</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="schedule">

            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.schedule.create') }}">
                    <span class="ml-1 item-text">Cadastrar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.schedule.index') }}">
                    <span class="ml-1 item-text">Listar</span>
                </a>
            </li>
        </ul>
    </li>


    <li class="nav-item dropdown">
        <a href="#ScheduleIndustrialization" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-users fe-16"></i>
            <span class="ml-3 item-text">Programas  Industrialização</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="ScheduleIndustrialization">

            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.ScheduleIndustrialization.create') }}">
                    <span class="ml-1 item-text">Cadastrar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.ScheduleIndustrialization.index') }}">
                    <span class="ml-1 item-text">Listar</span>
                </a>
            </li>
        </ul>
    </li>
    {{-- Menu de Multimédia --}}
    <p class="text-muted nav-heading mt-2 mb-1">
        <span> Multimédia </span>
    </p>
    <li class="nav-item dropdown">
        <a href="#slideshow" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-image fe-16"></i>
            <span class="ml-3 item-text"> Slideshows</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="slideshow">

            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.slideshow.create') }}">
                    <span class="ml-1 item-text">Cadastrar Slideshow</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.slideshow.index') }}">
                    <span class="ml-1 item-text">Listar Slideshows</span>
                </a>
            </li>
        </ul>
    </li>


    <li class="nav-item dropdown">
        <a href="#gallery" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-image fe-16"></i>
            <span class="ml-3 item-text"> Galerias</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="gallery">

            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.gallery.create') }}">
                    <span class="ml-1 item-text">Cadastrar Galeria</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.gallery.index') }}">
                    <span class="ml-1 item-text">Listar Galerias</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item dropdown">
        <a href="#video" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-video fe-16"></i>
            <span class="ml-3 item-text"> Vídeos </span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="video">

            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.video.create') }}">
                    <span class="ml-1 item-text">Cadastrar Video</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.video.index') }}">
                    <span class="ml-1 item-text">Listar Vídeos </span>
                </a>
            </li>
        </ul>
    </li>






    {{-- Menu de Hospitais --}}
    <p class="text-muted nav-heading mt-4 mb-1">
        <span> Hospitais </span>
    </p>
    <li class="nav-item dropdown">
        <a href="#hospital" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-file-text fe-16"></i>
            <span class="ml-3 item-text">Lista de Hospitais</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="hospital">

            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.hospital.create') }}">
                    <span class="ml-1 item-text">Cadastrar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.hospital.index') }}">
                    <span class="ml-1 item-text">Listar</span>
                </a>
            </li>


        </ul>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link" href="{{ route('admin.hospitalDocuments.show') }}">

            <i class="fe fe-file-text fe-16"></i>
            <span class="ml-3 item-text">Informações</span>
        </a>
    </li>


    {{-- Menu de Restaurantes --}}
    <p class="text-muted nav-heading mt-4 mb-1">
        <span> Restaurantes </span>
    </p>
    <li class="nav-item dropdown">
        <a href="#listRestaurants" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-file-text fe-16"></i>
            <span class="ml-3 item-text">Lista de Restaurantes</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="listRestaurants">

            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.listRestaurants.create') }}">
                    <span class="ml-1 item-text">Cadastrar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.listRestaurants.index') }}">
                    <span class="ml-1 item-text">Listar</span>
                </a>
            </li>


        </ul>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link" href="{{ route('admin.restaurantDocument.show') }}">

            <i class="fe fe-file-text fe-16"></i>
            <span class="ml-3 item-text">Informações</span>
        </a>
    </li>



    {{-- Menu de Documentos --}}
    <p class="text-muted nav-heading mt-4 mb-1">
        <span> Hotéis </span>
    </p>
    <li class="nav-item dropdown">
        <a href="#hotelList" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-file-text fe-16"></i>
            <span class="ml-3 item-text">Lista de Hotéis</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="hotelList">

            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.hotelList.create') }}">
                    <span class="ml-1 item-text">Cadastrar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.hotelList.index') }}">
                    <span class="ml-1 item-text">Listar</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item w-100">
        <a class="nav-link" href="{{ route('admin.hotelDocuments.show') }}">

            <i class="fe fe-file-text fe-16"></i>
            <span class="ml-3 item-text">Informações</span>
        </a>
    </li>


    {{-- Menu de Perguntas Frequentes --}}
    <p class="text-muted nav-heading mt-4 mb-1">
        <span> Perguntas Frequentes </span>
    </p>
    <li class="nav-item dropdown">
        <a href="#faq" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-rss fe-16"></i>
            <span class="ml-3 item-text">Perguntas Frequentes</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="faq">

            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.faq.create') }}">
                    <span class="ml-1 item-text">Cadastrar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.faq.index') }}">
                    <span class="ml-1 item-text">Listar</span>
                </a>
            </li>
        </ul>
    </li>
@endif

@if ('Administrador' == Auth::user()->level)
    {{-- Menu de Utilizadores --}}
    <p class="text-muted nav-heading mt-2 mb-1">
        <span> Utilizadores</span>
    </p>
    <li class="nav-item dropdown">
        <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-user-plus fe-16"></i>
            <span class="ml-3 item-text"> Utilizadores</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="user">

            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('register') }}">
                    <span class="ml-1 item-text">Cadastrar Utilizador</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.user.index') }}">
                    <span class="ml-1 item-text">Listar Utilizadores</span>
                </a>
            </li>
        </ul>
    </li>
@endif


@if ('Editor' == Auth::user()->level || 'Administrador' == Auth::user()->level)
    {{-- Menu de Configurações --}}
    <p class="text-muted nav-heading mt-4 mb-1">
        <span>Configurações</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
            <a class="nav-link" href="{{ route('admin.configuration.show') }}">

                <i class="fe fe-settings fe-16"></i>
                <span class="ml-3 item-text">Configurações</span>
            </a>
        </li>
    </ul>
@endif

</ul>

</nav>
</aside>

@endif
