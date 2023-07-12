@extends('layouts.merge.site')
@section('titulo', 'Verficação do Credenciamento')
@section('content')
    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Verficação do Credenciamento</h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')
        <section class="py-6 py-lg-7">
            <div class=container>
                <div class=row>
                    <div class="col-md-12 text-justify" style="text-align: justify !important;">

                        <div class="col-12">
                            <div class="row">

                                <h2 class="h3 page-title">
                                    Nome: {{ $signup->name . ' ' . $signup->surname }}
                                </h2>


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
                                            @else
                                                <b class="bg-success p-2 rounded text-white">
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
                                            <b>Função</b>
                                        </h5>
                                        <p class="text-dark text-justify">
                                            {{ $signup->function }}
                                        </p>
                                    </div>
                            
                                    <div class="col-12 mb-4">
                                        <h5 class="mb-1">
                                            <b>Fotografia de Identificação</b>
                                        </h5>
                                        <img width="250" height="auto" src="/storage/{{ $signup->photo }}"
                                            alt="">
                                    </div>
                                </div>


                            </div>



                        </div> <!-- /.col-12 -->
                    </div>

                </div>
            </div>
        </section>

    </main>

@endsection
