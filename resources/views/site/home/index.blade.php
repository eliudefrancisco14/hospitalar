@extends('layouts.merge.site')
@section('title', 'Portal Oficial do INFOSI')
@section('content')


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero"
        style="background-color: #fff; background-position: center;  background-size: cover; background-repeat: no-repeat;">


{{--  
        <div id="carouselExample" class="carousel slide">


            <div class="carousel-inner">

                @isset($slideFirst)
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img style='background-position:center; height:800px; width:100%;no-repeat;background-size:cover;
                        box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);'
                            src="/storage/{{ $slideFirst->path }}" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>{{ $slideFirst->title }}</h2>
                            <p>{{ $slideFirst->description }}</p>
                        </div>
                    </div>
                @endisset

                @foreach ($slideshows as $item)
                    <div class="carousel-item" data-bs-interval="10000">
                        <img style='background-position:center; height:800px; width:100%;no-repeat;background-size:cover;
                        box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);'
                            src="/storage/{{ $item->path }}" class="d-block w-100 img-fluid" alt="{{ $item->title }}">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>{{ $item->title }}</h2>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>  --}}




        {{--  <div id="carouselExample" class="carousel slide">

            <div class="carousel-inner">
                <div class="carousel-item" data-bs-interval="1000">
                    <img src="/site/img/cta-bg.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Seja Bem-Vindo ao Portal Oficial do INFOSI</h2>
                        <p>Instituto Público de Prestação de Serviço com Carácter
                            Científico e Desenvolvimento Tecnológico</p>
                    </div>
                </div>
                @foreach ($slideshows as $item)
                    <div class="carousel-item" data-bs-interval="10000">
                        <img src="/storage/{{ $item->path }}" class="d-block w-100 img-fluid" alt="{{ $item->title }}">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>{{ $item->title }}</h2>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            
        </div>  --}}



        <div id="carouselExampleIndicators" class="carousel slide mt-0" data-ride="carousel">
            <div class="carousel-inner">
                @isset($slideFirst)
                <div class="carousel-item active" data-bs-interval="1000">
                    <img style='background-position:center; height:800px; width:100%;no-repeat;background-size:cover;
                    box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);'
                        src="/storage/{{ $slideFirst->path }}" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>{{ $slideFirst->title }}</h2>
                        <p>{{ $slideFirst->description }}</p>
                    </div>
                </div>
            @endisset
                @isset($slideshows)

                    @foreach ($slideshows as $item)
                        <div class="carousel-item ">

                            <div class=""
                                style='background-position:center; height:800px; width:100%;background-image: url("/storage/{{ $item->path }}");no-repeat;background-size:cover;
                        background-image: url("/storage/{{ $item->path }}"); box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);'>
                                <div class="carousel-caption ">
                                    <div class="col mt-sm-11 mt-md-11 mt-lg-0">
                                        <h2>{{ $item->title }}</h2>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                @endisset
            </div>
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
                    <p>{!! html_entity_decode($provinceDocument->body) !!}</p>
                </div>
                <div class="row gy-4 align-items-center">

                    <div class="col-lg-6">
                        <canvas id="myChart"></canvas>
                    </div>
                @section('JS')
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        const ctx = document.getElementById('myChart');
                        var Bengo = JSON.parse('<?php echo $Bengo; ?>');
                        var Benguela = JSON.parse('<?php echo $Benguela; ?>');
                        var Bie = JSON.parse('<?php echo $Bie; ?>');
                        var Cabinda = JSON.parse('<?php echo $Cabinda; ?>');
                        var CuandoCubango = JSON.parse('<?php echo $CuandoCubango; ?>');
                        var Cunene = JSON.parse('<?php echo $Cunene; ?>');
                        var Huambo = JSON.parse('<?php echo $Huambo; ?>');
                        var Huila = JSON.parse('<?php echo $Huila; ?>');
                        var KwanzaSul = JSON.parse('<?php echo $KwanzaSul; ?>');
                        var KwanzaNorte = JSON.parse('<?php echo $KwanzaNorte; ?>');
                        var Luanda = JSON.parse('<?php echo $Luanda; ?>');
                        var LundaNorte = JSON.parse('<?php echo $LundaNorte; ?>');
                        var LundaSul = JSON.parse('<?php echo $LundaSul; ?>');
                        var Malanje = JSON.parse('<?php echo $Malanje; ?>');
                        var Moxico = JSON.parse('<?php echo $Moxico; ?>');
                        var Namibe = JSON.parse('<?php echo $Namibe; ?>');
                        var Uige = JSON.parse('<?php echo $Uige; ?>');
                        var Zaire = JSON.parse('<?php echo $Zaire; ?>');

                        new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Bengo', 'Benguela', 'Bié', 'Cabinda', 'Cuando-Cubango', 'Cunene', 'Huambo', 'Huíla',
                                    'Kwanza Sul', 'Kwanza Norte', 'Luanda', 'Lunda Norte', 'Lunda Sul', 'Malanje', 'Moxico',
                                    'Namibe', 'Uíge', 'Zaire'
                                ],
                                datasets: [{
                                    label: 'Pontos Angola Online',
                                    data: [Bengo, Benguela, Bie, Cabinda, CuandoCubango, Cunene, Huambo, Huila, KwanzaSul,
                                        KwanzaNorte, Luanda, LundaNorte, LundaSul, Malanje, Moxico, Namibe, Uige, Zaire
                                    ],
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
                        <span data-purecounter-start="0" data-purecounter-end="{{ $totalPoint }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Total de Pontos de Acesso</strong> </p>
                    </div><!-- End Stats Item -->

                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $totalGoodPoint }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Total em optimo estado</strong></p>
                    </div><!-- End Stats Item -->

                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $totalBadPoint }}"
                            data-purecounter-duration="1" class="purecounter"></span>
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
                @foreach ($services as $item)
                    <div class="col-xl-4 col-md-6">
                        <article class="my">

                            <div class="post-img">
                                <img src="{{ url("/storage/$item->logo") }}" alt="{{ $item->title }}"
                                    class="img-fluid">
                            </div>

                            <p class="post-category">{{ $item->title }}</p>

                            <h2 class="title">
                                <a href="{{ route('site.services') }}">{{ $item->description }}</a>
                            </h2>


                        </article>
                    </div><!-- End post list item -->
                @endforeach

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
                    <p style="text-align: justify">
                        Faça uma avaliação da arquitetura projectada para o seu sistema, verifique se é capaz de atender
                        às
                        funcionalidades, Mede a facilidade com a qual a unidade de software pode ser transferida de um
                        sistema computacional ou ambiente para outro e verifique a implementação de uma série de
                        controlos
                        (políticas, práticas, procedimentos, estruturas organizacionais e funções de software).</p>
                    <p style="text-align: justify">
                        De modos
                        a
                        Obter a Certificação de que o seu software está autorizado para ser utilizado nas Instituições
                        Publicas e Privadas, a luz do Decreto Presidencial nº 135/21 de 31 de Maio, no seu artigo 6º.
                    </p style="text-align: justify">

                    <div class="text-center"><a href="https://www.infosi.gov.ao/painel" class="btn buy-btn">Aceder o
                            Portal de Homologação</a>
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
                    @foreach ($partners as $item)
                        <div class="swiper-slide"> <a href="{{ $item->link }}" target="_blank"> <img
                                    src="{{ url("/storage/$item->logo") }}" class="img-fluid"
                                    alt="{{ $item->title }}"></a></div>
                    @endforeach
                </div>
            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Programa de Estágio</h2>
                <p></p>
            </div>

            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <p style="text-align: justify">

                        Programa de Estágios
                        É uma oportunidade de pré-emprego ou orientação profissional que dará valência e vocação ao
                        estagiário em uma das área das TI.
                        clique em "Inscrever" para se inscrever.
                    </p style="text-align: justify">

                    <div class="text-center"><a href="{{ route('site.internship') }}"
                            class="btn buy-btn">Inscrever</a>
                    </div>

                </div>

                <div class="col-lg-6">
                    <img src="/site/img/internship.jpg" alt="" class="img-fluid">
                </div>

            </div>

        </div>
    </section><!-- End Stats Counter Section -->

</main><!-- End #main -->
@endsection


@section('JS')
<script>
    $('.carousel').carousel({
        interval: 2000
    })
    $('#carouselExampleIndicators').on('slide.bs.carousel', function() {
        direction: left
    })
</script>

@endsection
