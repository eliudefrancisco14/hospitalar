@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes do registo')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.signup.index') }}"><u>Lista de Inscrições</u></a> >
                {{ $signup->name . ' ' . $signup->surname }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row justify-content-between">
                            <div class="col-12 col-md-8 col-lg-8 mt-5">
                                <h2 class="h3 page-title">
                                    Nome: {{ $signup->name . ' ' . $signup->surname }}
                                </h2>
                            </div>
                            <div class="col-12 col-md-4 col-lg-4 text-right mt-5">
                                @if ($signup->status == 'APROVADO' && 'USP' == Auth::user()->level)
                                    <a href='{{ route('admin.credencial.print', $signup->code) }}' class="btn btn-primary"
                                        target='_blank'>Imprimir Credencial</a>
                                    <a href='{{ route('admin.signup.edit', $signup->id) }}'
                                        class="btn btn-white text-dark border-dark">Editar</a>
                                @endif

                            </div>
                        </div>
                        <div class="row m-5 align-items-center">

                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Estado</b>
                                    </h5>
                                    <p class="text-dark">
                                        @if ($signup->status == 'RECEBIDO')
                                            <b class="bg-primary p-2 rounded text-white">
                                                {{ $signup->status }}
                                            </b>
                                        @elseif($signup->status == 'APROVADO')
                                            <b class="bg-success p-2 rounded text-white">
                                                {{ $signup->status }}
                                            </b>
                                        @else
                                            <b class="bg-danger p-2 rounded text-white">
                                                {{ $signup->status }}
                                            </b>
                                        @endif
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Passaporte/Bilhete de Identidade</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ $signup->idcard }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Data de Nascimento</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ date('d-m-Y', strtotime($signup->birthday)) }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>País</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ $signup->country }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Código</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ $signup->code }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Telefone</b>
                                    </h5>
                                    <p class="text-dark text-justify">
                                        {{ $signup->tel }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Email</b>
                                    </h5>
                                    <p class="text-dark text-justify">
                                        {{ $signup->email }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Categoria</b>
                                    </h5>
                                    <p class="text-dark text-justify">
                                        {{ $signup->category }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Organização</b>
                                    </h5>
                                    <p class="text-dark text-justify">
                                        {{ $signup->organization }}
                                    </p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Evento à Participar</b>
                                    </h5>
                                    <p class="text-dark text-justify">
                                        {{ $signup->event }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Função</b>
                                    </h5>
                                    <p class="text-dark text-justify">
                                        {{ $signup->function }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Data de Chegada</b>
                                    </h5>
                                    <p class="text-dark text-justify">
                                        {{ $signup->startDate }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Data de Partida</b>
                                    </h5>
                                    <p class="text-dark text-justify">
                                        {{ $signup->endDate }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Dados Biográficos do Passaporte</b>
                                    </h5>
                                    <p class="text-dark text-justify">
                                        <h5>  <a target="_blank" href="/storage/{{ $signup->photoBI }}">Baixar Documento</a></h5>
                                  
                                    </p>
                                </div>
                                <div class="col-12 mb-4">
                                    <h5 class="mb-1">
                                        <b>Fotografia de Identificação</b>
                                    </h5>

                                    <div class="col-12 col-md-6 col-lg-4">

                                        <img src="/storage/{{ $signup->photo }}" width="100%">
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-7 mb-2">
                                    <hr>
                                    <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $signup->created_at }}
                                    </p>
                                    <p class="mb-1 text-dark"><b>Última Actualização</b> {{ $signup->updated_at }}
                                    </p>

                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>


@endsection
