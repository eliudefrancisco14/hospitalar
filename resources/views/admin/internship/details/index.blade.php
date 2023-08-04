@extends('layouts.merge.dashboard')
@section('title', 'Detalhes da Inscrição de Estágio')

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
                                    <h3>Nome: "{{ $data->name }}"</h3>

                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>E-mail</b>
                                        </h5>
                                        <p class="text-dark text-justify">{{ $data->email }}</p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Telefone</b>
                                        </h5>
                                        <p class="text-dark text-justify">{{ $data->phone }}</p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Curriculum</b>
                                        </h5>
                                        <p class="text-dark text-justify"><a href="{{ url("/storage/$data->doc") }}" target="_blank"> Curriculum Vitae </a></p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Descrição</b>
                                        </h5>
                                        <p class="text-dark text-justify">{{ $data->description }}</p>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-md-7 mb-2">
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
