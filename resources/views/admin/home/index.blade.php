@extends('layouts.merge.dashboard')

@section('content')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y mt-2 mb-5 ">
                        <div class="row mb-5">
                            @if (Auth::user()->level == 'Administrador')
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="">
                                                    <h4>Total de Usuários Registrados </h4>
                                                    <hr>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn p-0" type="button" id="cardOpt3"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                        <a class="dropdown-item" href="{{ route('admin.user.index') }}">Ver
                                                            mais</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="fw-semibold d-block mb-1">Usuários</span>
                                            <h3 class="card-title mb-2 text-success">{{ $count_users }}</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    
                                @else
                                    <div class="col-md-12">
                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="">
                                            <h4>Total de Paceintes Consultados </h4>
                                            <hr>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                <a class="dropdown-item" href="{{ route('admin.pacient.index') }}">Ver
                                                    mais</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Pacientes</span>
                                    <h3 class="card-title mb-2 text-success">{{ $count_pacients }}</h3>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="h5 page-title">
                                        Dashboard
                                    </h2>
                                    <hr />

                                    <div class="d-flex flex-column flex-lg-row">

                                        <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                                    </div>
                                    <h1>Bem-Vindo ao Assistente hospitalar</h1>
                                    <h4 class="text-light">Sistema de Triagens Rápidas.</h4>
                                </div>
                            </div>
                        </div>

                    </div>



                    <!-- / Content -->
                </div>
                <div class="content-backdrop fade"></div>
            </div>

            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
@endsection
