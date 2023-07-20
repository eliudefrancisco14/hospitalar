@extends('layouts.merge.site')
@section('title', 'Galeria de Imagens')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center">
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

                    @foreach ($galleries as $item)
                        <div class="col-xl-4 col-md-6">
                            <article class="my">

                                <div class="post-img">
                                    <img src="{{ url("/storage/$item->image") }}" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">{{ $item->name }}</p>

                                <h2 class="title">
                                    <a href="{!! url('/galeria-de-imagens/' . urlencode($item->name)) !!}">{!! html_entity_decode(mb_substr($item->description, 0, 80, 'UTF-8')) !!}</a>
                                </h2>

                            </article>
                        </div><!-- End post list item -->
                    @endforeach

                    <nav class="justify-content-center d-flex mt-0">
                        <b> {{ $galleries->links() }}</b>
                    </nav>

                </div><!-- End blog posts list -->


            </div>
        </section><!-- End Blog Section -->
    </main>
@endsection
