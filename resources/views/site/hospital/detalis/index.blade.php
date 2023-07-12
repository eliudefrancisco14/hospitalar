@extends('layouts.merge.site')
@section('titulo', 'Detalhes do Hospital')
@section('content')
    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Detalhes do Hospital</h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')
        <section class=container>
            <div class="row py-5 my-5">
                <div class="col-md-12 col-12">

                    <h2 class="mt-5 pt-5 mb-3">{{ $Hospitalist->hospitalName }}</h2>

                    <p class="text-justify">
                        {!! html_entity_decode($Hospitalist->description) !!}

                    </p>

                </div>


                <div class="row justify-content-center">

                    <div class=col-lg-12>
                        <div id="borderDivDiv" class="row mx-n3 grid"
                            data-isotope='{"layoutMode": "masonry", "itemSelector": ".grid-item"}' id=portfolio>
                            @foreach ($hostelListGallarlery->images as $item)
                                <div class="col-lg-4 col-md-6 pb-5">

                                    <a class="fancybox" href="/storage/{{ $item->path }}" data-fancybox="gallery1">
                                        <div
                                            style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:200px; border-radius: 5px;'>
                                        </div>

                                    </a>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">

                    <iframe src="{{ $Hospitalist->locationMap }}" width="100%" height="450" style="border:0;"
                        allowfullscreen="" loading="lazy" class=" lazy-loaded" data-src="{{ $Hospitalist->locationMap }}">
                        <noscript>


                            <iframe src="{{ $Hospitalist->locationMap }}" width="730" height="450" style="border:0;"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

    </main>


@endsection
@section('CSSJS')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

@endsection
