@extends('layouts.merge.site')
@section('titulo', 'Oficial')
@section('content')


    <main>




        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @if ($slideFirst)
                        <div class="carousel-item  active">

                            <div class=""
                                style='background-position:center; background-size:initial; height:700px; width:100%;background-image: url("/storage/{{ $slideFirst->path }}");no-repeat;
                                
                            background-size:cover;
                            background-image: url("/storage/{{ $slideFirst->path }}"); box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);
                                '>
                                <div class="carousel-caption ">
                                    <div class="col mt-sm-11 mt-md-11 mt-lg-0">
                                        @if ($slideFirst->title)
                                            <h2 id="title" class="text-white mb-5  text-center"
                                                style="text-shadow: 1px 1px #000; font-size:43px;">{{ $slideFirst->title }}
                                            </h2>
                                        @endif
                                        @if ($slideFirst->description)
                                            <p id="description" class="small mb-n2  text-white mb-3 "
                                                style="text-shadow: 1px 1px #000; font-size:23px;">
                                                {{ $slideFirst->description }}
                                            </p>
                                        @endif

                                        @if ($slideFirst->link)
                                            <a href="{{ $slideFirst->link }}" data-scroll
                                                class="btn btn-secondary text-uppercase d-inline-flex align-items-center my-6">
                                                {{ $slideFirst->button }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @isset($slideshows)

                        @foreach ($slideshows as $item)
                            <div class="carousel-item ">

                                <div class=""
                                    style='background-position:center;  height:700px; width:100%;background-image: url("/storage/{{ $item->path }}");no-repeat;
                                    
                                    
                            background-size:cover;
                            background-image: url("/storage/{{ $item->path }}"); box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);
                                    
                                    '>
                                    <div class="carousel-caption ">
                                        <div class="col mt-sm-11 mt-md-11 mt-lg-0">
                                            @if ($item->title)
                                                <h2 id="title" class="text-white mb-5  text-center"
                                                    style="text-shadow: 1px 1px #000; font-size:43px;">{{ $item->title }}</h2>
                                            @endif
                                            @if ($item->description)
                                                <p id="description" class="small mb-n2  text-white mb-3 "
                                                    style="text-shadow: 1px 1px #000; font-size:23px;">
                                                    {{ $item->description }}
                                                </p>
                                            @endif

                                            @if ($item->link)
                                                <a href="{{ $item->link }}" data-scroll
                                                    class="btn btn-secondary text-uppercase d-inline-flex align-items-center my-6">
                                                    {{ $item->button }}
                                                </a>
                                            @endif
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
        </section>


        <section class="div-countdown">

            <div class="row">
                <div class="col-12">


                    <ul class="countdown" style="list-style: none; ">
                        <li style="margin-top: 15%">
                            <span class="days display-4"></span>
                            <div>Dia(s)</div>

                        </li>

                        <li style="margin-top: 15%">
                            <span class="hours display-4"></span>
                            <div>Hora(s)</div>

                        </li>
                        <li style="margin-top: 15%">
                            <span class="minutes display-4"></span>
                            <div>Minutos</div>

                        </li>
                        <li style="margin-top: 15%">
                            <span class="seconds display-4"></span>
                            <div>Seg</div>
                        </li>
                    </ul>

                </div>
            </div>
        </section>




        <section class="bg-light py-6 py-lg-7 text-dark">
            <div class=container>
                <div class=row>
                    <div class=col-lg>
                        <h2 class=h2>43ª Cimeira de Chefes de Estado e de Governo da SADC</h2>
                    </div>
                    <div class="col-lg font-size-6">


                        <b> Lema</b> <br>
                        Capital Humano e Financeiro: os Principais Factores para a Industrialização Sustentável da Região da
                        SADC .
                        <br> <br>
                        Human And Financial Capital: The main factors for the sustainable industrialization of the SADC
                        Region
                        <br> <br>
                        Capital Humain Et Financier: Les Principaux Facteurs de Industrialisation durable de la Région
                        De La
                        SADC. <br> <br>

                        <b> Onde?</b> <br>
                        Hotel Intercontinental Luanda Miramar

                        </p>
                        <p class=mb-0>
                            <b> Quando?</b> <br>
                        <p>
                            De 07 à 17 de Agosto de 2023
                        </p>
                    </div>

                </div>
            </div>
        </section>

        @include('extra._countdown.index')


        @include('extra._schedule.index')
        <section class="py-6 py-lg-7">
            <div class=container>
                <div class=row>
                    <div class="col my-5">
                        <a href="{{ route('site.news') }}">
                            <h2 class="text-dark">Notícias do Evento</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class=container>
                <div class="row mx-n3 grid" data-isotope='{"layoutMode": "masonry", "itemSelector": ".grid-item"}'
                    id=portfolio>


                    @foreach ($news as $item)
                        <div class="example-1 card detail grid-item branding col-md-4 col-lg-4 px-3 mb-5">
                            <div class="wrapper shadow image"
                                style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;'>
                                <div class="date">
                                    <span class="day">{{ date('d', strtotime($item->date)) }}</span>
                                    <span class="month">{{ date('m', strtotime($item->date)) }}</span>
                                    <span class="year">{{ date('Y', strtotime($item->date)) }}</span>
                                </div>
                                <div class="data">
                                    <div class="content" style="border-radius: 5px;height: 420px;">

                                        <h5 class="title"><a href="{!! url('/noticia/' . urlencode($item->title)) !!}">{!! html_entity_decode(mb_substr($item->title, 0, 60, 'UTF-8')) !!}
                                                {{ strlen(mb_substr($item->title, 0, 60, 'UTF-8')) >= 60 ? ' ...' : '' }}</a>
                                        </h5>
                                        <p>{!!html_entity_decode(mb_substr($item->body, 0, 120, 'utf-8'))!!}...</p>
                                        <br>
                                        <p class="text mt-4"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-6 py-lg-7 bg-light">
            <div class=container>
                <div class=row>
                    <div class="col my-5">

                        <a href="{{ route('site.docs') }}">
                            <h2 class="text-dark">Documentos</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-0">
                <div class=row>
                    <div class=col>
                        <div class="swiper container">
                            <div class="swiper-container overflow-visible"
                                data-options='{"slidesPerView": 1, "breakpoints": {"768": {"slidesPerView": 2}, "992": {"slidesPerView": 2}}}'>
                                <div class=swiper-wrapper>
                                    @foreach ($docs as $item)
                                        <div class=swiper-slide>
                                            <div class="card shadow lift">
                                                <div class="card-body text-center">
                                                    <a href="/storage/{{ $item->path }}" target="_blank">
                                                        <img src="/site/images/icons/pdf.png" alt="logo pdf" width="60"
                                                            class="mb-2">

                                                        <h3 class="h4 mt-2 text-primary">{{ $item->title }}</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="d-flex justify-content-end">
                    <div class="swiper-btn swiper-btn-prev" tabindex=0 role=button aria-label="Previous slide"></div>
                    <div class="swiper-btn swiper-btn-next ml-3" tabindex=0 role=button aria-label="Next slide"></div>
                </div>
            </div>
        </section>

        <section class="py-6 py-lg-7">
            <div class=container>
                <div class=row>
                    <div class="col my-5">
                        <a href="{{ route('site.gallery') }}">
                            <h2 class="text-dark">Galerias</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class=container>
                <div class="row mx-n3 grid" data-isotope='{"layoutMode": "masonry", "itemSelector": ".grid-item"}'
                    id=portfolio>

                    @foreach ($galleries as $item)
                        <div class="example-2 card detail grid-item branding col-md-6 col-lg-4 px-3 mb-5">
                            <div class="wrapper shadow image"
                                style='background-image:url("/storage/{{ $item->cover }}");background-position:center;background-size:cover;'>
                                <div class="data">
                                    <div class="content" style="height: 235px;">
                                        <h4 class="title"><a href="{!! url('/galeria/' . urlencode($item->name)) !!}">{{ $item->name }}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-6 py-lg-7 mt-6 mt-lg-7 bg-light">
            <div class=container>

                <div class="row justify-content-center text-center">
                    <div class=col-md-3>

                        <p class="mb-5 mb-md-0"><span class=display-4 data-countup data-from=4000
                                data-to=data-options='{"suffix": "+"}'> {!! number_format(4000, 0, ',', '.') !!}</span><br><span
                                class="d-block text-muted mt-n1">Expectativa
                                de Visitantes</span></p>
                    </div>
                    <div class=col-md-3>
                        <p class="mb-5 mb-md-0"><span class=display-4 data-countup data-from=0 data-to=16></span><br><span
                                class="d-block text-muted mt-n1">Países </span></p>
                    </div>

                    <div class=col-md-3>

                        <p class="mb-5 mb-md-0"><span class=display-4 data-countup data-from=10000
                                data-to=data-options='{"suffix": "+"}'> {!! number_format($signup, 0, ',', '.') !!}</span><br><span
                                class="d-block text-muted mt-n1">Participantes Inscritos</span></p>
                    </div>


                    <div class=col-md-3>
                        <p class="mb-5 mb-md-0"><span class=display-4 data-countup data-from=10000
                                data-to=data-options='{"suffix": "+"}'> {!! number_format(500, 0, ',', '.') !!}</span><br><span
                                class="d-block text-muted mt-n1">Jornalistas</span></p>


                    </div>
                </div>
            </div>
        </section>

        @include('extra._members.index')
        <section class="py-13 py-lg-15">
            <div class="bg-primary bg-image bg-position-bottom-center bg-cover overlay overlay-primary overlay-60"
                style="background-image: url(/site/images/footer-3.jpg);">
                <div class="container h-100">
                    <div class="row align-items-center h-100 text-white">
                        <div class=col>
                            <h2 class=mb-5>
                                Hotel Intercontinental Luanda Miramar
                            </h2>

                            <p class="font-size-5 mb-3">
                                De 07 à 17 de Agosto de 2023
                            </p>
                            <a href="https://www.google.com/maps/place/InterContinental+Luanda+Miramar,+an+IHG+Hotel/@-8.8115615,13.2425289,15z/data=!4m8!3m7!1s0x0:0x2e60a5004490d28a!5m2!4m1!1i2!8m2!3d-8.8115615!4d13.2425289"
                                target="_blank" class="btn btn-secondary text-uppercase d-inline-flex align-items-center">
                                Mapa de Direcções
                                <svg width=20 height=20 class=ml-2 xmlns=http://www.w3.org/2000/svg viewBox="0 0 24 24">
                                    <title>trip-distance</title>
                                    <path
                                        d=M5.5,8.5A5.506,5.506,0,0,0,0,14c0,3.555,4.545,8.922,4.74,9.15a1,1,0,0,0,1.52,0C6.453,22.923,11,17.561,11,14A5.506,5.506,0,0,0,5.5,8.5Zm0,8A2.5,2.5,0,1,1,8,14,2.5,2.5,0,0,1,5.5,16.5Z />
                                    <path
                                        d=M19.5.5A4.505,4.505,0,0,0,15,5c0,3.171,3.978,7.185,4.146,7.354a.5.5,0,0,0,.708,0C20.022,12.185,24,8.171,24,5A4.505,4.505,0,0,0,19.5.5Zm0,6A1.5,1.5,0,1,1,21,5,1.5,1.5,0,0,1,19.5,6.5Z />
                                    <path
                                        d=M17.187,14.643l-7.2,6.22a1,1,0,0,0,1.307,1.514l7.2-6.221a1,1,0,1,0-1.306-1.513Z />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
@section('CSSJS')
    <link rel="stylesheet" href="/site/css/card-slide.css">
@endsection
