@extends('layouts.merge.dashboard')

@section('title', 'Cadastrar angola online')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-2 mb-5">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configurar Angola Onlie</span></h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />
                    <div class="row align-items-center">
                        <form action='{{ url("admin/point/store/$data->id") }}' method="POST" class="row">
                            @csrf
                            @include('forms._formProvincePoint.index')
                            <div class="container">
                                <div class="row">
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-2">Salvar
                                            alterações</button>
                                        <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
