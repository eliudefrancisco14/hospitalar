@extends('layouts.merge.dashboard')

@section('title', 'Editar Informações')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-2 mb-5">
                    <h4 class="page-title">
                        <a href="{{ route('admin.provinceDocument.show') }}"><u>Ver Informações</u></a>
                        > Editar Informações
                    </h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row align-items-center">
                        <form class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" method="POST"
                            action="{{ route('admin.provinceDocument.update', $data->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @include('forms._formProvinceDocument.index')
                            <div class="container">
                                <div class="row">
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-2">Salvar
                                            alterações</button>
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
