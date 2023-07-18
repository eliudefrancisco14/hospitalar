@extends('layouts.merge.site')
@section('title', 'Sobre o INFOSI')
@section('content')


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero"
        style=" background-image: url({{ url('site/img/banner-infosi.jpg') }}); background-position: center;  background-size: cover; background-repeat: no-repeat;">

        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Sobre o INFOSI</h2>
                        <p class="py-3">
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="breadcrumbs">
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="{{ route('site.home') }}">Home</a></li>
                        <li>Sobre o INFOSI</li>
                    </ol>
                </div>
            </nav>
        </div>

    </section>
    <!-- End Hero Section -->


    <main id="main">


        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Sobre Nós</h2>
                    <p>O Instituto Nacional de Fomento da Sociedade de Informação- INFOSI, é um Instituto público de
                        prestação de serviço com carácter científico e desenvolvimento tecnológico, tutelado pelo Ministério
                        das Telecomunicações, Tecnologia da Informação e Comunicação Social.</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h3>Missão</h3>
                        <img src="/site/img/Missao.png" class="img-fluid rounded-4 mb-4" alt="">
                        <p>O INFOSI tem por missão a execução e distribuição dos serviços públicos de tecnologias de
                            informação e de telecomunicações administrativas definidas pelo Executivo no âmbito das
                            políticas e estratégias de desenvolvimento, conhecimento e a promoção da inclusão digital.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <h3>Histórico</h3>
                            <p>
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
