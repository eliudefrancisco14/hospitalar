@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da capa de imagem')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-2 mb-5">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.gallery.create') }}"><i class="bx bx-user me-1"></i> Criar titulo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.gallery.index') }}"><i class="bx bx-link-alt me-1"></i>
                                Lista</a>
                        </li>
                    </ul>
                    <h2 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Informação:
                        {{ $img->name }}</h2>
                    <hr>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">

                                    <img src="{{ asset('storage') }}/main_galleryPage/{{ $img['image'] }}" alt="user-avatar" class="d-block rounded"
                                        height="250" width="250" id="uploadedAvatar" />
                                </div>
                            </div>
                            </div>
                            <p>{{ $img->description }}</p>
                        </div>
                    </div>                
                </div>
            </div>
        </div>

    </div>
@endsection
