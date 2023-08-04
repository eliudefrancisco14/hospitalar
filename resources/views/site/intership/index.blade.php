@extends('layouts.merge.site')
@section('title', 'Programa de Estágio')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2>Programa de Estágio</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->


    <main id="main">


        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <p>Insira os seus dados para o programa de estágio</p>
                </div>

                <div class="row gx-lg-0 gy-4">

                    <div class="col-lg-12">
                        <form action="{{ route('site.internship.store') }}" method="post" role="form"
                            class="php-email-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Seu Nome Completo<b class="text-danger">*</b></label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Informe seu nome completo" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="email">Seu E-mail<b class="text-danger">*</b></label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Informe o seu e-mail" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="phone">Nº de telefone<b class="text-danger">*</b></label>
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Informe o seu nº de telefone" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="doc">Curriculum Vitae<b class="text-danger">*</b></label>
                                    <input type="file" class="form-control" name="doc" id="doc" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="doc">Mensagem<b class="text-danger">*</b></label>
                                <textarea class="form-control" name="message" rows="7" placeholder="Mensagem" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Sua Inscrição foi feita com sucesso. Obrigado!</div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>


@endsection
