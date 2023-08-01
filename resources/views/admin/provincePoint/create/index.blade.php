@extends('layouts.merge.dashboard')

@section('title', 'Cadastrar angola online')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-4 mb-5">
                    @include('errors.form')
                    <div class="row align-items-center">
                        <form action='{{ url("admin/point/store/$data->id") }}' method="POST">
                            @csrf
                            @include('forms._formProvincePoint.index')                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
