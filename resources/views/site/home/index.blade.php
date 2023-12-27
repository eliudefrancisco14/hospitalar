@extends('layouts.merge.site')
@section('title', 'Assistente hospitalar')
@section('content')


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <h1>Bem-Vindo ao Assistente hospitalar</h1>
    <h2 class="text-light">Sistema de Triagens Rápidas.</h2>
    <a href="{{ route('site.pacient') }}" class="btn-get-started scrollto">Iniciar Consulta</a>
  </div>
</section><!-- End Hero -->
<section class="sobreposicao-escura"></section>

<main id="main">

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container">

      <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-receipt"></i>
                  <h4>Consulta</h4>
                  <p>Realize consultas instantâneas e eficientes com nosso Sistema de Triagens Rápidas.</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Análise</h4>
                  <p>Com nossa ferramenta, conduza análises detalhadas de dados de forma rápida e precisa.</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-images"></i>
                  <h4>Resultado</h4>
                  <p>Obtenha resultados instantâneos e confiáveis utilizando nosso Sistema de Triagens Rápidas.</p>
                </div>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>Sobre o Sistema de Triagens Rápidas</h2>
      </div>
    </div>
    <div class="container-fluid">

      <div class="row">
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
        </div>

        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <h3>O que acontece no Sistema de Triagens Rápidas?</h3>
          <p>O sistema permite fazer consulta, e após a consulta é gerada uma pdf da consulta com os dados do paciente,
            após este pdf o cliente só vai ir ao hospital com este pdf,
            ou apenas com sua identificação, e será rapidamente atendido com:</p>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4 class="title"><a href="">Simplicidade</a></h4>
            <p class="description">
              Após a consulta, o Sistema de Triagens Rápidas gera um PDF personalizado contendo todos os detalhes relevantes da avaliação médica do paciente. Com esse documento em mãos, o cliente pode ir ao hospital apenas com sua identificação e o PDF. Simplificamos o processo para que o acesso aos cuidados de saúde seja direto e descomplicado.</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title"><a href="">Rapidez</a></h4>
            <p class="description">Nosso sistema agiliza o atendimento no hospital. Com o PDF gerado após a consulta, o cliente tem acesso rápido aos serviços médicos necessários. Ao apresentar o documento junto à identificação, o atendimento é imediato, reduzindo o tempo de espera e garantindo uma resposta ágil às necessidades do paciente.
            </p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-atom"></i></div>
            <h4 class="title"><a href="">Eficiência</a></h4>
            <p class="description">A eficiência é fundamental. Ao chegar ao hospital apenas com a identificação e o PDF gerado pelo Sistema de Triagens Rápidas, o cliente é prontamente atendido. Esse método otimizado minimiza a burocracia, permitindo que os recursos médicos se concentrem na assistência imediata e eficaz aos pacientes.</p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Serviços</h2>
        <p>Esses serviços são essenciais para garantir a promoção da saúde,
          prevenção de doenças, diagnóstico precoce e tratamento adequado para os pacientes. </p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4><a href="">Análise</a></h4>
            <p>Nosso sistema realiza uma análise minuciosa dos dados cadastrados pelo paciente, permitindo uma visão detalhada do seu histórico e necessidades médicas.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4><a href="">Medicação</a></h4>
            <p>Baseando-se nos dados cadastrados, nosso sistema identifica as necessidades medicamentosas do paciente.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4><a href="">Consulta</a></h4>
            <p>O PDF gerado contém apenas as informações cadastradas pelo paciente, funcionando como um identificador único para acessar os serviços médicos.</p>
          </div>
        </div>


      </div>

    </div>
  </section><!-- End Services Section -->


  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container">

      <div class="section-title">
        <h2>Gallery</h2>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row g-0">

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="/site/assets/img/gallery/gallery-1.jpg" class="galelry-lightbox">
              <img src="/site/assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="/site/assets/img/gallery/gallery-2.jpg" class="galelry-lightbox">
              <img src="/site/assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="/site/assets/img/gallery/gallery-3.jpg" class="galelry-lightbox">
              <img src="/site/assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="/site/assets/img/gallery/gallery-4.jpg" class="galelry-lightbox">
              <img src="/site/assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Gallery Section -->
  <!-- ======= Frequently Asked Questions Section ======= -->

</main><!-- End #main -->


@endsection