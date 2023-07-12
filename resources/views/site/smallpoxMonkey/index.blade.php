@extends('layouts.merge.site')
@section('titulo', 'Varíola dos Macacos')
@section('content')
    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Varíola dos Macacos </h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')
        <section class="container">
            <div class="row py-5 my-5">


                <div class="col-md-12">
                    <p class="text-justify">


                        No que diz respeito ao Vírus "Monkeypox" causador da varíola dos macacos, Angola não regista, até à
                        data casos. Ainda assim, as medidas epidemiológicas de prevenção estão asseguradas.


                    </p>

                </div>
            </div>
        </section>


    </main>

@endsection
