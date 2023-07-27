@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Utilizador')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Pesquisar..."
                                    aria-label="Pesquisar..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <a class="github-button"
                                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                                    data-icon="octicon-star" data-size="large" data-show-count="true"
                                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ url('dashboard/assets/img/avatars/1.png') }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ url('dashboard/assets/img/avatars/1.png') }}" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                                    <small class="text-muted">{{ Auth::user()->level }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Terminar sessão</span>
                                        </a>
                                    </li>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
                <!-- / Navbar -->


                <div class="container justify-content-center mt-4 mb-5">


                    <div class="row align-items-center mx-0">

                        <div class="col-lg-12 my-2 col-md-12 col-12">

                            <div class="card row align-items-center">
                                <div class="card-body">
                                    <h3>Nome: "{{ $data->name }}"</h3>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <h5 class="mb-1">
                                                <b>Email</b>
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
                        </div>
                        <div class="col-lg-12 mt-2 col-md-12 col-12">
                            <div class="card row align-items-center">
                                <div class="card-body">
                                    <table class="table datatables table-hover table-bordered" id="dataTable-1">
                                        <thead class="bg-primary ">
                                            <tr class="text-center text-ligth">
                                                <th style="color: #fff;">ID</th>
                                                <th style="color: #fff;">Nível</th>
                                                <th style="color: #fff;">IP</th>
                                                <th style="color: #fff;">Data de Criação</th>
                                                <th style="color: #fff;">Mensagem</th>
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
