@extends('layouts.merge.dashboard')
@section('title', 'Detalhes da Configuração')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')
                <div class="container justify-content-center mt-4 mb-5">

                    <div class="row align-items-center mx-0">

                        <div class="card mb-2">
                            <div class="card-body">

                                <div class="col-md-12">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h2 class="h5 page-title">
                                                Informações
                                            </h2>
                                        </div>
                                        <div class="col-auto">
                                            @isset($data)
                                                <a type="button" class="btn btn-sm btn-primary "
                                                    href="{{ route('admin.contact.edit', $data->id) }}">
                                                    <span class="fe fe-edit fe-16 mr-2"></span> Editar Informações
                                                </a>
                                            @endisset
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @isset($contact)
                            <div class="col-lg-12 mt-2 col-md-12 col-12">
                                <div class="card row align-items-center">
                                    <div class="card-body">

                                        <div class="col-md-12 mb-2">
                                            <h5 class="mb-1">
                                                <b>E-mail:</b>
                                            </h5>
                                            <p class="text-dark text-justify">{!! html_entity_decode($data->email) !!}</p>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <h5 class="mb-1">
                                                <b>Número do telefone:</b>
                                            </h5>
                                            <p class="text-dark text-justify">{!! html_entity_decode($data->telephone) !!}</p>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <h5 class="mb-1">
                                                <b>Endereço:</b>
                                            </h5>
                                            <p class="text-dark text-justify">{!! html_entity_decode($data->address) !!}</p>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-md-7 mb-2">
                                                <hr>
                                                <p class="mb-1 text-dark"><b>Data de cadastro:</b>
                                                    {{ date('d-m-Y H:m', strtotime($data->created_at)) }}
                                                </p>
                                                <p class="mb-1 text-dark"><b>Última actualização:</b>
                                                    {{ date('d-m-Y H:m', strtotime($data->updated_at)) }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
