@extends('layouts.merge.site')
@section('titulo', 'Erro 404')
@section('content')


    <main>
        <section id=content>
            <div class="container-fluid px-0">
                <div class="row vh-100">
                    <div class="col-6 offset-6">
                        <div class="bg-image bg-cover" style="background-image: url(/site/images/photos/photo-58.jpg);">
                        </div>
                    </div>
                    <div class="position-absolute col-md-8 col-lg-6 col-xl-4 center ml-lg-n9">
                        <div class="square d-flex w-100 mt-5">
                            <div
                                class="square-inner bg-primary text-white mx-auto p-4 p-lg-6 d-flex flex-column justify-content-center">
                                <h1>404</h1>
                                <p class=mb-6>Não conseguimos encontrar essa Página!</p>
                                <a href="{{ route('site.home') }}"
                                    class="btn btn-light text-uppercase px-4 px-md-6 d-inline-flex align-items-center align-self-start"
                                    title="Go back">
                                    Voltar
                                    <svg width=16 height=16 class=ml-2 xmlns=http://www.w3.org/2000/svg viewBox="0 0 24 24">
                                        <title>keyboard-arrow-return</title>
                                        <path
                                            d=M16.147,1.952H12.238a1.5,1.5,0,0,0,0,3h3.909a4.852,4.852,0,1,1,0,9.7H7.137a.25.25,0,0,1-.25-.25V11.27a1,1,0,0,0-1.707-.707L.293,15.449a1,1,0,0,0,0,1.414L5.18,21.75a1,1,0,0,0,1.707-.707V17.906a.25.25,0,0,1,.25-.25h9.01a7.852,7.852,0,1,0,0-15.7Z />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
