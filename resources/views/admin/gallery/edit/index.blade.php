@extends('layouts.merge.dashboard')

@section('title', 'Editar titulo de galeria')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-4 mb-5">
                        {{ $data->name }}</h4>
                        @include('errors.form')
                    <div class="row align-items-center">
                        <form class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" method="POST"
                            action="{{ route('admin.gallery.update', $data->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @include('forms._formGallery.index')
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
