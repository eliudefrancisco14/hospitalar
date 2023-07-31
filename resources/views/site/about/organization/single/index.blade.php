@extends('layouts.merge.site')
@section('title', 'Perfil de Director(a)')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2>{{ $direction->name }}</h2>
                        <h4 style="color: #fff;">{{ $direction->office }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->


    <main id="main">
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-between gy-4 mt-4">

                    <div class="col-lg-4" class="">
                        <img src="{{ url("/storage/$direction->path") }}" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-8">
                        <div class="portfolio-info">
                            <h3>{{ $direction->name }}</h3>
                        </div>
                        <div class="portfolio-description" style="text-align: justify">
                            {!! html_entity_decode($direction->body) !!}
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main>

@endsection
