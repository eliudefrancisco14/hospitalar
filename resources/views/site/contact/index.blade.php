@extends('layouts.merge.site')
@section('title', 'Contacte-nos')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2>Contactos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->


    <main id="main">

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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-content-{{ $loop->index + 1 }}">
                                            <span class="num">{{ $loop->index + 1 }}.</span>
                                            {{ $item->title }}
                                        </button>
                                    </h3>
                                    <div id="faq-content-{{ $loop->index + 1 }}" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            {!! html_entity_decode($item->description) !!}
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
                    <p>Pode Entrar em Contacto Connosco apartir dos seguintes terminais </p>
                </div>

                <div class="row gx-lg-0 gy-4">

                    <div class="col-lg-4">

                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Localização:</h4>
                                    <p> {{ isset($contact) ? $contact->address : 'Aqui vai a localização' }}
                                    </p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>E-mail:</h4>
                                    <p> {{ isset($contact) ? $contact->email : 'Aqui vai o email' }} </p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Telefone:</h4>
                                    <p> {{ isset($contact) ? $contact->telephone : 'Aqui vai o telefone' }} </p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-8">
                        @include('errors.form')
                        <form action="{{ route('site.help.email') }}" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Seu nome" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Seu E-mail" required>
                                </div>
                                <div class="col-md-12 form-group mt-3 mt-md-0">
                                    <input class="form-control" type="text" name="subject" placeholder="Assunto"
                                        aria-label="Assunto">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="msg" rows="7" placeholder="Mensagem" required></textarea>
                            </div>
                            <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    {!! RecaptchaV3::field('register') !!}
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class=col-md>
                                <p class="small text-muted mb-4">Preencha com dados Verdadeiros!</p>
                            </div>
                            <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>
@endsection
