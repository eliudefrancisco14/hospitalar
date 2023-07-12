@extends('layouts.merge.site')
@section('titulo', 'Acreditação')
@section('content')


    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white"> Acreditação</h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')

        <section class=" bg-light py-6 py-lg-7 text-dark md-12">
         
            <div class=container>
                <h3 class="my-6">Se for participante da Cimeira aceda o menu <a href="{{ route('site.signup.create') }}"> <u>Registo</u></a> </h3>
                    
                <div class=row>
                    <div class=col-lg>
                        <img src="/site/CRED.gif" width="400">
                    </div>
                    <div class="col-lg font-size-6">
                    
                        <div class="col text-center text-lg-left"><a href="https://www.ciam.gov.ao/ao/credenciais"
                                target="_blank"
                                class="btn btn-secondary text-uppercase d-inline-flex align-items-center">Clique Aqui!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
