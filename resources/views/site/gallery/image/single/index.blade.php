@extends('layouts.merge.site')
@section('title', 'Galeria de Imagens')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2>Galeria de Imagens "{{ $gallery->name }}"</h2>
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
                    <p>{{ $gallery->description }} </p>
                </div>
                <div class="row gy-4 posts-list">


                    @foreach ($images as $item)
                        <div class="col-xl-4 col-md-6">

                            <div class="text-white my">
                                <img src="{{ url("/storage/$item->path") }}" class="card-img img-fluid rounded-4 mb-4"
                                    alt="{{ $gallery->name }}">
                            </div>
                        </div><!-- End post list item -->
                    @endforeach




                </div><!-- End blog posts list -->

                <nav class="justify-content-center d-flex mt-0">
                    <b> {{ $images->links() }}</b>
                </nav>

            </div>
        </section><!-- End Blog Section -->
    </main>
@endsection
