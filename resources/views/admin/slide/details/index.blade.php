@extends('layouts.merge.dashboard')
@section('title', 'Detalhes do slide show')

@section('content')

<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts._includes.dashboard.NavbarSimple')
            <div class="container justify-content-center mt-4 mb-5">

                <div class="row align-items-center mx-0">

                    <div class="card mb-2">
                        <div class="card-body">

                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <h2 class="h3 m-4 page-title">Título: {{ $data->title }}</h2>


                                        <div class="row align-items-center m-5">
                                            <div class="col-md-12 mb-2">
                                                <h5 class="mb-1">
                                                    <b>Descrição:</b>
                                                    <p>{{ $data->description }}</p>
                                                </h5>

                                            </div>
                                        </div>

                                        <div class="row align-items-center m-5">
                                            <div class="col-md-7 mb-2">
                                                <hr>
                                                <p class="mb-1 text-dark"><b>Data de Cadastro:</b>
                                                    {{ $data->created_at }}
                                                </p>
                                                <p class="mb-1 text-dark"><b>Última Actualização:</b>
                                                    {{ $data->updated_at }}
                                                </p>

                                            </div>
                                        </div>



                                    </div> <!-- /.col-12 -->
                                </div> <!-- .row -->
                            </div> <!-- .container-fluid -->

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

                                                <div class="card border-0 bg-transparent">
                                                    <div class="card-img-top img-fluid rounded"
                                                        style='background-image:url("/storage/{{ $data->path }}");background-position:center;background-size:cover;height:400px;'>
                                                    </div>

                                                </div> <!-- .card -->


                                            </div> <!-- .card-deck -->


                                        </div>
                                    </div> <!-- .row -->
                                </div> <!-- .container-fluid -->
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
</div>

@endsection


