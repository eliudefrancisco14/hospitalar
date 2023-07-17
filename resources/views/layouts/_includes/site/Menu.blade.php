<section id="topbar" class="topbar d-flex align-items-center bg-light">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center text-dark">

                <a href="mailto:geral@infosi.gov.ao" class="text-dark">geral@infosi.gov.ao</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4 text-dark"><span class="text-dark">(+244) 222 692
                    979</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">

            <a href="#" class="facebook text-dark"><i class="bi bi-facebook"></i></a>
            <a href="#" class="linkedin text-dark"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section><!-- End Top Bar -->


<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <img src="/site/img/mono-logo.svg" alt="logo" class="" height="28">
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li class="dropdown"><a href="#"><span>Quem somos</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ route('site.about') }}">Sobre o INFOSI</a></li>
                        <li><a href="{{ route('site.organization') }}">Organograma</a></li>
                        <li><a href="{{ route('site.portfolio') }}">Portfólio</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Galeria</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ route('site.image') }}">Imagens</a></li>
                        <li><a href="{{ route('site.video') }}">Videos</a></li>
                        <li><a href="{{ route('site.audio') }}">Áudios</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('site.join') }}">Junta-se a Nós</a></li>
            </ul>
        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->
