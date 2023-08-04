@extends('layouts.merge.site')
@section('title', 'Notícia')
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

                    <div class="col-lg-12">

                        <article class="blog-details">

                            <div class="post-img">
                                <div class="card border-0 bg-transparent">
                                    <div class="card-img-top img-fluid rounded"
                                        style='background-image:url("/storage/{{ $service->logo }}");background-position:center;background-size:cover;height:800px;width:auto;'>
                                    </div>
                                </div> <!-- .card -->
                            </div>

                            <h2 class="title">{{ $service->title }}
                            </h2>

                            {{--  <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i>{{ $service->typewriter }}</li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time
                                            datetime="2020-01-01">{{ date('d/m/Y', strtotime($service->date)) }}</time></li>

                                </ul>
                            </div><!-- End meta top -->  --}}

                            <div class="content">
                                {!! html_entity_decode($service->description) !!}

                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="{{ route('site.services') }}">Serviços</a></li>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article><!-- End blog post -->



                    </div>

                </div>

            </div>
        </section><!-- End Blog Details Section -->
    </main>
@endsection
