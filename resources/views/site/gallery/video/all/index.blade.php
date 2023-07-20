@extends('layouts.merge.site')
@section('title', 'Galeria de Vídeos')
@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Galeria de Vídeos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->


    <main id="main">

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <p>Galeria de Vídeos</p>
                </div>
                <div class="row gy-4 posts-list">

                    @foreach ($videos as $item)
                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <iframe class="img-center glightbox" width="500" height="300" style="max-width: 100%;"
                                        src="{{ $item->link }}" data-gallery="portfolio-gallery-app" frameborder="0 "
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture "
                                        allowfullscreen></iframe>
                                </div>

                                <p class="post-category">{{ $item->title }}</p>

                                <h2 class="title">
                                    {{ $item->description }}
                                </h2>


                            </article>
                        </div><!-- End post list item -->
                    @endforeach




                </div><!-- End blog posts list -->

                <nav class="justify-content-center d-flex mt-0">
                    <b> {{ $videos->links() }}</b>
                </nav>

            </div>
        </section><!-- End Blog Section -->
    </main>
@endsection
