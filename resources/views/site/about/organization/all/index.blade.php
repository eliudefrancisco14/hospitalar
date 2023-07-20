@extends('layouts.merge.site')
@section('title', 'Estrutura Orgânica')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Estrutura Orgânica</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->


    <main id="main">
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Direcção</h2>
                    <p>A direcção está constituída pelos seguintes orgãos:</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">


                    <div class="row gy-4 portfolio-container">


                        @foreach ($directions as $item)
                            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                                <div class="portfolio-wrap">
                                    <a href="{{ url("/storage/$item->path") }}" data-gallery="portfolio-gallery-app"
                                        class="glightbox"><img src="{{ url("/storage/$item->path") }}" class="img-fluid"
                                            alt=""></a>
                                    <div class="portfolio-info">
                                        <h4><a href="{!! url('/estrutura-organica/' . urlencode($item->name)) !!}" title="More Details">{{ $item->name }}</a></h4>
                                        <p>{{ $item->office }}</p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach

                    </div><!-- End Portfolio Container -->

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Department Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Departamentos</h2>
                    <p>O INFOSI intrega os seguintes departamentos</p>
                </div>
                <div class="row gy-4">


                    <div class="col-lg-12">

                        <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                            @foreach ($departments as $item)
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-content-1">
                                            <span class="num">{{ $loop->index + 1 }}.</span>
                                            {{ $item->name }}
                                        </button>
                                    </h3>
                                    <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            <p><b>Chefe de Departamento:</b> {{ $item->boss }} </p>
                                            {{ $item->description }}
                                        </div>
                                    </div>
                                </div><!-- # Faq item-->
                            @endforeach

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Department Section -->

    </main>

@endsection
