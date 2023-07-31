@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da galeria')

@section('content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-2 mb-5">
                    <h2 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Título:
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
                            <p class="mb-4 mt-1">{{ $data->description }}</p>
                        </div>
                    </div>
                </div>

                <div class="container justify-content-center mt-2 mb-5">
                    <div class="col-12 col-lg-12">
                        <div class="row align-items-center my-4">
                            <div class="col">
                                <h2 class="page-title">Imagem: {{ $count }}</h2>
                            </div>
                            <div class="col-auto">
                                <a type="button" class="btn btn-lg btn-primary text-white"
                                    href="{{ url("admin/imageGallery/create/{$data->id}") }}">
                                    <span class="fe fe-plus fe-16 mr-3"></span><i class='bx bx-plus-circle'></i>
                                </a>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="col-md-8">
                                    <div class="row">
                                        <?php $count = 1; ?>
                                        @foreach ($data->images as $item)
                                            <div class="col-md-4">

                                                <div class="card-deck mb-4">
                                                    <div class="card border-0 bg-transparent">
                                                        <div class="card-img-top img-fluid rounded"
                                                            style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:400px'>
                                                        </div>
                                                    </div> <!-- .card -->
                                                    <div class="col-auto pr-0">
                                                        <div class="dropdown">
                                                            <button type="button"
                                                                class="btn p-0 dropdown-toggle hide-arrow"
                                                                data-bs-toggle="dropdown">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item"
                                                                    href="{{ url("admin/imageGallery/delete/{$item->id}") }}"><i
                                                                        class="bx bx-trash me-1"></i> {{ $count++ }} -
                                                                    Excluir</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
