@extends('layouts.merge.site')
@section('titulo', 'Erro 404')
@section('content')



    <main id="main">


        <section class="about section-bg">
            <div class="container text-center" data-aos="fade-up">
                <div class="text-center">
                    <a href="{{ url('/') }}">
                        <img src="{{ url('site/assets/img/404.png') }}" height="200" alt="">
                    </a>
                    <h3>Não conseguimos encontrar esta página.</h3>
                    <a href="{{ url('/') }}" class="appointment-btn scrollto">Voltar a página Principal</a>
                </div>
            </div>
        </section><!-- End About Us Section -->

    </main>

@endsection
