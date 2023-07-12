@extends('layouts.merge.site')
@section('titulo', 'Perguntas Frequentes')
@section('content')

    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Perguntas Frequentes</h1>

                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')

        <section class="container">

            <div class="row justify-content-center my-5 py-5">

                <div class=col-lg-12>
                    <div class=accordion id=accordionFAQs>
                        @foreach ($faqs as $item)
                            <div class=card>
                                <div class="card-header p-0 bg-white border-bottom" id="heading{{ $item->id }}">
                                    <h3 class="h4 mb-0">
                                        <button
                                            class="btn btn-block d-flex font-weight-bold font-size-4 text-left rounded-0 px-4 px-lg-5 py-lg-4 collapsed"
                                            type=button data-toggle=collapse data-target="#collapse{{ $item->id }}"
                                            aria-expanded=false aria-controls="collapse{{ $item->id }}">
                                            {{ $item->title }}
                                            <span class="collapse-arrow d-flex ml-auto">
                                                <svg width=16 height=16 class=text-muted xmlns=http://www.w3.org/2000/svg
                                                    viewBox="0 0 24 24">
                                                    <title>arrow-down-1</title>
                                                    <path
                                                        d=M12,19.5a2.3,2.3,0,0,1-1.729-.78L.46,7.568A1.847,1.847,0,0,1,3.233,5.129l8.579,9.752a.25.25,0,0,0,.376,0l8.579-9.752A1.847,1.847,0,1,1,23.54,7.568L13.732,18.716A2.31,2.31,0,0,1,12,19.5Z />
                                                </svg>
                                            </span>
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapse{{ $item->id }}" class="collapse"
                                    aria-labelledby="heading{{ $item->id }}" data-parent=#accordionFAQs>
                                    <div class="card-body bg-light border-bottom px-4 px-lg-5 font-size-5">
                                        {!! html_entity_decode($item->description) !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </section>

    </main>
@endsection
