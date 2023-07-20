@extends('layouts.merge.dashboard')
@section('title', 'Detalhes da definição')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')
                <div class="container justify-content-center mt-2 mb-5">
                    <div class="nav nav-pills flex-column flex-md-row mb-3">
                        <ul class="nav nav-pills flex-column flex-md-row mb-3">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.definition.index') }}"><i
                                        class="bx bx-link-alt me-1"></i>
                                    Lista</a>
                            </li>
                        </ul>
                        <div class="mb-1 col-12">
                            <div class="container">
                                <div class="row">
                                    <h2 class="h3 m-4 page-title">Titulo: {{ $data->title }}</h2>
                                </div>
                            </div>
                        </div>

                        <div class="mb-1 col-md-12">
                            <div class="form-group">
                                <label for="link">Descrição</label>
                                <textarea type="text" name="description" id="description" class="form-control" disabled>{{ isset($data->description) ? $data->description : old('description') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
