<section class="py-6 py-lg-7">
    <div class=container>
        <div class=row>
            <div class=col>
                <div class="row justify-content-between align-items-baseline">
                    <div class="col my-5">

                        <a href="{{ route('site.schedule') }}">
                            <h2 class="text-dark"> Agenda da Cimeira </h2>
                        </a>
                    </div>
                    <div class="col-auto small">
                        <ul class="nav nav-tabs border-0" id=myTab role=tablist>
                            @if ($schedulesI)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0 active" id=day07-tab
                                        data-toggle=tab href=#day07 role=tab aria-controls=day07 aria-selected=true>
                                        Dia 07</a>
                                </li>
                            @endif

                            @if ($schedulesII)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0 " id=day08-tab data-toggle=tab
                                        href=#day08 role=tab aria-controls=day08 aria-selected=false>
                                        Dia 08</a>
                                </li>
                            @endif

                            @if ($schedulesIII)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0" id=day09-tab data-toggle=tab
                                        href=#day09 role=tab aria-controls=day09 aria-selected=false>
                                        Dia 09</a>
                                </li>
                            @endif

                            @if ($schedulesIV)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0" id=day10-tab data-toggle=tab
                                        href=#day10 role=tab aria-controls=day10 aria-selected=false>
                                        Dia 10</a>
                                </li>
                            @endif

                            @if ($schedulesV)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0" id=day11-tab data-toggle=tab
                                        href=#day11 role=tab aria-controls=day11 aria-selected=false>
                                        Dia 11</a>
                                </li>
                            @endisset

                            @if ($schedulesV)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0" id=day12-tab data-toggle=tab
                                        href=#day12 role=tab aria-controls=day12 aria-selected=false>
                                        Dia 12</a>
                                </li>
                            @endisset
                            @if ($schedulesV)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0" id=day13-tab
                                        data-toggle=tab href=#day13 role=tab aria-controls=day13
                                        aria-selected=false>
                                        Dia 13</a>
                                </li>
                            @endisset
                            @if ($schedulesV)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0" id=day14-tab
                                        data-toggle=tab href=#day14 role=tab aria-controls=day14
                                        aria-selected=false>
                                        Dia 14</a>
                                </li>
                            @endisset
                            @if ($schedulesV)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0" id=day15-tab
                                        data-toggle=tab href=#day15 role=tab aria-controls=day15
                                        aria-selected=false>
                                        Dia 15</a>
                                </li>
                            @endisset

                            @if ($schedulesV)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0" id=day16-tab
                                        data-toggle=tab href=#day16 role=tab aria-controls=day16
                                        aria-selected=false>
                                        Dia 16</a>
                                </li>
                            @endisset
                            @if ($schedulesV)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0"
                                        id=day17-tab data-toggle=tab href=#day17 role=tab
                                        aria-controls=day17 aria-selected=false>
                                        Dia 17</a>
                                </li>
                            @endisset

</ul>
</div>
</div>


<div class=tab-content id=myTabContent>
@if ($schedulesI)
<div class="tab-pane fade show active" id=day07 role=tabpanel aria-labelledby=day07-tab>
<div class=table-responsive>
    <table class="table table-striped font-size-5 mb-0">
        <thead>
            <tr class="font-size-6 text-secondary">
                <th scope=col>Horário</th>
                <th scope=col>Programa</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($schedulesI as $item)
                <tr>
                    <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                        {{ date('H:i', strtotime($item->end)) }}</td>

                    <td>{{ $item->program }}</td>

                </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
@endif

@if ($schedulesII)
<div class="tab-pane fade" id=day08 role=tabpanel aria-labelledby=day08-tab>
<div class=table-responsive>
    <table class="table table-striped font-size-5 mb-0">
        <thead>
            <tr class="font-size-6 text-secondary">
                <th scope=col>Horário</th>
                <th scope=col>Programa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedulesII as $item)
                <tr>
                    <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                        {{ date('H:i', strtotime($item->end)) }}</td>
                    <td style="width:570px">{{ $item->program }}</td>


                </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
