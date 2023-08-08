@extends('layouts.merge.site')
@section('title', 'Serviço de ' . $service->title)
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2>{{ $service->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->


    <main id="main">

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">

                    <div class="col-lg-4">



                        <article class="blog-details">
                            <div class="card-deck post-img">
                                <div class="card border-0 bg-transparent">

                                    <div class="card-img-top img-fluid"
                                        style='background-image:url("/storage/{{ $service->logo }}");background-position:center;background-size:cover;height:400px;width:auto;'>
                                    </div>
                                </div> <!-- .card -->
                            </div>
                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="{{ route('site.services') }}">Serviços</a></li>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article><!-- End blog post -->
                    </div>

                    <div class="col-lg-8 pt-2">

                        <h2 class="title"><a href="#">{{ $service->title }}</a></h2>
                        <div class="content" style="text-align: justify">

                            {!! html_entity_decode($service->description) !!}

                        </div><!-- End post content -->

                    </div>






                </div>

            </div>
        </section><!-- End Blog Details Section -->
    </main>
@endsection
