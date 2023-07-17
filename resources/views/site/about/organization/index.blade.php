@extends('layouts.merge.site')
@section('title', 'Organograma')
@section('content')


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero"
        style=" background-image: url({{ url('site/img/banner-infosi.jpg') }}); background-position: center;  background-size: cover; background-repeat: no-repeat;">

        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Organograma</h2>
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
                        <li>Organograma</li>
                    </ol>
                </div>
            </nav>
        </div>

    </section>
    <!-- End Hero Section -->


    <main id="main">
        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Direcção</h2>
                    <p>A direcção está constituída pelos seguintes orgãos:</p>
                </div>

                <div class="row gy-4">
                    <div class="col-xl-4 col-md-7 d-flex" data-aos="fade-up" data-aos-delay="200"></div>

                    <div class="col-xl-4 col-md-7 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="/site/img/direccao/DGAP.png" class="img-fluid" alt="">
                            <h4>André Mpumba Pedro</h4>
                            <span>Director Geral</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-file-earmark-pdf-fill"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-4 col-md-7 d-flex" data-aos="fade-up" data-aos-delay="200"></div>
                </div>
                <div class="row gy-4">
                    <div class="col-xl-4 col-md-7 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <img src="/site/img/direccao/DT.jpeg" class="img-fluid" alt="">
                            <h4>Marcos Cary</h4>
                            <span>Director Geral Adjunto para Área Técnica</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                    <div class="col-xl-4 col-md-7 d-flex" data-aos="fade-up" data-aos-delay="200"></div>
                    <div class="col-xl-4 col-md-7 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="/site/img/direccao/DRD.png" class="img-fluid" alt="">
                            <h4>Rita Diogo</h4>
                            <span>Directora Geral Adjunta Para Área Admnistrativa</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                </div>

            </div>
        </section><!-- End Our Team Section -->
        <div class="container">
            <hr>
        </div>
        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Departamentos</h2>
                    <p>O INFOSI intrega os seguintes departamentos</p>
                </div>
                <div class="row gy-4">


                    <div class="col-lg-12">

                        <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <span class="num">1.</span>
                                        Departamento de Administração de Sistemas, Redes e Comunicações
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <p><b>Chefe de Departamento:</b> Nome Completo </p>
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet
                                        non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor
                                        purus non.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <span class="num">2.</span>
                                        Departamento de Gestão de Infra-Estrutura Tecnológica e Serviços Partilhados
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <p><b>Chefe de Departamento:</b> Nome Completo </p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                        cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <span class="num">3.</span>
                                        Departamento de Massificação, Inclusão e Conteúdo Digital
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <p><b>Chefe de Departamento:</b> Nome Completo </p>
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                        pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                        Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                        tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        <span class="num">4.</span>
                                        Departamento de Cibersegurança, Chaves Públicas e Carimbo do Tempo
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <p><b>Chefe de Departamento:</b> Nome Completo </p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                        cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        <span class="num">5.</span>
                                        Departamento de Apoio ao Director Geral
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <p><b>Chefe de Departamento:</b> Nome Completo </p>
                                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                                        est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                        suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

    </main>

@endsection
