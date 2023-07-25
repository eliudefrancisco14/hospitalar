@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da notícia')

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
                                <h2 class="page-title">Capa Actual</h2>
                            </div>

                        </div>
                        <div class="card-deck mb-3">

                            <div class="card border-0 bg-transparent mb-3">
                                <div class="card-img-top img-fluid rounded"
                                    style='background-image:url("/storage/{{ $data->path }}");background-position:center;background-size:cover;height:400px;width:500px;'>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <h5 class="mb-3">
                                    <b>Autor da matéria:</b><br>
                                    {{ $data->typewriter }}
                                </h5>
                            </div>

                            <div class="col-md-12 mb-3">
                                <h5 class="mb-1">
                                    <b>Matéria:</b>
                                </h5>
                                <p class="text-dark text-justify">{!! html_entity_decode($data->body) !!}</p>

                            </div>

                            <div class="col-md-12 mb-2">
                                <h5 class="mb-3">
                                    <p><b>&nbsp;&nbsp;&nbsp;Data de criação:
                                            &nbsp;{{ date('d-m-Y H:m', strtotime($data->created_at)) }}</b></p>
                                    <p><b>Data da inserção: &nbsp;{{ date('d-m-Y', strtotime($data->date)) }}</b></p>
                                </h5>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