@endif

@if ($schedulesIII)
<div class="tab-pane fade" id=day09 role=tabpanel aria-labelledby=day09-tab>
<div class=table-responsive>
    <table class="table table-striped font-size-5 mb-0">
        <thead>
            <tr class="font-size-6 text-secondary">
                <th scope=col>Horário</th>
                <th scope=col>Programa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedulesIII as $item)
                <tr>
                    <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                        {{ date('H:i', strtotime($item->end)) }}</td>
                    <td>{{ $item->program }}</td>


                </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
@endif

@if ($schedulesIV)
<div class="tab-pane fade" id=day10 role=tabpanel aria-labelledby=day10-tab>
<div class=table-responsive>
    <table class="table table-striped font-size-5 mb-0">
        <thead>
            <tr class="font-size-6 text-secondary">
                <th scope=col>Horário</th>
                <th scope=col>Programa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedulesIV as $item)
                <tr>
                    <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                        {{ date('H:i', strtotime($item->end)) }}</td>
                    <td>{{ $item->program }}</td>


                </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
@endif


@if ($schedulesV)
<div class="tab-pane fade" id=day11 role=tabpanel aria-labelledby=day11-tab>
<div class=table-responsive>
    <table class="table table-striped font-size-5 mb-0">
        <thead>
            <tr class="font-size-6 text-secondary">
                <th scope=col>Horário</th>
                <th scope=col>Programa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedulesV as $item)
                <tr>
                    <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                        {{ date('H:i', strtotime($item->end)) }}</td>
                    <td>{{ $item->program }}</td>


                </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
@endif



@if ($schedulesVI)
<div class="tab-pane fade" id=day12 role=tabpanel aria-labelledby=day12-tab>
<div class=table-responsive>
    <table class="table table-striped font-size-5 mb-0">
        <thead>
            <tr class="font-size-6 text-secondary">
                <th scope=col>Horário</th>
                <th scope=col>Programa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedulesVI as $item)
                <tr>
                    <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                        {{ date('H:i', strtotime($item->end)) }}</td>
                    <td>{{ $item->program }}</td>


                </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
@endif

@if ($schedulesVII)
<div class="tab-pane fade" id=day13 role=tabpanel aria-labelledby=day13-tab>
<div class=table-responsive>
    <table class="table table-striped font-size-5 mb-0">
        <thead>
            <tr class="font-size-6 text-secondary">
                <th scope=col>Horário</th>
                <th scope=col>Programa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedulesVII as $item)
                <tr>
                    <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                        {{ date('H:i', strtotime($item->end)) }}</td>
                    <td>{{ $item->program }}</td>


                </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
@endif

@if ($schedulesVIII)
<div class="tab-pane fade" id=day14 role=tabpanel aria-labelledby=day14-tab>
<div class=table-responsive>
    <table class="table table-striped font-size-5 mb-0">
        <thead>
            <tr class="font-size-6 text-secondary">
                <th scope=col>Horário</th>
                <th scope=col>Programa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedulesVIII as $item)
                <tr>
                    <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                        {{ date('H:i', strtotime($item->end)) }}</td>
                    <td>{{ $item->program }}</td>


                </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
@endif


@if ($schedulesIX)
<div class="tab-pane fade" id=day15 role=tabpanel aria-labelledby=day15-tab>
<div class=table-responsive>
    <table class="table table-striped font-size-5 mb-0">
        <thead>
            <tr class="font-size-6 text-secondary">
                <th scope=col>Horário</th>
                <th scope=col>Programa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedulesIX as $item)
                <tr>
                    <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                        {{ date('H:i', strtotime($item->end)) }}</td>
                    <td>{{ $item->program }}</td>


                </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
@endif

