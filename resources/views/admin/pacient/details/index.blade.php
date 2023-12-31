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
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 text-start">
                                            <h3>Nome do Paciente: "{{ $data->nomeCompleto }}"</h3>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <a class="btn btn-primary btn-md mb-2 text-white" target="_blank"
                                                href="{{ url("admin/pacient/pdf/show/$data->id") }}">
                                                <i class="fa fa-print fa-pdf"></i> Imprimir
                                            </a>

                                        </div>
                                    </div>
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
                                                <b>Nº do BI</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->nBI }}</p>
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
                                            <p class="text-dark text-justify">
                                                {{ implode(', ', json_decode($data->sintomas)) }}</p>
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
                                            <p class="text-dark text-justify">
                                                {{ implode(', ', json_decode($data->historico)) }}</p>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <h5 class="mb-1">
                                                <b>Condições Médicas</b>
                                            </h5>
                                            <p class="text-dark text-justify">
                                                {{ implode(', ', json_decode($data->condicoesMedicas)) }}</p>
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
