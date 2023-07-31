@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da notícia')

@section('content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')
                <div class="container justify-content-center mt-4 mb-5">

                    <div class="row align-items-center mx-0">

                        <div class="card mb-2">
                            <div class="card-body">

                                <div class="container-fluid">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <h2 class="h3 m-4 page-title">Título da Notícia: {{ $data->title }}</h2>

                                            <div class="row">
                                                <div class="col-md-6 mb-2">
                                                    <h5 class="mb-1">
                                                        <b>Autor da Notícia:</b>
                                                        <p>{{ $data->typewriter }}</p>
                                                    </h5>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <h5 class="mb-1">
                                                        <b>Notícia:</b>
                                                        <div>
                                                            {!! html_entity_decode($data->body) !!}
                                                        </div>
                                                    </h5>
                                                </div>

                                                <div class="mb-1">
                                                    <hr>
                                                    <div class="container-fluid">
                                                        <div class="row justify-content-center">
                                                            <div class="col-12 col-lg-10">
                                                                <div class="row align-items-center my-4">
                                                                    <div class="col">
                                                                        <h2 class="page-title">Capa de notícia</h2>
                                                                    </div>

                                                                </div>
                                                                <div class="card-deck mb-4">

                                                                    <div class="card border-0 bg-transparent">
                                                                        <div class="card-img-top img-fluid rounded"
                                                                            style='background-image:url("/storage/{{ $data->path }}");background-position:center;background-size:cover;height:400px;width:400px'>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p class="mb-1 text-dark">
                                                                <b>Data de notícia:</b>
                                                                {{ date('d-m-Y', strtotime($data->date)) }}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p class="mb-1 text-dark">
                                                                <b>Data de Cadastro:</b>
                                                                {{ date('d-m-Y H:m s', strtotime($data->created_at)) }}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p class="mb-1 text-dark"><b>Última Actualização:</b>
                                                                {{ date('d-m-Y H:m s', strtotime($data->updated_at)) }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
