@extends('layouts.merge.site')
@section('title', 'Portal Oficial do INFOSI')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero"
        style="background-color: #fff; background-position: center;  background-size: cover; background-repeat: no-repeat;">

        <div id="carouselExample" class="carousel slide">

            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ url('site/img/banner-infosi-copia.jpg') }}" class="d-block w-100" alt="..."
                        height="850px">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Seja Bem-Vindo ao <span>INFOSI</span></h2>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ url('site/img/banner-front.jpg') }}" class="d-block w-100" alt="..."height="850px">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Seja Bem-Vindo ao <span>INFOSI</span></h2>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ url('site/img/banner-infosi.jpg') }}" class="d-block w-100" alt="..."height="850px">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Seja Bem-Vindo ao <span>INFOSI</span></h2>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi-wifi"></i></div>
                            <h4 class="title"><a href="#stats-counter" class="stretched-link">Angola Online</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-gear"></i></div>
                            <h4 class="title"><a href="#blog" class="stretched-link">Serviços</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi-clipboard-check"></i></div>
                            <h4 class="title"><a href="#homologation" class="stretched-link">Homologação</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><i class="bi-person-circle"></i></div>
                            <h4 class="title"><a href="#clients" class="stretched-link">Parceiros</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                </div>
            </div>
        </div>


    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= Angola Online Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Angola Online</h2>
                    <p>É um projecto social, sem fins lucrativos com o objectivo de criar pontos de acesso público e
                        gratuitos a Internet em diversos locais do país.</p>
                </div>
                <div class="row gy-4 align-items-center">

                    <div class="col-lg-6">
                        <canvas id="myChart"></canvas>
                    </div>
                @section('JS')
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        const ctx = document.getElementById('myChart');

                        new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Bengo',
                                    'Benguela',
                                    'Bié',
                                    'Cabinda',
                                    'Cuando - Cubango',
                                    'Cuanza Norte',
                                    'Cuanza Sul',
                                    'Cunene',
                                    'Huambo',
                                    'Huíla',
                                    'Luanda',
                                    'Lunda Norte',
                                    'Lunda Sul',
                                    'Malange',
                                    'Moxico',
                                    'Namibe',
                                    'Uíge',
                                    'Zaire'
                                ],
                                datasets: [{
                                    label: 'Pontos Angola Online',
                                    data: [12, 19, 3, 5, 2, 12, 19, 3, 5, 2, 12, 19, 3, 5, 2, 12, 19, 3],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    </script>
                @endsection

                <div class="col-lg-1"></div>
                <div class="col-lg-5 py-4">

                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="157" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Total de Pontos de Acesso</strong> </p>
                    </div><!-- End Stats Item -->

                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="145" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Total em optimo estado</strong></p>
                    </div><!-- End Stats Item -->

                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Total de Pontos Indisponível</strong></p>
                    </div><!-- End Stats Item -->

                </div>
            </div>

        </div>

    </section><!-- End Stats Counter Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="blog" class="blog blog-home">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Nossos serviços</h2>
                <p>Aqui apresentamos os nossos serviço mais destacados</p>
            </div>

            <div class="row gy-4 posts-list " data-aos="fade-up" data-aos-delay="100">

                <div class="col-xl-4 col-md-6">
                    <article class="my">

                        <div class="post-img">
                            <img src="/site/img/blog/blog-1.jpg" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Desenvolvimento de Sistemas</p>

                        <h2 class="title">
                            <a href="{{ route('site.image') }}">Desenvolvimento de aplicações Mobile, Web e
                                Desktop.</a>
                        </h2>


                    </article>
                </div><!-- End post list item -->

                <div class="col-xl-4 col-md-6">
                    <article class="my">

                        <div class="post-img">
                            <img src="/site/img/blog/blog-2.jpg" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Registro de Empresa</p>

                        <h2 class="title">
                            <a href="{{ route('site.image') }}">Emissão de certificado sobre aptidão tecnológico das
                                empresas.</a>
                        </h2>


                    </article>
                </div><!-- End post list item -->

                <div class="col-xl-4 col-md-6">
                    <article class="my">

                        <div class="post-img">
                            <img src="/site/img/blog/blog-3.jpg" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Registo de Domínio .ao</p>

                        <h2 class="title">
                            <a href="{{ route('site.image') }}">Gerir facilmente o servidor de nomes com um painel de
                                controle fácil e rápido de utilizar.</a>
                        </h2>

                    </article>
                </div><!-- End post list item -->

            </div><!-- End blog posts list -->

        </div>
    </section><!-- End Our Services Section -->



    <!-- ======= Stats Counter Section ======= -->
    <section id="homologation" class="homologation">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Homologação</h2>
                <p></p>
            </div>

            <div class="row gy-4 align-items-center">

                <div class="col-lg-6">
                    <img src="/site/img/confirmation.jpg" alt="" class="img-fluid">
                </div>

                <div class="col-lg-6">
                    <p>
                        Faça uma avaliação da arquitetura projectada para o seu sistema, verifique se é capaz de atender
                        às
                        funcionalidades, Mede a facilidade com a qual a unidade de software pode ser transferida de um
                        sistema computacional ou ambiente para outro e verifique a implementação de uma série de
                        controlos
                        (políticas, práticas, procedimentos, estruturas organizacionais e funções de software).</p>
                    <p>
                        De modos
                        a
                        Obter a Certificação de que o seu software está autorizado para ser utilizado nas Instituições
                        Publicas e Privadas, a luz do Decreto Presidencial nº 135/21 de 31 de Maio, no seu artigo 6º.
                    </p>

                    <div class="text-center"><a href="#" class="btn buy-btn">Aceder o Portal de Homologação</a>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-out">
            <div class="section-header">
                <h2>Parceiros</h2>
                <p></p>
            </div>
            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="/site/img/clients/client-1.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="/site/img/clients/client-2.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="/site/img/clients/client-3.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="/site/img/clients/client-4.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="/site/img/clients/client-5.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="/site/img/clients/client-6.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="/site/img/clients/client-7.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="/site/img/clients/client-8.png" class="img-fluid"
                            alt=""></div>
                </div>
            </div>

        </div>
    </section><!-- End Clients Section -->

</main><!-- End #main -->
@endsection
