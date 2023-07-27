@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Utilizador')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                @include('layouts._includes.dashboard.NavbarSimple')
                <!-- / Navbar -->

                <div class="container justify-content-center mt-2 mb-5">
                    <h2 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Informação:
                        {{ $data->name }}</h2>
                    <hr>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="row mt-5 align-items-center">
                                    <div class="col-md-3 text-center mb-5">
                                        <div class=" rounded-circle ml-5 bg-primary" style="height: 150px; width:150px;">
                                            <h1 class="text-white p-5 " style="font-size: 65px">{{ $data->name[0] }}
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col-md-7">
                                                <h4 class="mb-1">{{ $data->email }}</h4>
                                                <p class="small mb-3">
                                                    <span class="mb-4">Data de Criação:
                                                        {{ $data->created_at }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <h4 class="mb-1">
                                                    <b>Permissão:</b>
                                                    {{ $data->level }}

                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive text-nowrap">
                                        <div class="card-body">
                                            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                                                <thead class="bg-primary ">
                                                    <tr class="text-center text-ligth">
                                                        <th>ID</th>
                                                        <th>NIVEL</th>
                                                        <th>IP</th>

                                                        <th>DATA</th>
                                                        <th>DESCRIÇÃO</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">

                                                    @foreach ($logs as $item)
                                                        <tr class="text-center text-dark">
                                                            <td>{{ $item->id }}</td>
                                                            <td>{{ $item->level }} </td>
                                                            <td>{{ $item->REMOTE_ADDR }} </td>
                                                            <td class="text-center">{{ $item->created_at }}
                                                            </td>
                                                            <td class="text-left">{{ $item->message }} </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
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
