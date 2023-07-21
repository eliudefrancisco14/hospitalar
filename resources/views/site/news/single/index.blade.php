@extends('layouts.merge.site')
@section('title', 'Notícia')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>{{ $news->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->


    <main id="main">

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">

                    <div class="col-lg-8">

                        <article class="blog-details">

                            <div class="post-img">
                                <img src="{{ url("/storage/$news->path") }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="title">{{ $news->title }}
                            </h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i>{{ $news->typewriter }}</li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time
                                            datetime="2020-01-01">{{ date('d/m/Y', strtotime($news->date)) }}</time></li>

                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                {!! html_entity_decode($news->body) !!}

                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="{{ route('site.news') }}">Notícias</a></li>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article><!-- End blog post -->



                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Notícias Recentes</h3>
                                <div class="mt-3">

                                    @foreach ($lasted as $item)
                                        <div class="post-item mt-3">
                                            <img src="{{ url("/storage/$item->path") }}" alt="">
                                            <div>
                                                <h4><a href="{!! url('/noticia/' . urlencode($item->title)) !!}">{{ $item->title }}</a></h4>
                                                <time
                                                    datetime="2020-01-01">{{ date('d/m/Y', strtotime($item->date)) }}</time>
                                            </div>
                                        </div><!-- End recent post item-->
                                    @endforeach


                                </div>

                            </div><!-- End sidebar recent posts-->





                            <div class="sidebar-item categories">
                                <h3 class="sidebar-title">Galeria de Imagens</h3>
                                <div class="mt-3">

                                    @foreach ($lastedGallery as $item)
                                        <div class="post-item mt-3">
                                            <a href="{!! url('/galeria-de-imagens/' . urlencode($item->name)) !!}">
                                                <img src="{{ url("/storage/$item->image") }}" alt=""
                                                    class="img-fluid rounded">
                                                <div>
                                                    <h4><a href="{!! url('/galeria-de-imagens/' . urlencode($item->name)) !!}">{{ $item->name }}</a></h4>
                                                    <time
                                                        datetime="2020-01-01">{{ date('d/m/Y', strtotime($item->created_at)) }}</time>
                                                </div>
                                            </a>
                                        </div><!-- End recent post item-->
                                    @endforeach


                                </div>

                            </div><!-- End sidebar recent posts-->

                        </div><!-- End Blog Sidebar -->

                    </div>
                </div>

            </div>
        </section><!-- End Blog Details Section -->
    </main>
@endsection
