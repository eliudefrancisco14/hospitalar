@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Utilizador')

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
                                                <b>E-mail</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->email }}</p>

                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <h5 class="mb-1">
                                                <b>Nível de Acesso</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $data->level }}</p>

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

                                    <table class="table datatables table-hover table-bordered" id="dataTable-1">
                                        <thead class="bg-primary ">
                                            <tr class="text-center text-ligth">
                                                <th style="color: #fff">ID</th>
                                                <th style="color: #fff">NIVEL</th>
                                                <th style="color: #fff">IP</th>

                                                <th style="color: #fff">DATA</th>
                                                <th style="color: #fff">DESCRIÇÃO</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                            @foreach ($logs as $item)
                                                <tr class="text-center text-dark">
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->level }} </td>
                                                    <td>{{ $item->REMOTE_ADDR }} </td>
                                                    <td class="text-center">{{ $item->created_at }} </td>
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
@endsection
