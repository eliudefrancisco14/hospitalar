<header class="bg-primary navbar navbar-expand-lg align-items-center w-100 position-absolute z-index-10 navbar-dark">

    <div class="position-relative container">


        <a href=#content class="skip-to-main sr-only-focusable" role=button>Skip to main content</a>
        <a class="navbar-brand mr-auto" href="{{ route('site.home') }}" aria-label="Click to go back to Homepage">
            <img width="90%" src="/site/images/logo-hv.png" class="logo">
        </a>
        <button type="button" style=" background-color: black;    
       " onclick="toggleMenu()"
            class="navbar-toggler ml-auto collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
            <span class="my-1 mx-2 close text-white">X</span>


        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">


                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDemos"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SADC</a>
                    <div class="dropdown-menu d-block d-lg-table" aria-labelledby="navbarDemos">
                        <div class="row no-gutters d-flex d-lg-table-row flex-lg-nowrap mb-2">

                            <div class="row no-gutters d-lg-table-row">
                                <div class="col">

                                    <a class="dropdown-item pt-0 pb-1" href={{ route('site.about') }}>
                                        <span> Objectivos da SADC</span>
                                    </a>

                                    <a class="dropdown-item pt-0 pb-1" href="{{ route('site.memberCountries') }}">
                                        <span>Países Membros da SADC</span>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarPages"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cimeira</a>
                    <div class="dropdown-menu d-block d-lg-table" aria-labelledby="navbarPages">
                        <div class="row no-gutters d-flex d-lg-table-row flex-lg-nowrap mb-2">
                            <div class="d-lg-table-cell col-6 col-md-4">
                                <div class="row no-gutters d-lg-table-row">
                                    <div class="col-6 col-md-12">
                                        <h6 class="dropdown-header text-uppercase pt-3 pb-2">Angola</h6>
                                        <a class="dropdown-item pt-0 pb-1" href={{ route('site.angola') }}>
                                            <span>Sobre Angola</span>
                                        </a>
                                        <a class="dropdown-item pt-0 pb-1" href={{ route('site.visa') }}>
                                            <span>Vistos</span>
                                        </a>

                                        <a class="dropdown-item pt-0 pb-1" href="{{ route('site.hotelList') }}">
                                            <span>Hotéis</span>
                                        </a>
                                        <a class="dropdown-item pt-0 pb-1" href="{{ route('site.listRestaurants') }}">
                                            <span>Restaurantes</span>
                                        </a>



                                    </div>
                                </div>
                            </div>
                            <div class="d-lg-table-cell col-6 col-md-4">
                                <div class="row no-gutters d-lg-table-row">
                                    <div class="col-12">
                                        <h6 class="dropdown-header text-uppercase pt-3 pb-2">-</h6>

                                        <a class="dropdown-item pt-0 pb-1" href={{ route('site.schedule') }}>
                                            <span>Agendas</span>
                                        </a>

                                        <a class="dropdown-item pt-0 pb-1" href={{ route('site.docs') }}>
                                            <span>Documentos</span>
                                        </a>
                                        <a class="dropdown-item pt-0 pb-1" href={{ route('site.gallery') }}>
                                            <span>Galeria</span>
                                        </a>
                                        <a class="dropdown-item pt-0 pb-1" href={{ route('site.laceCar') }}>
                                            <span>Transportes</span>
                                        </a>


                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </li>



                <li class=nav-item>
                    <a class="nav-link" href={{ route('site.accreditation.create') }}> Acreditação</a>
                </li>


                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDemos"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Saúde</a>
                    <div class="dropdown-menu d-block d-lg-table" aria-labelledby="navbarDemos">
                        <div class="row no-gutters d-flex d-lg-table-row flex-lg-nowrap mb-2">

                            <div class="row no-gutters d-lg-table-row">
                                <div class="col">
                                    <a class="dropdown-item pt-0 pb-1" href="{{ route('site.hospital') }}">
                                        <span>Hospitais</span>
                                    </a>
                                    <a class="dropdown-item pt-0 pb-1" href={{ route('site.covid19Guideline') }}>
                                        <span> Covid-19 </span>
                                    </a>

                                    <a class="dropdown-item pt-0 pb-1" href={{ route('site.smallpoxMonkey') }}>
                                        <span>Varíola dos Macacos</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>



                <li class=nav-item><a class="nav-link" href={{ route('site.news') }}>Notícias</a></li>

                <li class=nav-item><a class="nav-link" href={{ route('site.contact') }}>Contactos</a></li>
            </ul>

            <a class="btn btn-sm btn-primary text-uppercase mt-3 mt-lg-0 mr-lg-5 d-block d-lg-inline-block"
                href="{{ route('site.signup.create') }}">Registo</a>

            @include('extra._translateButton.index')


        </div>

    </div>



</header>


<div>


    <div id="header">
        <div class="container-fluid-page">
            <div class="row">


                <div class="">
                    <div id="" class="">


                        <div class="">
                            <div class="">
                                <a style="color:rgb(4, 96, 156)!important; cursor:default;" href="#"
                                    rel="home">
                                    ...
                                </a>
                            </div>
                            <div class="">
                                <h3>

                                </h3>
                            </div>
                        </div>
                    </div>
                    <div id=""
                        class="col-md-9 col-sm-8 col-xs-12 clearfix block block-blockgroup block-block-groupheader-bottom-group">


                        <div class="">
                            <nav role="navigation" aria-labelledby="block-mainnavigation-2-menu"
                                id="block-mainnavigation-2">

                                <h2 style="color:rgb(4, 96, 156)!important;" class="visually-hidden"
                                    id="block-mainnavigation-2-menu">...</h2>

                            </nav>
                            <div id="block-responsivemenumobileicon"
                                class="responsive-menu-toggle-wrapper responsive-menu-toggle block block-responsive-menu block-responsive-menu-toggle">


                            </div>
                            <div class="search-block-form block block-search container-inline"
                                data-drupal-selector="search-block-form" id="block-theme-search" role="search">


                                <div class="form-content-wrapper">


                                </div>

                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>

<div id="language" class="section clearfix">
    <div class="container-fluid-page">
        <div class="region region-language">
            <div id="block-dropdownlanguage"
                class="block block-dropdown-language block-dropdown-languagelanguage-interface">


                <div class="block-content clearfix">
                    <div class="dropbutton-wrapper dropbutton-multiple" data-once="dropbutton">
                        <div class="dropbutton-widget">
                            <ul class="dropdown-language-item dropbutton">
                                <li class="en dropbutton-action">

                                    <a class="language-link" href="javascript:trocarIdioma('en');">English</a>
                                </li>
                                <li class="dropbutton-toggle"><button type="button"><span
                                            class="dropbutton-arrow"><span class="visually-hidden">List additional
                                                actions</span></span></button></li>
                                <li class="fr dropbutton-action secondary-action"><a class="language-link"
                                        href="javascript:trocarIdioma('fr');">French</a></li>
                                <li class="pt-pt dropbutton-action secondary-action"><a
                                        href="javascript:trocarIdioma('pt');" class="language-link"
                                        hreflang="pt-pt">Portuguese</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
