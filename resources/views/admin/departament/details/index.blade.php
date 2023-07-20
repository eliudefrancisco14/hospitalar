@extends('layouts.merge.dashboard')
@section('title', 'Detalhes do departamento')

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
                                <a class="nav-link" href="{{ route('admin.department.index') }}"><i
                                        class="bx bx-link-alt me-1"></i>
                                    Lista</a>
                            </li>
                        </ul>
                        <div class="col-12">
                            <div class="container">
                                <div class="row">
                                    <h2 class="h3 m-4 page-title">Nome: {{ $data->name }}</h2>
                                    <h2 class="h3 m-4 page-title">Responsável: {{ $data->boss }}</h2>

                                    <div class="mb-1 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Descrição detalhada</label>
                                            <textarea type="text" name="description" id="description" class="form-control" disabled>{{ isset($data->description) ? $data->description : old('description') }}</textarea>
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
