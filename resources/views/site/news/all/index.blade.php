@extends('layouts.merge.site')
@section('title', 'Notícias')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2>Notícias</h2>
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
                    <p>Notícias do INFOSI </p>
                </div>

                <div class="row gy-4 posts-list">

                    @foreach ($news as $item)
                        <div class="col-xl-4 col-md-6">
                            <article class="my">

                                <div class="post-img">
                                    <img src="{{ url("/storage/$item->path") }}" alt="" class="img-fluid">
                                </div>

                                <div>
                                    <h2 class="title">
                                        <a href="{!! url('/noticia/' . urlencode($item->title)) !!}">{!! html_entity_decode(mb_substr($item->title, 0, 80, 'UTF-8')) !!}</a>
                                    </h2>
                                </div>
                                

                                <p class="post-category">{!! html_entity_decode(mb_substr($item->body, 0, 85, 'UTF-8')) !!}...</p>

                                <div class="d-flex align-items-center">
                                    <div class="post-meta">
                                        <p class="post-author-list">{{ $item->typewriter }}</p>
                                        <p class="post-date">
                                            <time datetime="01-01-2023">{{ date('d/m/Y', strtotime($item->date)) }}</time>
                                        </p>
                                    </div>
                                </div>


                            </article>
                        </div><!-- End post list item -->
                    @endforeach

                    <nav class="justify-content-center d-flex mt-0">
                        <b> {{ $news->links() }}</b>
                    </nav>

                </div><!-- End blog posts list -->


            </div>
        </section><!-- End Blog Section -->
    </main>
@endsection
