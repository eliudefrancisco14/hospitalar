@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da galeria')

@section('content')

<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Layout container -->
        <div class="layout-page">
            @include('layouts._includes.dashboard.NavbarSimple')

            <div class="container justify-content-center mt-4 mb-5">


                <div class="row align-items-center mx-0">

                    <div class="col-lg-12 my-2 col-md-12 col-12">

                        <div class="card row align-items-center">
                            <div class="card-body">
                                <h3>Nome: "{{ $data->name }}"</h3>
                                

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $data->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b>
                                            {{ $data->updated_at }}
                                        </p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-12 mt-2 col-md-12 col-12">
                        <div class="card row align-items-center">
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-lg-10">
                                            <div class="row align-items-center my-4">
                                                <div class="col">
                                                    <h2 class="page-title">Imagem</h2>
                                                </div>
                                            </div>
                                            <div class="card-deck mb-4">
                                                <div class="card border-0 bg-transparent text-center">
                                                    <div class="card-img-top img-fluid rounded"
                                                        style='background-image:url("/storage/{{ $data->image }}");background-position:center;background-size:cover;height:400px;width:auto;'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-2 col-md-12 col-12">
                        <div class="card row align-items-center">
                            <div class="card-body">

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
                                <div class="row">
                                    <?php $count = 1; ?>

                                    @foreach ($data->images as $item)
                                        <div class="col-md-4">

                                            <div class="card-deck mb-4">
                                                <div class="card border-0 bg-transparent">
                                                    <div class="card-img-top img-fluid rounded"
                                                        style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:100%'>
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
