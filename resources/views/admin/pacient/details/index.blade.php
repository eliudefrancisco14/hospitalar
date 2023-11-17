@extends('layouts.merge.dashboard')
@section('title', 'Detalhes do Paciente')

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
                                    <h3>Nome do Paciente: "{{ $data->nomeCompleto }}"</h3>
                                    <hr>
                                    <div class="row mt-4">
                                        <div class="col-md-3 mb-2">
                                            <h5 class="mb-1">
                                                <b>Data de Nascimento</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->dataNascimento }}</p>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <h5 class="mb-1">
                                                <b>Peso</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->peso }}</p>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <h5 class="mb-1">
                                                <b>Altura</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->altura }}</p>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <h5 class="mb-1">
                                                <b>Morada</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->morada }}</p>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <h5 class="mb-1">
                                                <b>Medicação</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->medicacao }}</p>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <h5 class="mb-1">
                                                <b>Sintomas</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->sintomas }}</p>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <h5 class="mb-1">
                                                <b>Gravidade dos Sintomas</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->gravidade }}</p>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <h5 class="mb-1">
                                                <b>Histórico Médico</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->historico }}</p>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <h5 class="mb-1">
                                                <b>Condições Médicas</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->condicoesMedicas }}</p>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <h5 class="mb-1">
                                                <b>Estado Físico</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->estadoFisico }}</p>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <h5 class="mb-1">
                                                <b>Doenças Crónicas</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->doencasCronicas }}</p>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <h5 class="mb-1">
                                                <b>Informações Adicionais</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->maisInformacoes }}</p>
                                        </div>

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
