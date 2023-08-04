@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da província')

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
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <h5 class="mb-1">
                                                <b>Descrição</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->description }}</p>

                                        </div>


                                        <div class="row align-items-center">
                                            <div class="col-md-7 mb-2">
                                                <hr>
                                                <p class="mb-1 text-dark"><b>Data de cadastro:</b>
                                                    {{ date('d-m-Y H:m', strtotime($data->created_at)) }}
                                                </p>
                                                <p class="mb-1 text-dark"><b>Data de atualização:</b>
                                                    {{ date('d-m-Y H:m', strtotime($data->updated_at)) }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-2 col-md-12 col-12">
                            <div class="card row align-items-center">
                                <div class="card-body">

                                    <div class="col-lg-12">
                                        <a type="button" class="btn btn-lg btn-primary text-white text-end"
                                            href="{{ url("admin/point/create/{$data->id}") }}">
                                            <span class="fe fe-plus fe-16 mr-3"></span>Novo Ponto
                                        </a>
                                    </div>
                                    <div class="row">

                                        @foreach ($data->provinces as $item)
                                            <div class="col-md-2 col-2">
                                                <div class="card-deck mb-4">

                                                    <div class="card col-auto pr-0 my-4">

                                                        <div class="dropdown">
                                                            <button type="button"
                                                                class="btn p-0 dropdown-toggle hide-arrow"
                                                                data-bs-toggle="dropdown">
                                                                <i
                                                                    class="bx bx-dots-vertical-rounded"></i>{{ $item->name }}
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item"
                                                                    href="{{ url("admin/point/delete/{$item->id}") }}"><i
                                                                        class="bx bx-trash me-1"></i>
                                                                    Excluir</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ url("admin/point/edit/$id_/{$item->id}") }}"><i
                                                                        class="bx bx-edit-alt me-1"></i>Editar</a>
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
