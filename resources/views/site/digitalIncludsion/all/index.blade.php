@extends('layouts.merge.site')
@section('title', 'Inclusão Digital')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Inclusão Digital</h2>
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
                    <p>Inclusão Digital </p>
                </div>

                <div class="row gy-4 posts-list">

                    @foreach ($digitalInclusions as $item)
                        <div class="col-xl-4 col-md-6">
                            <article class="my">

                                <div class="post-img">
                                    <img src="{{ url("/storage/$item->image") }}" alt="" class="img-fluid">
                                </div>

                                <h2 class="title">
                                    <a href="{!! url('/inclusao-digital/' . urlencode($item->name)) !!}">{{ $item->name }}</a>
                                </h2>
    
                                <p class="post-category">{!! html_entity_decode(mb_substr($item->description, 0, 100, 'UTF-8')) !!}</p>


                            </article>
                        </div><!-- End post list item -->
                    @endforeach

                    <nav class="justify-content-center d-flex mt-0">
                        <b> {{ $digitalInclusions->links() }}</b>
                    </nav>

                </div><!-- End blog posts list -->


            </div>
        </section><!-- End Blog Section -->
    </main>
@endsection
