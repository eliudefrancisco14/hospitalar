@extends('layouts.merge.dashboard')
@section('title', 'Detalhes do serviço')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')
                <div class="container justify-content-center mt-4 mb-5">


                    <div class="row align-items-center mx-0">

                        <div class="col-lg-12 mt-2 col-md-12 col-12">
                            <div class="card row align-items-center">
                                <div class="card-body">
                                    <h3>Título: "{{ $data->title }}"</h3>

                                    <div class="col-md-12 mb-2">

                                        <div class="col-12 col-lg-12">
                                            <div class="row align-items-center my-4">
                                                <div class="col">
                                                    <h2 class="page-title">Capa Actual</h2>
                                                </div>
                                            </div>
                                            <div class="card-deck mb-4">
                                                <div class="card border-0 bg-transparent">
                                                    <div class="card-img-top img-fluid rounded"
                                                        style='background-image:url("/storage/{{ $data->logo }}");background-position:center;background-size:cover;height:400px;width:500px;'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-dark text-justify">{{ $data->description }}</p>
                                    </div>


                                    <div class="row align-items-center">
                                        <hr>
                                        <div class="col-md-6 mb-2">
                                            <p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data de criação:
                                                    &nbsp;{{ date('d-m-Y H:m', strtotime($data->created_at)) }}</b></p>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <p><b>Última atualização:
                                                    &nbsp;{{ date('d-m-Y H:m', strtotime($data->updated_at)) }}</b>
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
@endsection
