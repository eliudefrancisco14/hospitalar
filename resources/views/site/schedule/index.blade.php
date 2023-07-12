@extends('layouts.merge.site')
@section('titulo', 'Agenda')
@section('content')
    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Agendas </h1>
                    </div>
                </div>
            </div>
        </section>


        
        @include('extra._culture.index')
        @include('extra._schedule.index')
    </main>
@endsection
