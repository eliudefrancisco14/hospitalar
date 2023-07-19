@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do titulo de imagem')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-2 mb-5">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.gallery.create') }}"><i
                                    class="bx bx-user me-1"></i> Criar titulo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.gallery.index') }}"><i
                                    class="bx bx-link-alt me-1"></i>
                                Lista</a>
                        </li>
                    </ul>
                    <h2 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Titulo:
                        {{ $data->name }}</h2>
                    <hr>

                    <div class="col-12 col-lg-12">
                        <div class="row align-items-center my-4">
                            <div class="col">
                                <h2 class="page-title">Capa Actual</h2>
                            </div>

                        </div>
                        <div class="card-deck mb-4">

                            <div class="card border-0 bg-transparent">
                                <div class="card-img-top img-fluid rounded"
                                    style='background-image:url("/storage/{{ $data->image }}");background-position:center;background-size:cover;height:400px;width:500px;'>
                                </div>
                            </div>
                            <p class="mt-1">{{ $data->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
