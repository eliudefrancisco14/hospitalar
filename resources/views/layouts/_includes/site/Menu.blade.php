  <!-- ======= Header ======= -->
  <header id="header" class="d-flex">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ url('/') }}"><img src="/site/assets/img/logo_branco_.svg" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="{{ url('/') }}" class="logo me-auto"><img src="/site/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/#about') }}">Sobre Nós</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/#services') }}">Serviços</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      @auth
      <a href="{{ url('/admin/painel') }}" class="appointment-btn scrollto">Dashboard</a>

      @else
      <a href="{{ url('/login') }}" class="appointment-btn scrollto">Entrar</a>

      @endauth


    </div>
  </header><!-- End Header -->
