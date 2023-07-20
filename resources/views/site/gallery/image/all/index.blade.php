@extends('layouts.merge.site')
@section('title', 'Galeria de Imagens')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Galeria de Imagens</h2>
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
                    <p>Galeria de imagens do INFOSI </p>
                </div>

                <div class="row gy-4 posts-list">

                    <div class="col-xl-4 col-md-6">
                        <article class="my">

                            <div class="post-img">
                                <img src="/site/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Politics</p>

                            <h2 class="title">
                                <a href="{{ route('site.image') }}">Dolorum optio tempore voluptas dignissimos</a>
                            </h2>


                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <article class="my">

                            <div class="post-img">
                                <img src="/site/img/blog/blog-2.jpg" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Sports</p>

                            <h2 class="title">
                                <a href="{{ route('site.image') }}">Nisi magni odit consequatur autem nulla dolorem</a>
                            </h2>


                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <article class="my">

                            <div class="post-img">
                                <img src="/site/img/blog/blog-3.jpg" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Entertainment</p>

                            <h2 class="title">
                                <a href="{{ route('site.image') }}">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                            </h2>

                        </article>
                    </div><!-- End post list item -->

                </div><!-- End blog posts list -->


            </div>
        </section><!-- End Blog Section -->
    </main>
@endsection
