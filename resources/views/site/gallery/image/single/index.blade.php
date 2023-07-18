
@extends('layouts.merge.site')
@section('title', 'Galeria de Imagens')
@section('content')


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero"
        style=" background-image: url({{ url('site/img/banner-infosi.jpg') }}); background-position: center;  background-size: cover; background-repeat: no-repeat;">

        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Galeria de Imagens</h2>
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
                        <li>Galeria</li>
                        <li>Imagens</li>
                    </ol>
                </div>
            </nav>
        </div>

    </section>
    <!-- End Hero Section -->


    <main id="main">

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 posts-list">

                    <div class="col-xl-4 col-md-6">

                        <div class="card bg-dark text-white my">
                            <img src="/site/img/blog/blog-1.jpg" class="card-img img-fluid rounded-4 mb-4" alt="...">
                            <div class="card-img-overlay">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Alguma coisa</p>
                            </div>
                          </div>
                    </div><!-- End post list item -->


                </div><!-- End blog posts list -->


            </div>
        </section><!-- End Blog Section -->
    </main>
@endsection




