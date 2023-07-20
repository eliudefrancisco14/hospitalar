@extends('layouts.merge.site')
@section('titulo', 'Erro 404')
@section('content')



    <main id="main">


        <section id="about" class="about">
            <div class="container text-center" data-aos="fade-up">
                <a href="{{ url('/') }}">
                    <img src="{{ url('site/img/error404.jpg') }}" height="500px" alt="">
                </a>
                <div class="text-center">
                    <h3>Não conseguimos encontrar esta página.</h3>
                    <a href="{{ url('/') }}" class="btn buy-btn">Voltar a página Principal</a>
                </div>
            </div>
        </section><!-- End About Us Section -->

    </main>

@endsection
