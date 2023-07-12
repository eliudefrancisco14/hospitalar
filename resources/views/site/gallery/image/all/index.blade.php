@extends('layouts.merge.site')
@section('titulo', 'Galeria')
@section('content')

    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Galeria </h1>

                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')

        <section class="pt-5 pt-lg-5">
            <div class=container>
                <div class="row mx-n3 grid" data-isotope='{"layoutMode": "masonry", "itemSelector": ".grid-item"}'
                    id=portfolio>
                    @foreach ($galleries as $item)
                       

                   
                        <div class="example-2 card detail grid-item branding col-md-6 col-lg-4 px-3 mb-5">
                            
                            <a href="{!! url('/galeria/' . urlencode($item->name)) !!}">
                            <div class="wrapper shadow image"
                                style='background-image:url("/storage/{{ $item->cover }}");background-position:center;background-size:cover;'>
                                <div class="data">
                                    <div class="content" style="height: 235px;">
                                        <h4 class="title"><a href="{!! url('/galeria/' . urlencode($item->name)) !!}">{{ $item->name }}</a>
                                        </h4>
                                    </div>
                                </div>
                            
                            </div>
                        </a>
                        </div>
                        
                        
                       
                
                    @endforeach

                    @foreach ($videos as $item)
                    <div class="grid-item branding col-md-6 col-lg-4 px-3 mb-5"   >
                        <div class="ud-single-blog ">
                            <iframe class="img-fluid img-center " width="500 " height="300 "
                                src="{{$item->link}}" frameborder="0 "
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture "
                                allowfullscreen></iframe>
                            <div class="ud-blog-content ">
                                <h5 class="ud-blog-title p-4 ">{{$item->title}}</h5>
                            </div>
                        </div>

                        
                    </div>
                @endforeach
                </div>
           
            </div>
        </section>

    </main>

@endsection
