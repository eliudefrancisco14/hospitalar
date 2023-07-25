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
                                    <h3>Nome: "{{ $internship->name }}"</h3>

                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Email</b>
                                        </h5>
                                        <p class="text-dark text-justify">{{ $internship->email }}</p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>telefone</b>
                                        </h5>
                                        <p class="text-dark text-justify">{{ $internship->phone }}</p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Curriculum</b>
                                        </h5>
                                        <p class="text-dark text-justify"><a href="{{ url("/storage/$internship->doc") }}" target="_blank"> Curriculum Vitae </a></p>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Descrição</b>
                                        </h5>
                                        <p class="text-dark text-justify">{{ $internship->description }}</p>
                                    </div>


                                    <div class="row align-items-center">
                                        <div class="col-md-7 mb-2">
                                            <hr>
                                            <p class="mb-1 text-dark"><b>internship de Cadastro:</b> {{ $internship->created_at }}
                                            </p>
                                            <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $internship->updated_at }}
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
