@extends('layouts.merge.site')
@section('title', 'Galeria de Imagens')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Galeria de Imagens "Nome"</h2>
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
                    <p>Detalhes da Galeria </p>
                </div>
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
