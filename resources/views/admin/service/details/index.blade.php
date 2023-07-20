@extends('layouts.merge.dashboard')
@section('title', ' Detalhes do serviço')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-2 mb-5">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.service.index') }}"><i
                                    class="bx bx-link-alt me-1"></i>
                                Lista</a>
                        </li>
                    </ul>
                    <h2 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Informação:
                        {{ $data->title }}</h2>
                    <hr>
                    <div class="col-12 col-lg-12">
                        <div class="row align-items-center my-4">
                            <div class="col">
                                <h2 class="page-title">Imagem de capa</h2>
                            </div>
                
                        </div>
                        <div class="card-deck mb-4">                
                            <div class="card border-0 bg-transparent">
                                <div class="card-img-top img-fluid rounded"
                                    style='background-image:url("/storage/{{ $data->logo }}");background-position:center;background-size:cover;height:400px;width:500px;'>
                                </div>                
                            </div> 
                            <p>{{ $data->description }}</p>            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
