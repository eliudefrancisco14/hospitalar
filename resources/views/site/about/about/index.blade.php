@extends('layouts.merge.site')
@section('title', 'Definição do INFOSI')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
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
                    <div class="row gy-4 mb-2">
                        <h3>{{ $item->title }}</h3>
                        
                        <p style="text-align: justify">{!! html_entity_decode($item->description) !!}</p>
                    </div>
                @endforeach

            </div>
        </section><!-- End About Us Section -->

    </main>
@endsection
