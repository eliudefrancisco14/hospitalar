@extends('layouts.merge.dashboard')
@section('title', 'Detalhes do vídeo')

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
                                <a class="nav-link active" href="{{ route('admin.video.create') }}"><i
                                        class="bx bx-user me-1"></i> Criar vídeo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.video.index') }}"><i
                                        class="bx bx-link-alt me-1"></i>
                                    Lista</a>
                            </li>
                        </ul>
                        <div class="col-12">
                            <div class="container">
                                <div class="row">
                                    <h2 class="h3 m-4 page-title">Titulo: {{ $video->title }}</h2>
                                </div>
                            </div>
                            <div class="row m-5 align-items-center">

                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-10">
                                            <div class="row align-items-center my-4">
                                                <div class="col">
                                                    <h2 class="page-title">Link do vídeo</h2>
                                                    <a href="{{ $video->link }}" target="_blank">{{ $video->link }}</a>
                                                    <div class="col-lg-4 col-md-6 ">
                                                        <div class="ud-single-blog ">
                                                            <iframe class="img-fluid img-center " width="400 "
                                                                height="250 " src="{{ $video->link }} " frameborder="0 "
                                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture "
                                                                allowfullscreen>
                                                            </iframe>
                                                        </div>
                                                    </div>

                                                    <p>Descrição: {{ $video->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-md-7 mb-2">
                                            <hr>
                                            <p class="mb-1 text-dark"><b>Data de Cadastro:</b>
                                                {{ $video->created_at }}
                                            </p>
                                            <p class="mb-1 text-dark"><b>Última Actualização:</b>
                                                {{ $video->updated_at }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.col-12 -->
                    </div> <!-- .row -->
                </div> <!-- .container-fluid -->
            </div>
        </div>
    </div>

@endsection
