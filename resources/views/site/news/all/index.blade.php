@extends('layouts.merge.site')
@section('titulo', 'Notícias')
@section('content')

<main>
  <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Notícias do Evento</h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')

        <section class="container">
                <div class="row mx-n3 grid py-5 my-5" data-isotope='{"layoutMode": "masonry", "itemSelector": ".grid-item"}'
                    id=portfolio>
                    @foreach ($news as $item)
                        

                        <div class="example-1 card detail grid-item branding col-md-4 col-lg-4 px-3 mb-5">
                            <div class="wrapper shadow image"
                                style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;'>
                                <div class="date">
                                    <span class="day">{{ date('d', strtotime($item->date)) }}</span>
                                    <span class="month">{{ date('m', strtotime($item->date)) }}</span>
                                    <span class="year">{{ date('Y', strtotime($item->date)) }}</span>
                                </div>
                                <div class="data">
                                    <div class="content" style="border-radius: 5px;height: 420px;">

                                        <h5 class="title"><a href="{!! url('/noticia/' . urlencode($item->title)) !!}">{!! html_entity_decode(mb_substr($item->title, 0, 60, 'UTF-8')) !!}
                                                {{ strlen(mb_substr($item->title, 0, 60, 'utf-8')) >= 60 ? ' ...' : '' }}</a>
                                        </h5>
                                        <p>{!! html_entity_decode(mb_substr($item->body, 0, 120, 'utf-8')) !!}...</p>
                                        <br>
                                        <p class="text mt-4"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                 
                </div>

                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 py-5">
                            <b>{{ $news->links() }}</b>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    </main>

@endsection
