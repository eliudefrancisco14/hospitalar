@extends('layouts.merge.site')
@section('title', 'Perguntas Frequentes')
@section('content')


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero"
        style=" background-image: url({{ url('site/img/banner-infosi.jpg') }}); background-position: center;  background-size: cover; background-repeat: no-repeat;">

        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2>Perguntas Frequentes</h2>
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
                        <li>Perguntas Frequentes</li>
                    </ol>
                </div>
            </nav>
        </div>

    </section>
    <!-- End Hero Section -->
    

    <main id="main">

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contactos</h2>
                    <p>Pode Entrar em Contacto Connosco apartir dos seguintes terminais </p>
                </div>


            </div>
        </section><!-- End Contact Section -->
    </main>
@endsection
