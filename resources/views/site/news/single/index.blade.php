@extends('layouts.merge.site')
@section('titulo', 'Detalhes da Notícia')
@section('content')
    <main>

        

        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">{{ $news->title }}</h1>
                    
                    </div>
                 
                </div>
            </div>
        </section>
        @include('extra._culture.index')


        <section class="blog_area single-post-area section-padding pt-3 mt-5" >
            <div class="container" >
                <div class="row" >
                    <div class="col-lg-8" > 
                        <div class="single-post"  >
                            <div class="feature-img"  
                            
                            >
                                <img style=" border-radius: 5px;" class="img-fluid" src="/storage/{{ $news->path }}" alt="" width="550"  style='border-radius: 5px;'>
                            </div>
                            <div  class="grid-item branding col-md-6 col-lg-12 px-3 mb-6 text-justify">

                                <ul class="blog-info-link mt-3 mb-4">
                                    <li><i class="fa fa-date"></i>Postado em:
                                        {{ date('d/m/Y', strtotime($news->date)) }}
                                    </li>
                                </ul>
                             
                                <p class="text-justify">    {!! html_entity_decode($news->body) !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar" >

                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title text-primary">Outras Notícias</h3>
                                @foreach ($lasted as $item)
                                    <div class="media post_item"><br>

                                        <img src="/storage/{{ $item->path }}" alt="post" class="img-fluid my-3"
                                            style="max-width: 150px; border-radius: 5px;" ><br>
                                        <div class="media-body ml-3">
                                            <a href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                                <h4 class="text-primary text-left ">{{ $item->title }}</h4>
                                            </a>
                                  
                                            <p style=" font-size:14px; ml-3">
                                                {{ date('d-m-Y', strtotime($item->date)) }}</p>
                                        </div>
                                    </div>
                                @endforeach



                            </aside>



                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

@endsection
