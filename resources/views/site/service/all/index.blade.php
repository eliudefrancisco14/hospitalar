@extends('layouts.merge.site')
@section('title', 'Serviços')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2>Serviços</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->


    <main id="main">


        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 posts-list">

                    @foreach ($services as $item)
                        <div class="col-xl-4 col-md-6">
                            <article class="my">

                                <div class="post-img">
                                    <img src="{{ url("/storage/$item->logo") }}" alt="{{ $item->title }}"
                                        class="img-fluid">
                                </div>

                                <h2 class="title">
                                    <a href="{!! url('/servicos/' . urlencode($item->title)) !!}">{{ $item->title }}</a>
                                </h2>

                                <p class="post-category">{!! html_entity_decode(mb_substr($item->description, 0, 100, 'UTF-8')) !!}</p>

                            </article>
                        </div><!-- End post list item -->
                    @endforeach

                </div><!-- End blog posts list -->


            </div>
        </section><!-- End Blog Section -->

    </main>
@endsection
