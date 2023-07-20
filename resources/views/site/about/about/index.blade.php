@extends('layouts.merge.site')
@section('title', 'Definição do INFOSI')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Definição do INFOSI</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->


    <main id="main">


        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                @foreach ($definitions as $item)
                    <div class="row gy-4 py-4">
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                    </div>
                @endforeach

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h3>Missão</h3>
                        <img src="/site/img/Missao.png" class="img-fluid rounded-4 mb-4" alt="">
                        <p style="text-align: justify">O INFOSI tem por missão a execução e distribuição dos serviços públicos de tecnologias de
                            informação e de telecomunicações administrativas definidas pelo Executivo no âmbito das
                            políticas e estratégias de desenvolvimento, conhecimento e a promoção da inclusão digital.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <h3>Histórico</h3>
                            <p style="text-align: justify">
                                O INFOSI foi criado a 20 de Abril de 2016, através do Decreto Presidencial nº 86/16, como
                                resultado da fusão do Centro Nacional das Tecnologias de Informação (CNTI) e do Instituto de
                                Telecomunicações Administrativas (INATEL). Esta fusão resultou em virtude da necessidade de
                                se racionalizar os recursos humanos e materiais adstritos ao CNTI e ao INATEL, no âmbito da
                                prossecução das respectivas atribuições.
                            </p>
                            <p>
                                O INFOSI tem a sua sede em Luanda, e exerce a sua actividades em todo o território nacional
                            </p>

                            <div class="position-relative mt-4">
                                <img src="/site/img/banner-infosi-copia.jpg" class="img-fluid rounded-4" alt="">
                                <a href="https://www.youtube.com/embed/5EwERkoUepI" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

    </main>
@endsection
