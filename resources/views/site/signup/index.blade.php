@extends('layouts.merge.site')
@section('titulo', 'Registo')
@section('content')
    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Registo</h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')

        <section id=content>
            <div class="container">

                <div class="align-items-center justify-content-center">
                    <h3 class="my-6">Se for da Imprensa aceda o menu <a href="{{ route('site.accreditation.create') }}">
                            <u>Acreditação</u></a> </h3>
                    <div class="col-lg-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="row my-5" action="{{ route('site.signup.store') }} " enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            @include('forms._formSignup.index')
                            <div class="col-12 text-center mb-5 my-6">

                                <button onClick="sgnup()" type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Submeter Registo
                                    <svg width=16 height=16 class=ml-2 xmlns=http://www.w3.org/2000/svg viewBox="0 0 24 24">
                                        <title>arrow-button-right</title>
                                        <path
                                            d=M7.207,23.751,19.678,12.767h0a1.066,1.066,0,0,0,0-1.539L7.207.249A.987.987,0,0,0,5.793.356L4.236,2.206a1.028,1.028,0,0,0,.111,1.438L13.8,11.809a.25.25,0,0,1,0,.379l-9.45,8.168a1.021,1.021,0,0,0-.349.7,1,1,0,0,0,.238.741l1.558,1.851a.989.989,0,0,0,1.414.107Z />
                                    </svg>
                                </button>

                            </div>
                            <style>
                                .modal-long {
                                    width: 1080px !important;
                                }
                            </style>
                            @include('extra._modalSignup.index')
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>


@endsection
@section('JS')
    <script>
        function sgnup() {
            var idcard = document.getElementById("idcard");
            var name = document.getElementById("name");
            var surname = document.getElementById("surname");
            document.getElementById("idcaText").innerHTML = idcard.value;
            document.getElementById("nameText").innerHTML = name.value;

            var organization = document.getElementById("organization");
            document.getElementById("organizationText").innerHTML = organization.value;
            var functiona = document.getElementById("function");
            document.getElementById("functionText").innerHTML = functiona.value;

       

            var country = document.getElementById("country");
            document.getElementById("countryText").innerHTML = country.value;
            var tel = document.getElementById("tel");
            document.getElementById("telText").innerHTML = tel.value;
            var email = document.getElementById("email");
            document.getElementById("emailText").innerHTML = email.value;
            var category = document.getElementById("category");
            document.getElementById("categoryText").innerHTML = category.value;

            var endDate = document.getElementById("endDate");
            document.getElementById("endDateText").innerHTML = endDate.value;
            var startDate = document.getElementById("startDate");
            document.getElementById("startDateText").innerHTML = startDate.value
            var evento = document.getElementById("evento");
            document.getElementById("eventDateText").innerHTML = evento.value
            
        }
    </script>
@endsection
