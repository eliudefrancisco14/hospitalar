@extends('layouts.merge.dashboard')
@section('title', 'Detalhes de pergunta')

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
                                    <h3>Pergunta: "{{ $data->title }}"</h3>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <h5 class="mb-1">
                                                <b>Descrição</b>
                                            </h5>
                                            <p class="text-dark text-justify">{!! html_entity_decode($data->description) !!}</p>
                                        </div>
                                        <div class="row align-items-center">
                                            <hr>
                                            <p class="mb-1 text-dark"><b>Data de cadastro:</b>
                                                {{ date('d-m-Y H:m', strtotime($data->created_at)) }}
                                            </p>
                                            <p class="mb-1 text-dark"><b>Data de atualização:</b>
                                                {{ date('d-m-Y H:m', strtotime($data->updated_at)) }}
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

@endsection