@if ($schedulesX)
<div class="tab-pane fade" id=day16 role=tabpanel aria-labelledby=day16-tab>
<div class=table-responsive>
    <table class="table table-striped font-size-5 mb-0">
        <thead>
            <tr class="font-size-6 text-secondary">
                <th scope=col>Horário</th>
                <th scope=col>Programa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedulesX as $item)
                <tr>
                    <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                        {{ date('H:i', strtotime($item->end)) }}</td>
                    <td>{{ $item->program }}</td>


                </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
@endif
@if ($schedulesXI)
<div class="tab-pane fade" id=day17 role=tabpanel aria-labelledby=day17-tab>
<div class=table-responsive>
    <table class="table table-striped font-size-5 mb-0">
        <thead>
            <tr class="font-size-6 text-secondary">
                <th scope=col>Horário</th>
                <th scope=col>Programa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedulesXI as $item)
                <tr>
                    <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                        {{ date('H:i', strtotime($item->end)) }}</td>
                    <td>{{ $item->program }}</td>

                </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
@endif
</div>
</div>
</div>
</div>
</section>



<section class="py-6 py-lg-7">
<div class=container>
<div class=row>
<div class=col>
<div class="row justify-content-between align-items-baseline">
<div class="col my-5">

<a href="{{ route('site.schedule') }}">
<h2 class="text-dark">Agenda da Semana da Industrialização </h2>
</a>
</div>
<div class="col-auto small">
<ul class="nav nav-tabs border-0" id=myTab role=tablist>
@if ($ScheduleIndustrializationVII)
    <li class=nav-item>
        <a class="nav-link font-weight-bold px-2 border-0 active" id=day30-tab
            data-toggle=tab href=#day30 role=tab aria-controls=day30 aria-selected=true>
            Dia 30 </a>
    </li>
@endif

@if ($ScheduleIndustrializationI)
    <li class=nav-item>
        <a class="nav-link font-weight-bold px-2 border-0 " id=day31-tab
            data-toggle=tab href=#day31 role=tab aria-controls=day31 aria-selected=true>
            Dia 31 </a>
    </li>
@endif

@if ($ScheduleIndustrializationII)
    <li class=nav-item>
        <a class="nav-link font-weight-bold px-2 border-0 " id=day01-tab data-toggle=tab
            href=#day01 role=tab aria-controls=day01 aria-selected=false>
            Dia 01</a>
    </li>
@endif

@if ($ScheduleIndustrializationIII)
    <li class=nav-item>
        <a class="nav-link font-weight-bold px-2 border-0" id=day02-tab data-toggle=tab
            href=#day02 role=tab aria-controls=day02 aria-selected=false>
            Dia 02</a>
    </li>
@endif

@if ($ScheduleIndustrializationIV)
    <li class=nav-item>
        <a class="nav-link font-weight-bold px-2 border-0" id=day03-tab data-toggle=tab
            href=#day03 role=tab aria-controls=day03 aria-selected=false>
            Dia 03</a>
    </li>
@endif

@if ($ScheduleIndustrializationV)
    <li class=nav-item>
        <a class="nav-link font-weight-bold px-2 border-0" id=day04-tab data-toggle=tab
            href=#day04 role=tab aria-controls=day04 aria-selected=false>
            Dia 04</a>
    </li>
@endisset


</ul>
</div>
</div>


<div class=tab-content id=myTabContent>


    @if ($ScheduleIndustrializationVII)
    <div class="tab-pane fade show active" id=day30 role=tabpanel aria-labelledby=day30-tab>
        <p class="text-center">Dia de Conscientização da Mídia </p>
    <div class=table-responsive>
    <table class="table table-striped font-size-5 mb-0">
        <thead>
            <tr class="font-size-6 text-secondary">
                <th scope=col>Horário</th>
                <th scope=col>Programa</th>
                <th scope=col>Responsável</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ScheduleIndustrializationVII as $item)
                <tr>
                    <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                        {{ date('H:i', strtotime($item->end)) }}</td>
                    <td> {!! html_entity_decode($item->program) !!} </td>
                    <td> {!! html_entity_decode($item->responsible) !!}</td>
    
                </tr>
            @endforeach
    
        </tbody>
    </table>
    </div>
    </div>
    @endif
    
