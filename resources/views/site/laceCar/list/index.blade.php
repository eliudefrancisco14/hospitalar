@extends('layouts.merge.site')
@section('titulo', 'Transportes')
@section('content')

    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Transportes</h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')


        <section class=container>
            <div class="row my-5">
                <div class="col-md-12 col-12">
                    <p class="text-justify">
                        {!! html_entity_decode($LaceCarDocument->body) !!}
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class=col-lg-12>
                    <div class="row mx-n3 grid" data-isotope='{"layoutMode": "masonry", "itemSelector": ".grid-item"}'
                        id=portfolio>
                        @foreach ($laceCars as $item)
                            <div class="example-2 card detail grid-item branding col-md-6 col-lg-4 px-3 mb-5">

                                <a href="{!! route('site.laceCar.show', urlencode($item->name)) !!}">
                                    <div class="wrapper shadow image"
                                        style='background-image:url("/storage/{{ $item->photo }}");background-position:center;background-size:cover;height:200px;  border-radius: 5px;'>
                                        <div class="data">
                                            <div class="content" style="height: 235px;">
                                                <h4 class="title"><a href="{!! route('site.laceCar.show', urlencode($item->name)) !!}">{{ $item->name }}</a>
                                                </h4>

                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


        </section>

    </main>







@endsection
