@extends('layouts.merge.site')
@section('title', 'Regulamentos')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Regulamentos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->


    <main id="main">

        <!-- ======= Our Services Section ======= -->
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <p>Regulamentos </p>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                    @foreach ($regulations as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item  position-relative">
                                <div class="icon">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                </div>
                                <h3>{{ $item->title }}</h3>
                                <a href="{{ url("/storage/$item->path") }}" target="_blank" class="readmore stretched-link"></a>
                            </div>
                        </div><!-- End Service Item -->
                    @endforeach

                </div>

            </div>
        </section><!-- End Our Services Section -->
    </main>
@endsection
