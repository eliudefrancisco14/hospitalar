@extends('layouts.merge.site')
@section('titulo', 'Detalhes de Transportes')
@section('content')

<main>
    <section class="pb-4 pt-12 bg-primary" id=content>
        <div class=container>
            <div class=row>
                <div class=col>
                    <h1 class="text-white">Detalhes: {{ $laceCar->name }} </h1>
                </div>
            </div>
        </div>
    </section>
    @include('extra._culture.index')
    <section class=container>
        <div class="row py-5 my-5">
            <div class="col-md-12 col-12">

                <h2 class="mt-5 pt-5 mb-3"> {{ $laceCar->name }}</h2>
               
                <p class="text-justify">
                    {!! html_entity_decode($laceCar->description) !!}

                </p>

            </div>


        </div>
    </section>
</main>


@endsection
