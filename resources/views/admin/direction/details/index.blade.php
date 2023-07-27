@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da direcção')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-4 mb-5">


                    <div class="row align-items-center mx-0">

                        <div class="col-lg-12 my-2 col-md-12 col-12">

                            <div class="card row align-items-center">
                                <div class="card-body">
                                    <h3>Nome: "{{ $data->name }}"</h3>
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <h5 class="mb-1">
                                                <b>Cargo</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->office }}</p>

                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <h5 class="mb-1">
                                                <b>Descrição</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->body }}</p>

                                        </div>


                                        <div class="row align-items-center">
                                            <div class="col-md-7 mb-2">
                                                <hr>
                                                <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $data->created_at }}
                                                </p>
                                                <p class="mb-1 text-dark"><b>Última Actualização:</b>
                                                    {{ $data->updated_at }}
                                                </p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mt-2 col-md-12 col-12">
                            <div class="card row align-items-center">
                                <div class="card-body">

                                    <div class="container-fluid">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-lg-10">
                                                <div class="row align-items-center my-4">
                                                    <div class="col">
                                                        <h2 class="page-title">Imagem</h2>
                                                    </div>

                                                </div>
                                                <div class="card-deck mb-4">

                                                    <div class="card border-0 bg-transparent text-center">
                                                        <div class="card-img-top img-fluid rounded"
                                                            style='background-image:url("/storage/{{ $data->path }}");background-position:center;background-size:cover;height:900px;width:auto;'>
                                                        </div>

                                                    </div> <!-- .card -->


                                                </div> <!-- .card-deck -->


                                            </div>
                                        </div> <!-- .row -->
                                    </div> <!-- .container-fluid -->
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection