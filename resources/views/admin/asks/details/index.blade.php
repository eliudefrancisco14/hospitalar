@extends('layouts.merge.dashboard')
@section('title', 'Detalhes de pergunta')

@section('content')


    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-2 mb-5">
                    <div class="nav nav-pills flex-column flex-md-row mb-3">
                        <ul class="nav nav-pills flex-column flex-md-row mb-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('admin.asks.create') }}"><i
                                        class="bx bx-user me-1"></i> Criar pergunta</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.asks.index') }}"><i
                                        class="bx bx-link-alt me-1"></i>
                                    Lista</a>
                            </li>
                        </ul>
                        <div class="col-12">
                            <div class="container">
                                <div class="row">
                                    <h2 class="h3 m-4 page-title">Pergunta: {{ $data->asks }}</h2>
                                   <h2 class="h3 m-4 page-title">Resposta: {{ $data->response }}</h2>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .row -->
                </div> <!-- .container-fluid -->
            </div>
        </div>
    </div>

@endsection
