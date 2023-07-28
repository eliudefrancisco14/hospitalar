@extends('layouts.merge.dashboard')
@section('title', 'Detalhes do vídeo')

@section('content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-2 mb-5">
                    <div class="nav nav-pills flex-column flex-md-row mb-3">
                        <div class="col-12">
                            <div class="container">
                                <div class="row">
                                    <h2 class="h3 m-4 page-title">Título: {{ $data->title }}</h2>
                                </div>
                            </div>
                            <div class="row m-5 align-items-center">
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-10">
                                            <div class="row align-items-center my-4">
                                                <div class="col">
                                                    <h2 class="page-title">Link do vídeo</h2>
                                                    <a href="{{ $data->link }}" target="_blank">{{ $data->link }}</a>
                                                    <div class="col-lg-4 col-md-6 ">
                                                        <div class="ud-single-blog ">
                                                            <iframe class="img-fluid img-center " width="400"
                                                                height="400" src="{{ $data->link }} " frameborder="0 "
                                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture "
                                                                allowfullscreen>
                                                            </iframe>
                                                        </div>
                                                    </div>

                                                    <p class="mb-4 mt-1">Descrição: {{ $data->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-md-7 mb-2">
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-dark"><b>Data de Cadastro:</b>
                                                        {{ date('d-m-Y H:m s', strtotime($data->created_at)) }}
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-dark"><b>Última Actualização:</b>
                                                        {{ date('d-m-Y H:m s', strtotime($data->updated_at)) }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.col-12 -->
                    </div> <!-- .row -->
                </div> <!-- .container-fluid -->
            </div>
        </div>
    </div>

@endsection
