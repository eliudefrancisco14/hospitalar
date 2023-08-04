@extends('layouts.merge.site')
@section('title', 'Portal Oficial do INFOSI')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero"
        style="background-color: #fff; background-position: center;  background-size: cover; background-repeat: no-repeat;">

        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

                @if ($slideFirst)
                    <div class="carousel-item active">
                        <div class="slider-image center"
                            style='background-position:center; background-size:initial; height:800px; width:100%;no-repeat;
                        background-size:cover;
                        background-image: url("/storage/{{ $slideFirst->path }}");
                            '>
                            <div class="carousel-caption ">
                                <div class="col mt-sm-11 mt-md-11 mt-lg-0">
                                    <h2>{{ $slideFirst->title }}</h2>
                                    <p>{{ $slideFirst->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @isset($slideshows)
                    @foreach ($slideshows as $item)
                        <div class="carousel-item">
                            <div class="slider-image center"
                                style='background-position:center; background-size:initial; height:800px; width:100%;no-repeat;
                        background-size:cover;
                        background-image: url("/storage/{{ $item->path }}");
                            '>
                            </div>
                            <div class="carousel-caption ">
                                <div class="col mt-sm-11 mt-md-11 mt-lg-0">
                                    <h2>{{ $item->title }}</h2>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                @endisset
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

                    <div class="col-lg-8">
                        <div id="container"></div>
                    </div>

                @section('JS')

                    <script src="{{ url('assets/highCharts/maps/style.css') }}"></script>
                    <script src="{{ asset('assets/highCharts/maps/highmaps.js') }}"></script>

                    <script>
                        (async () => {

                            const topology = await fetch(
                                '{{ url('/assets/highCharts/maps/ao-all.topo.json') }}'
                            ).then(response => response.json());

                            const data = [
                                ['ao-na', {{ $Namibe }}],
                                ['ao-cb', {{ $Cabinda }}],
                                ['ao-ln', {{ $LundaNorte }}],
                                ['ao-ls', {{ $LundaSul }}],
                                ['ao-ml', {{ $Malanje }}],
                                ['ao-bo', {{ $Bengo }}],
                                ['ao-cn', {{ $KwanzaNorte }}],
                                ['ao-cs', {{ $KwanzaSul }}],
                                ['ao-lu', {{ $Luanda }}],
                                ['ao-ui', {{ $Uige }}],
                                ['ao-za', {{ $Zaire }}],
                                ['ao-bi', {{ $Bie }}],
                                ['ao-bg', {{ $Benguela }}],
                                ['ao-cc', {{ $CuandoCubango }}],
                                ['ao-cu', {{ $Cunene }}],
                                ['ao-hm', {{ $Huambo }}],
                                ['ao-hl', {{ $Huila }}],
                                ['ao-mx', {{ $Moxico }}]
                            ];
                            Highcharts.mapChart('container', {
                                chart: {
                                    map: topology
                                },

                                title: {
                                    text: ''
                                },
                                subtitle: {
                                    text: ''
                                },
                                mapNavigation: {
                                    enabled: true,
                                    buttonOptions: {
                                        verticalAlign: 'bottom'
                                    }
                                },
                                colorAxis: {
                                    min: 0
                                },
                                series: [{
                                    data: data,
                                    name: 'dados aleatórios',
                                    states: {
                                        hover: {
                                            color: '#BADA55'
                                        }
                                    },
                                    dataLabels: {
                                        enabled: true,
                                        format: '{point.name}',
                                    }
                                }]
                            });
                        })
                        ();
                    </script>
                @endsection
                <div class="col-lg-4 py-4">

                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $totalPoint }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Total de Pontos de Acesso</strong> </p>

                    </div><!-- End Stats Item -->

                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $totalGoodPoint }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <a href="" data-bs-toggle="modal" data-bs-target="#GoodStateModal_">
                            <p><strong>Total em optimo estado</strong></p>
                        </a>
                    </div><!-- End Stats Item -->

                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $totalBadPoint }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <a href="" data-bs-toggle="modal" data-bs-target="#BadStateModal_">
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
                <h2><a href="{{ route('site.services') }}">Nossos serviços</a></h2>
                <p>Aqui apresentamos os nossos serviços mais destacados</p>
            </div>

            <div class="row gy-4 posts-list " data-aos="fade-up" data-aos-delay="100">
                @foreach ($services as $item)
                    <div class="col-xl-4 col-md-6">
                        <article class="my">

                            <div class="post-img">
                                <img src="{{ url("/storage/$item->logo") }}" alt="{{ $item->title }}"
                                    class="img-fluid">
                            </div>

                            <h2 class="title">
                                <a href="{!! url('/servicos/' . urlencode($item->title)) !!}">{{ $item->title }}</a>
                            </h2>

                            <p class="post-category">{!! html_entity_decode(mb_substr($item->description, 0, 100, 'UTF-8')) !!}</p>




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

