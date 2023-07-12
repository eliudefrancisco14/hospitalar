@extends('layouts.merge.site')
@section('titulo', 'Contactos')
@section('content')

    <main>

      
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Contactos</h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')

        <section class="container">

            <div class="my-5 py-5 row no-gutters">
                <div class="col-lg-5">
                    <div class=container>
                        <div class=" mx-n3 justify-content-center text-center">
                            <div class="col-md-12 px-3 mb-3 mb-lg-3" data-aos=fade-up>
                                <div class="card shadow bg-light h-100 lift">
                                    <div class="card-body py-5 px-2">
                                        <svg width=40 height=40 class="fill-secondary mb-3" xmlns=http://www.w3.org/2000/svg
                                            viewBox="0 0 24 24">
                                            <title>building-modern-2</title>
                                            <path
                                                d=M7.125,6h8a.5.5,0,0,0,.3-.9l-3.1-2.325a.5.5,0,0,1-.2-.4V1a1,1,0,0,0-2,0V2.375a.5.5,0,0,1-.2.4L6.825,5.1A.5.5,0,0,0,7.125,6Z />
                                            <path
                                                d=M15.125,7.5h-8a.5.5,0,0,0-.5.5V23.5a.5.5,0,0,0,.5.5h8a.5.5,0,0,0,.5-.5V8A.5.5,0,0,0,15.125,7.5Zm-5,13a.75.75,0,0,1-1.5,0v-10a.75.75,0,0,1,1.5,0Zm3.5,0a.75.75,0,0,1-1.5,0v-10a.75.75,0,0,1,1.5,0Z />
                                            <path
                                                d=M4.625,13h-4a.5.5,0,0,0-.5.5v10a.5.5,0,0,0,.5.5h4a.5.5,0,0,0,.5-.5v-10A.5.5,0,0,0,4.625,13Zm-1.25,8a.75.75,0,0,1-1.5,0V20a.75.75,0,0,1,1.5,0Zm0-4a.75.75,0,0,1-1.5,0V16a.75.75,0,0,1,1.5,0Z />
                                            <path
                                                d=M23.42,12.811l-5.25-2.25a.75.75,0,0,0-1.045.689v12a.75.75,0,0,0,.75.75h5.25a.75.75,0,0,0,.75-.75V13.5A.749.749,0,0,0,23.42,12.811ZM19.875,20.5a.75.75,0,0,1-1.5,0v-1a.75.75,0,0,1,1.5,0Zm0-4.5a.75.75,0,0,1-1.5,0V15a.75.75,0,0,1,1.5,0Zm2.5,4.5a.75.75,0,0,1-1.5,0v-1a.75.75,0,0,1,1.5,0Zm0-4.5a.75.75,0,0,1-1.5,0V15a.75.75,0,0,1,1.5,0Z />
                                        </svg>
                                        <p class="font-size-6 mb-0">Endereço:
                                            {{ $configuration->address }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 px-3 mb-3 mb-lg-3" data-aos=fade-up data-aos-delay=50>
                                <div class="card shadow bg-light h-100 lift">
                                    <div class="card-body py-5 px-2">
                                        <svg width=40 height=40 class="fill-secondary mb-3" xmlns=http://www.w3.org/2000/svg
                                            viewBox="0 0 24 24">
                                            <title>phone-landline</title>
                                            <path
                                                d=M18.5,11.956a4.005,4.005,0,0,1-3.961-3.442.248.248,0,0,0-.23-.218,45.021,45.021,0,0,0-4.618,0,.248.248,0,0,0-.23.218A4.005,4.005,0,0,1,5.5,11.956H4.251a.25.25,0,0,0-.25.25v7.75a2.5,2.5,0,0,0,2.5,2.5h11a2.5,2.5,0,0,0,2.5-2.5v-7.75a.25.25,0,0,0-.25-.25ZM12,17.512a1,1,0,1,1-1,1A1,1,0,0,1,12,17.512Zm-1-2.966a1,1,0,1,1,1,1A1,1,0,0,1,11,14.546Zm3,3.966a1,1,0,1,1,1,1A1,1,0,0,1,14,18.512Zm2-3.966a1,1,0,1,1-1-1A1,1,0,0,1,16,14.546Zm-7-1a1,1,0,1,1-1,1A1,1,0,0,1,9,13.546Zm0,3.966a1,1,0,1,1-1,1A1,1,0,0,1,9,17.512Z />
                                            <path
                                                d=M21.1,2.466h0a45.381,45.381,0,0,0-18.2,0A3.7,3.7,0,0,0,0,5.956v2a2.5,2.5,0,0,0,2.5,2.5h3A2.5,2.5,0,0,0,8,7.956V7.144a.254.254,0,0,1,.232-.253,45.151,45.151,0,0,1,7.536,0A.254.254,0,0,1,16,7.144v.812a2.5,2.5,0,0,0,2.5,2.5h3a2.5,2.5,0,0,0,2.5-2.5v-2A3.7,3.7,0,0,0,21.1,2.466Z />
                                        </svg>
                                        <p class="font-size-6 mb-0">Telefone:
                                            {{ $configuration->telefone }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 px-3 mb-3 mb-md-3" data-aos=fade-up data-aos-delay=50>
                                <div class="card shadow bg-light h-100 lift">
                                    <div class="card-body py-5 px-2">
                                        <svg width=40 height=40 class="fill-secondary mb-4" xmlns=http://www.w3.org/2000/svg
                                            viewBox="0 0 24 24">
                                            <title>network-share</title>
                                            <path
                                                d=M18.449,10.255c-.032-.333-.074-.655-.123-.968a.253.253,0,0,1,.057-.2A.249.249,0,0,1,18.574,9h2.805a.25.25,0,0,1,.239.178c.019.064.033.13.047.2a.249.249,0,0,0,.206.2,4.2,4.2,0,0,1,1.819.746.128.128,0,0,0,.144,0,.131.131,0,0,0,.061-.131C22.414.389,12.544-.036,11.963,0a12,12,0,0,0,.066,24h.006a1.024,1.024,0,0,0,.892-.572,1.035,1.035,0,0,0-.444-1.32,9.382,9.382,0,0,1-3.774-4.328.251.251,0,0,1,.146-.342.988.988,0,0,0,.676-.937,1,1,0,0,0-1-1h-.4a.251.251,0,0,1-.244-.2,15.606,15.606,0,0,1-.1-6.1A.249.249,0,0,1,8.03,9h8a.249.249,0,0,1,.245.2c.075.4.138.806.18,1.243a1.007,1.007,0,0,0,1.09.9A1.052,1.052,0,0,0,18.449,10.255ZM2.85,15.5a.25.25,0,0,1-.235-.167,9.883,9.883,0,0,1-.177-6.154A.25.25,0,0,1,2.677,9H5.484a.249.249,0,0,1,.247.287A17.9,17.9,0,0,0,5.531,12a17.189,17.189,0,0,0,.3,3.2.252.252,0,0,1-.246.3Zm5.222,5.157a.25.25,0,0,1-.311.371A10.036,10.036,0,0,1,3.966,17.9a.25.25,0,0,1,.2-.4H6.255a.25.25,0,0,1,.234.162A12.84,12.84,0,0,0,8.072,20.656Zm0-17.317A13.15,13.15,0,0,0,6.329,6.827.25.25,0,0,1,6.092,7H3.83a.25.25,0,0,1-.21-.386A10.04,10.04,0,0,1,7.764,2.969a.25.25,0,0,1,.311.37Zm7.439,3.548A.248.248,0,0,1,15.306,7H8.754a.25.25,0,0,1-.231-.346,10.049,10.049,0,0,1,3.364-4.385.249.249,0,0,1,.29,0,10.089,10.089,0,0,1,3.36,4.385A.25.25,0,0,1,15.514,6.887Zm2.217-.06a13.188,13.188,0,0,0-1.743-3.483.25.25,0,0,1,.312-.37,10.153,10.153,0,0,1,4.141,3.639.25.25,0,0,1-.21.386H17.968A.25.25,0,0,1,17.731,6.827Z />
                                            <path
                                                d=M15.606,20.238a.253.253,0,0,1,.266-.051l2.576,1.031a.034.034,0,0,1,.021.031,2.77,2.77,0,1,0,.863-1.989.249.249,0,0,1-.266.051l-2.445-.978a.252.252,0,0,1-.157-.215c0-.044-.008-.1-.017-.164a.249.249,0,0,1,.12-.247L19.406,16a.249.249,0,0,1,.27.009,2.714,2.714,0,0,0,1.543.487,2.75,2.75,0,1,0-2.726-2.451.252.252,0,0,1-.12.243L15.532,16a.253.253,0,0,1-.271-.008,2.7,2.7,0,0,0-1.542-.488,2.788,2.788,0,0,0-2.75,2.75A2.752,2.752,0,0,0,13.719,21,2.8,2.8,0,0,0,15.606,20.238Z />
                                        </svg>
                                        <p class="font-size-6 mb-0">
                                            Email: {{ $configuration->email }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 p-4 p-lg-6 bg-white shadow-lg">
                    <h2 class=h3>Estamos aqui para ajudá-lo</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="row mx-n2" method="post" action="{{ route('site.help.email') }}">
                        @csrf
                        <div class="col-md-6 px-2 mb-3">
                            <input class="form-control" type="text" name="name" placeholder="Nome" aria-label="Nome">
                        </div>

                        <div class="col-md-6 px-2 mb-3">
                            <input class="form-control" type="email" name="email" placeholder="E-mail"
                                aria-label="Email address">
                        </div>
                        <div class="col-md-12 px-2 mb-3">
                            <input class="form-control" type="text" name="subject" placeholder="Assunto"
                                aria-label="Assunto">
                        </div>

                        <div class="col-12 px-2 mb-3">
                            <textarea class="form-control" rows=7 placeholder="Mensagem" aria-label="Mensagem" name="msg"></textarea>
                        </div>

                        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                {!! RecaptchaV3::field('register') !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class=col-md>
                                <p class="small text-muted mb-4">Preencha com dados Verdadeiros!</p>
                            </div>
                            <div class="col col-md-auto">
                                <button type="submit"
                                    class="btn btn-secondary text-uppercase d-inline-flex align-items-center w-100">
                                    Submeter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </section>

    </main>


@endsection
