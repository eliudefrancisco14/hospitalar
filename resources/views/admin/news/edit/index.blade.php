@extends('layouts.merge.dashboard')

@section('title', 'Editar noticia')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-2 mb-5">
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
                        <form class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" method="POST"
                            action="{{ route('admin.news.update', $data->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @include('forms._formNews.index')
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
