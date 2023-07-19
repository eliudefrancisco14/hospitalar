@extends('layouts.merge.dashboard')
@section('title', 'Detalhes da apresentação em slide')

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
                                <a class="nav-link active" href="{{ route('admin.slide.create') }}"><i
                                        class="bx bx-user me-1"></i> Criar slide</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.slide.index') }}"><i
                                        class="bx bx-link-alt me-1"></i>
                                    Lista</a>
                            </li>
                        </ul>
                        <div class="col-12">
                            <div class="container">
                                <div class="row">                                  
                                    <div class="mb-1 col-md-12">
                                        <div class="form-group">
                                            <h2 class="h3 m-4 page-title">Titulo:</h2>
                                            <hr>
                                            <p class="h3 m-4 page-title">{{ $data->title }}</p>
                                            <hr>
                                            <textarea disabled type="text" name="description" id="description" class="form-control">{{ isset($data->description) ? $data->description : old('description') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .row -->
                </div> <!-- .container-fluid -->
            </div>
        </div>
    </div>

@endsection
