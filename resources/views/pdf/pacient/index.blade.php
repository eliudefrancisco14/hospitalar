<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <link href="/assets_dash/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Postos-{{ date('d/m/Y', strtotime(now())) }}</title>
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            background: #ffffff;
            color: #1d1d1d;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        header {
            text-align: center;
            padding: 1.5rem;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="img">
            <img src="assets_dash/img/insignia.png" alt="">
        </div>
        <div class="text-center">REPÚBLICA DE ANGOLA</div>
        <div class="text-center">SISTEMA DE GEOLOCALIZAÇÃO DE POSTOS DE COMBUSTÍVEIS</div>
        <div class="text-center">LISTA DE POSTOS</div>
        <div class="text-center">EMPRESA "{{ $empresa }}"</div>
    </header>


    <main>
        <div class="main">
            @if ($postos->count() <= 0)
                <hr>
                <div class="text-center"> Não Existe nenhum Posto na Empresa "{{ $empresa }}"" </div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th class="text-left" scope="col">Nome</th>
                            <th class="text-left" scope="col">Endereço do Posto de Combustível</th>
                            <th scope="col">Gasolina</th>
                            <th scope="col">Gasóleo</th>
                            <th scope="col">Gestor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($postos as $item)
                        <tr class="text-center text-dark">
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $item->nome }}</td>
                            <td>{{ $item->endereco }}</td>

                            <td class="text-center">
                                    @if ($item->gas == 1)
                                    Tem
                                    @elseif($item->gas == 0)
                                    Não Tem
                                    @endif

                            </td>
                            <td class="text-center">

                                    @if ($item->gol == 1)
                                        Tem
                                    @elseif($item->gol == 0)
                                        Não tem
                                    @endif
                            </td>

                            <td class="text-center">
                                {{ $item->user()->first()->name }}
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>
    <hr class="pylarge bg-dark">
    <footer class="col-12 mt-2 text-center" id="footer">

        <small class="text-left text-dark">
            Documento Processado por Computador. <br>
        </small>
        <small class="text-right text-dark">
            Data de Processo: {{ date('d/m/Y H:i:s', strtotime(now())) }}
        </small>

    </footer>


</body>

</html>
