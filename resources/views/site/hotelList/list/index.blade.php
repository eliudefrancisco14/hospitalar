@extends('layouts.merge.site')
@section('titulo', 'Hotéis')
@section('content')


    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Hotéis</h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')


        <section class=container>
            <div class="row my-5">
                <div class="col-md-12 col-12">
                    <p class="text-justify">
                        {!! html_entity_decode($hotelDocument->body) !!}
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class=col-lg-12>
                    <div class="row mx-n3 grid" data-isotope='{"layoutMode": "masonry", "itemSelector": ".grid-item"}'
                        id=portfolio>
                        @foreach ($hotelLists as $item)
                            {{--  Other  --}}

                            <div class="example-2 card detail grid-item branding col-md-6 col-lg-4 px-3 mb-5">

                                <a href="{!! url('/Lista-de-hoteis/' . urlencode($item->name)) !!}">
                                    <div class="wrapper shadow image"
                                        style='background-image:url("/storage/{{ $item->attachment }}");background-position:center;background-size:cover;height:200px;  border-radius: 5px;'>
                                        <div class="data">
                                            <div class="content" style="height: 235px;">
                                                <br>
                                                <h4 class="title"><a
                                                        href="{!! url('/Lista-de-hoteis/' . urlencode($item->hotelname)) !!}">{{ $item->hotelname }}</a>
                                                </h4>
                                                <span class="my-5"></span>
                                                <p>
                                                    @for ($i = 0; $i < $item->stars; $i++)
                                                        <img src="/site/estrela.png" width="20">
                                                    @endfor
                                                </p>

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
