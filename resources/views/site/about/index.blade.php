@extends('layouts.merge.site')
@section('titulo', 'Objectivos da SADC')
@section('content')
    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Objectivos da SADC</h1>
                        <p class="text-white">{{ $about->title }}</p>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')
        <section class="py-6 py-lg-7">
            <div class=container>
                <div class=row>
                    <div class="col-md-12 text-justify" style="text-align: justify !important;">

                        {!! html_entity_decode($about->body) !!}

                    </div>

                </div>
            </div>
        </section>

        @include('extra._members.index')
    </main>

@endsection