@if ($ScheduleIndustrializationI)
<div class="tab-pane fade " id=day31 role=tabpanel aria-labelledby=day31-tab>
<div class=table-responsive>
<table class="table table-striped font-size-5 mb-0">
    <thead>
        <tr class="font-size-6 text-secondary">
            <th scope=col>Horário</th>
            <th scope=col>Programa</th>
            <th scope=col>Responsável</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ScheduleIndustrializationI as $item)
            <tr>
                <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                    {{ date('H:i', strtotime($item->end)) }}</td>
                <td> {!! html_entity_decode($item->program) !!} </td>
                <td> {!! html_entity_decode($item->responsible) !!}</td>
            </tr>
        @endforeach

    </tbody>

</table>
</div>

</div>
@endif

@if ($ScheduleIndustrializationII)
<div class="tab-pane fade" id=day01 role=tabpanel aria-labelledby=day01-tab>
<div class=table-responsive>
<table class="table table-striped font-size-5 mb-0">
    <thead>
        <tr class="font-size-6 text-secondary">
            <th scope=col>Horário</th>
            <th scope=col>Programa</th>
            <th scope=col>Responsável</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ScheduleIndustrializationII as $item)
            <tr>
                <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                    {{ date('H:i', strtotime($item->end)) }}</td>
                <td> {!! html_entity_decode($item->program) !!} </td>
                <td> {!! html_entity_decode($item->responsible) !!}</td>

            </tr>
        @endforeach

    </tbody>
</table>
</div>
</div>
@endif

@if ($ScheduleIndustrializationIII)
<div class="tab-pane fade" id=day02 role=tabpanel aria-labelledby=day02-tab>
<div class=table-responsive>
<table class="table table-striped font-size-5 mb-0">
    <thead>
        <tr class="font-size-6 text-secondary">
            <th scope=col>Horário</th>
            <th scope=col>Programa</th>
            <th scope=col>Responsável</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ScheduleIndustrializationIII as $item)
            <tr>
                <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                    {{ date('H:i', strtotime($item->end)) }}</td>
                <td> {!! html_entity_decode($item->program) !!} </td>
                <td> {!! html_entity_decode($item->responsible) !!}</td>
            </tr>
        @endforeach

    </tbody>
</table>
</div>
</div>
@endif

@if ($ScheduleIndustrializationIV)
<div class="tab-pane fade" id=day03 role=tabpanel aria-labelledby=day03-tab>
<div class=table-responsive>
<table class="table table-striped font-size-5 mb-0">
    <thead>
        <tr class="font-size-6 text-secondary">
            <th scope=col>Horário</th>
            <th scope=col>Programa</th>
            <th scope=col>Responsável</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ScheduleIndustrializationIV as $item)
            <tr>
                <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                    {{ date('H:i', strtotime($item->end)) }}</td>
                <td> {!! html_entity_decode($item->program) !!} </td>
                <td> {!! html_entity_decode($item->responsible) !!}</td>
            </tr>
        @endforeach

    </tbody>
</table>
</div>
</div>
@endif

@if ($ScheduleIndustrializationV)
<div class="tab-pane fade" id=day04 role=tabpanel aria-labelledby=day04-tab>
<div class=table-responsive>
<table class="table table-striped font-size-5 mb-0">
    <thead>
        <tr class="font-size-6 text-secondary">
            <th scope=col>Horário</th>
            <th scope=col>Programa</th>
            <th scope=col>Responsável</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ScheduleIndustrializationV as $item)
            <tr>
                <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                    {{ date('H:i', strtotime($item->end)) }}</td>
                <td> {!! html_entity_decode($item->program) !!} </td>
                <td> {!! html_entity_decode($item->responsible) !!}</td>

            </tr>
        @endforeach

    </tbody>
</table>
</div>
</div>
@endif


</div>
</div>
</div>
</div>
</section>
