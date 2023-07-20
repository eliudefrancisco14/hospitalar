@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da noticia')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-2 mb-5">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.news.index') }}"><i class="bx bx-link-alt me-1"></i>
                                Lista</a>
                        </li>
                    </ul>
                    <hr>
                    <h2 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Titulo:
                        {{ $data->title }}</h2>
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
                                    style='background-image:url("/storage/{{ $data->path }}");background-position:center;background-size:cover;height:400px;width:500px;'>
                                </div>
                            </div>

                            <div class="mb-4 col-md-12 mt-2">
                                <h5 class="card-title">Corpo da Matéria editada</h5>
                                <!-- Create the editor container -->
                                <textarea name="body" id="editor1" style="min-height:300px; min-width:100%">
                                            {{ isset($data->body) ? $data->body : old('body') }}
                                        </textarea>
                            </div>
                            <p>Data da emissão: {{ $data->created_at }}</p>
                            <p>Data da noticia: {{ $data->date }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
