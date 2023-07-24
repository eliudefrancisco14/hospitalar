@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da regulamentação')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-4 mb-5">
                    <h3 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Titulo:
                        {{ $data->title }}</h3>
                    <hr>

                    <a href="{{ url("storage/$data->path") }}" target="_blank"><i class="fa fa-file-pdf-o"
                            style="font-size:48px;color:red"></i></a>
                    <hr>
                    <p>Clicar na imagem</p>
                    <div class="row align-items-center">
                        <div class="col-md-7 mb-2">
                            <hr>
                            <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $data->created_at }}
                            </p>
                            <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $data->updated_at }}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
