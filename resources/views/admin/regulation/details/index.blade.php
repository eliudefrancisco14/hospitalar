@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da regulamentação')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-2 mb-5">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.regulation.index') }}"><i
                                    class="bx bx-link-alt me-1"></i>
                                Lista</a>
                        </li>
                    </ul>
                    <h2 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Titulo:
                        {{ $data->title }}</h2>
                    <hr>                   

                    <a href="{{ url("storage/$data->path") }}" target="_blank"><i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i></a>
                    <hr>
                    <p>Clica na imagem</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