<div class="modal fade" id="GoodStateModal_" tabindex="-1" aria-labelledby="GoodStatModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-lg">
            <div class="modal-header box-shadow-1" style="text-shadow: 1px 1px 2px #7DA0B1">
                <h1 class="modal-title fs-5" id="GoodStatModalLabel">Pontos em optimo estado: ({{ $totalGoodPoint }})
                </h1>
                <button type="button" class="btn-close" style="background-color: #c9c9c9" data-bs-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true"><strong>&times;</strong></span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="tree">
                            @foreach ($totalGoodPoints as $item => $pointList)
                                <ul>
                                    <li><span><a style="color:#000; text-decoration:none;" data-toggle="collapse"
                                                href="#Web" aria-expanded="true" aria-controls="Web"><i
                                                    class="collapsed"><i class="fas fa-folder"></i></i>
                                                <i class="expanded"><i class="far fa-folder-open">
                                                        @if ($item == 1)
                                                            <p>{{ $item }} - Bengo</p>
                                                        @elseif ($item == 2)
                                                            <p>{{ $item }} - Benguela</p>
                                                        @elseif ($item == 3)
                                                            <p>{{ $item }} - Bié</p>
                                                        @elseif ($item == 4)
                                                            <p>{{ $item }} - Cabinda</p>
                                                        @elseif ($item == 5)
                                                            <p>{{ $item }} - Cuando-Cubango</p>
                                                        @elseif ($item == 6)
                                                            <p>{{ $item }} - Cunene</p>
                                                        @elseif ($item == 7)
                                                            <p>{{ $item }} - Huambo</p>
                                                        @elseif ($item == 8)
                                                            <p>{{ $item }} - Huíla</p>
                                                        @elseif ($item == 9)
                                                            <p>{{ $item }} - Kwanza Sul</p>
                                                        @elseif ($item == 10)
                                                            <p>{{ $item }} - Kwanza Norte</p>
                                                        @elseif ($item == 11)
                                                            <p>{{ $item }} - Luanda</p>
                                                        @elseif ($item == 12)
                                                            <p>{{ $item }} - Lunda Norte</p>
                                                        @elseif ($item == 13)
                                                            <p>{{ $item }} - Lunda Sul</p>
                                                        @elseif ($item == 14)
                                                            <p>{{ $item }} - Malanje</p>
                                                        @elseif ($item == 15)
                                                            <p>{{ $item }} - Moxico</p>
                                                        @elseif ($item == 16)
                                                            <p>{{ $item }} - Namibe</p>
                                                        @elseif ($item == 17)
                                                            <p>{{ $item }} - Uíge</p>
                                                        @elseif ($item == 18)
                                                            <p>{{ $item }} - Zaire</p>
                                                        @endif
                                                    </i></i></a></span>
                                        <div id="Web" class="collapse show">
                                            @foreach ($pointList as $point)
                                                <ul>
                                                    <li>{{ $point->name }}</li>
                                                </ul>
                                            @endforeach
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="BadStateModal_" tabindex="-1" aria-labelledby="BadStateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-lg">
            <div class="modal-header box-shadow-1" style="text-shadow: 1px 1px 2px #7DA0B1">
                <h1 class="modal-title fs-5" id="BadStateModalLabel">Pontos indisponíveis: ({{ $totalBadPoint }})
                </h1>
                <button type="button" class="btn-close" style="background-color: #c9c9c9" data-bs-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true"><strong>&times;</strong></span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="tree">
                            @foreach ($totalBadPoints as $item => $pointList)
                                <ul>
                                    <li><span><a style="color:#000; text-decoration:none;" data-toggle="collapse"
                                                href="#Web" aria-expanded="true" aria-controls="Web"><i
                                                    class="collapsed"><i class="fas fa-folder"></i></i>
                                                <i class="expanded"><i class="far fa-folder-open">
                                                        @if ($item == 1)
                                                            <p>{{ $item }} - Bengo</p>
                                                        @elseif ($item == 2)
                                                            <p>{{ $item }} - Benguela</p>
                                                        @elseif ($item == 3)
                                                            <p>{{ $item }} - Bié</p>
                                                        @elseif ($item == 4)
                                                            <p>{{ $item }} - Cabinda</p>
                                                        @elseif ($item == 5)
                                                            <p>{{ $item }} - Cuando-Cubango</p>
                                                        @elseif ($item == 6)
                                                            <p>{{ $item }} - Cunene</p>
                                                        @elseif ($item == 7)
                                                            <p>{{ $item }} - Huambo</p>
                                                        @elseif ($item == 8)
                                                            <p>{{ $item }} - Huíla</p>
                                                        @elseif ($item == 9)
                                                            <p>{{ $item }} - Kwanza Sul</p>
                                                        @elseif ($item == 10)
                                                            <p>{{ $item }} - Kwanza Norte</p>
                                                        @elseif ($item == 11)
                                                            <p>{{ $item }} - Luanda</p>
                                                        @elseif ($item == 12)
                                                            <p>{{ $item }} - Lunda Norte</p>
                                                        @elseif ($item == 13)
                                                            <p>{{ $item }} - Lunda Sul</p>
                                                        @elseif ($item == 14)
                                                            <p>{{ $item }} - Malanje</p>
                                                        @elseif ($item == 15)
                                                            <p>{{ $item }} - Moxico</p>
                                                        @elseif ($item == 16)
                                                            <p>{{ $item }} - Namibe</p>
                                                        @elseif ($item == 17)
                                                            <p>{{ $item }} - Uíge</p>
                                                        @elseif ($item == 18)
                                                            <p>{{ $item }} - Zaire</p>
                                                        @endif
                                                    </i></i></a></span>
                                        <div id="Web" class="collapse show">
                                            @foreach ($pointList as $point)
                                                <ul>
                                                    <li>{{ $point->name }}</li>
                                                </ul>
                                            @endforeach
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

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

<script>
    // Treeview Initialization
    $(document).ready(function() {
        $('.treeview').mdbTreeview();
    });
</script>
