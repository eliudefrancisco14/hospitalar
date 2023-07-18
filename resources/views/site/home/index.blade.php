@extends('layouts.merge.site')
@section('title', 'Portal Oficial do INFOSI')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero"
        style=" background-image: url({{ url('site/img/banner-infosi.jpg') }}); background-position: center;  background-size: cover; background-repeat: no-repeat;">

        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Seja Bem-Vindo ao <span>Infosi</span></h2>
                    <p>Instituto Público de Prestação de Serviço com Carácter
                        Científico e Desenvolvimento Tecnológico</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        {{--  <a href="#about" class="btn-get-started">Inciar</a>  --}}
                    </div>
                </div>
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
                            <h4 class="title"><a href="#services" class="stretched-link">Serviços</a></h4>
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
    <section id="services" class="services sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Nossos serviços</h2>
                <p>Aqui apresentamos os nossos serviço mais destacados</p>
            </div>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 col-md-6">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="bi bi-gear"></i>
                        </div>
                        <h3>Desenvolvimento de Sistemas</h3>

                        <p>Desenvolvimento de aplicações Mobile, Web e Desktop.</p>
                        <a href="#" class="readmore stretched-link">Leia mais <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-gear"></i>
                        </div>


                        <h3>Registro de Empresa</h3>
                        <p>Emissão de certificado sobre aptidão tecnológico das empresas.</p>
                        <a href="#" class="readmore stretched-link">Leia mais <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-gear"></i>
                        </div>
                        <h3>Registo de Domínio .ao</h3>
                        <p>Gerir facilmente o servidor de nomes com um painel de controle fácil e rápido de utilizar.
                        </p>
                        <a href="#" class="readmore stretched-link">Leia mais <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->


            </div>

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


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="content px-xl-5">
                        <h3><strong>Perguntas</strong> Frequentes</h3>
                        <p>
                            As perguntas mais frequentes são respondidas aqui
                        </p>
                    </div>
                </div>

                <div class="col-lg-8">

                    <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
                        @foreach ($faqs as $item)
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-{{ $loop->index + 1 }}">
                                        <span class="num">{{ $loop->index + 1 }}.</span>
                                        {{ $item->title }}
                                    </button>
                                </h3>
                                <div id="faq-content-{{ $loop->index + 1 }}" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        {{ $item->description }}
                                    </div>
                                </div>
                            </div><!-- # Faq item-->
                        @endforeach


                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->


    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Contactos</h2>
                <p>Pode Entrar em Contacto Connosco apartir dos seguintes terminais </p>
            </div>

            <div class="row gx-lg-0 gy-4">

                <div class="col-lg-4">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h4>Open Hours:</h4>
                                <p>Mon-Sat: 11AM - 23PM</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->



</main><!-- End #main -->
@endsection
