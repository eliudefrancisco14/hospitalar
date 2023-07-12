@extends('layouts.merge.dashboard')
@section('titulo', 'DEtalhes De Jornalista Inscrito no CIAM')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.press.index') }}"><u>Lista De Jornalistas Inscritos no CIAM</u></a> >
                {{ $press['NomeCompleto'] }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">


                <div class="col-md-12 text-dark text-justify mt-2">
                    <div class="row align-items-center">
                        <div class="col-12 mb-2">
                            <p class="lead">INFORMAÇÕES PESSOAIS</p>

                        </div>
                        <div class="col-md-4 mb-5">
                            <img src="https://ciam.gov.ao/storage/{{ $press['Foto'] }}" height="250">
                        </div>
                        <div class="col-md-4 mb-2">
                            <h5 class="mb-1">
                                Nome Completo
                            </h5>
                            <p>{{ $press['NomeCompleto'] }}</p>

                        </div>
                        <div class="col-md-4 mb-2">
                            <h5 class="mb-1">
                                Sexo
                            </h5>
                            <p>{{ $press['Sexo'] }}</p>

                        </div>


                        <div class="col-md-4 mb-2">
                            <h5 class="mb-1">
                                Data de Nascimento
                            </h5>
                            <p>{{ $press['DataNascimento'] }}</p>

                        </div>
                        <div class="col-md-4 mb-2">
                            <h5 class="mb-1">
                                Local de Nascimento
                            </h5>
                            @if (isset($press['localNascimento']))
                                <p>{{ $press['localNascimento']['country'] }}</p>
                            @endif

                        </div>

                        <div class="col-md-4 mb-2">
                            <h5 class="mb-1">
                                Nacionalidade
                            </h5>

                            @if (isset($press['nacionalidade']))
                                <p>{{ $press['nacionalidade']['nacionality'] }}</p>
                            @endif

                        </div>
                        <div class="col-md-4 mb-2">
                            <h5 class="mb-1">
                                Outra Nacionalidade
                            </h5>
                            @if (isset($press['outraNacionalidade']))
                                <p>{{ $press['outraNacionalidade']['nacionality'] }}</p>
                            @else
                                <p>-</p>
                            @endif

                        </div>
                        <div class="col-md-4 mb-2">
                            <h5 class="mb-1">
                                Número do Passaporte
                            </h5>
                            <p>{{ $press['NumeroPassaporte'] }}</p>

                        </div>

                        <div class="col-md-4 mb-2">
                            <h5 class="mb-1">
                                Data de Emissão
                            </h5>
                            <p>{{ $press['DataEmissao'] }}</p>

                        </div>


                        <div class="col-md-4 mb-2">
                            <h5 class="mb-1">
                                Data de Expiração
                            </h5>
                            <p>{{ $press['DataExpiracao'] }}</p>

                        </div>

                        <div class="col-md-4 mb-2">
                            <h5 class="mb-1">
                                Profissão
                            </h5>
                            <p>{{ $press['ProfissaoActual'] }}</p>

                        </div>

                        <div class="col-md-4 mb-2">
                            <h5 class="mb-1">
                                Email
                            </h5>
                            <p>{{ $press['Email'] }}</p>

                        </div>


                        <div class="col-md-4 mb-2">
                            <h5 class="mb-1">
                                Telefone
                            </h5>
                            <p>{{ $press['Telefone'] }}</p>

                        </div>

                        <div class="col-md-8 mb-2">
                            <h5 class="mb-1">
                                Endereço Residêncial
                            </h5>
                            <p>{{ $press['EnderecoResidencial'] }}</p>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>


@endsection
