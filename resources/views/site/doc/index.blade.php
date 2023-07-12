@extends('layouts.merge.site')
@section('titulo', 'Documentos')
@section('content')
    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Documentos</h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')

        <section class="py-6 container my-6">
            <div class=row>

                @foreach ($docs as $item)
                    <a href="/storage/{{ $item->path }}" target="_blank" class="col-12 col-md-6 col-lg-6 ">

                        <div class="card shadow m-1">
                            <div class="card-body text-center">
                                <img src="/site/images/icons/pdf.png" alt="logo pdf" width="60" class="mb-2">

                                <h3 class="h4 mt-2 text-primary">{{ $item->title }}</h3>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>

        </section>
    </main>


@endsection
