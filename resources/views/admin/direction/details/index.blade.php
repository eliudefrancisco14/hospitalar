@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da direcção')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')
                <div class="container justify-content-center mt-2 mb-5">

                    <div class="col-12 col-lg-12">
                        <div class="row align-items-center my-4">
                            <div class="col">
                                <h2 class="page-title">Imagem Actual</h2>
                            </div>

                        </div>
                        <div class="card-deck mb-4">

                            <div class="card border-0 bg-transparent">
                                <div class="card-img-top img-fluid rounded"
                                    style='background-image:url("/storage/{{ $data->path }}");background-position:center;background-size:cover;height:400px;width:500px;'>
                                </div>
                            </div>
                            <hr>
                            <p class="mt-1">{{ $data->office }}</p>
                            <hr>
                            <p class="mt-1">{{ $data->body }}</p>
                            <hr>
                            <div class="row align-items-center">
                                <div class="col-md-7 mb-2">
                                    <hr>
                                    <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $data->created_at }}
                                    </p>
                                    <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $data->updated_at }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
