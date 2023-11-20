<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <link href="/assets_dash/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Pacientes-{{ date('d/m/Y', strtotime(now())) }}</title>
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
            <img src="{{ asset('site/assets/img/logo_branco_.svg') }}" alt="">
        </div>
        <div class="text-center">REPÚBLICA DE ANGOLA</div>
        <div class="text-center">ASSISTENTE VIRTUAL</div>
        <div class="text-center">LISTA DE PACIENTES</div>
    </header>


    <main>
        <div class="main">
            @if ($data->count() <= 0)
                <hr>
                <div class="text-center"> Não Existe nenhum Paciente registrado </div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th class="text-left" scope="col">Nome Completo</th>
                            <th class="text-left" scope="col">Data de Nascimento</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Altura</th>
                            <th scope="col">Morada</th>
                            <th scope="col">Medicação</th>
                            <th scope="col">Gravidade</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr class="text-center text-dark">
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $item->nomeCompleto }}</td>
                            <td>{{ $item->dataNascimento }}</td>
                            <td>{{ $item->peso }}</td>
                            <td>{{ $item->altura }}</td>
                            <td>{{ $item->morada }}</td>
                            <td>{{ $item->medicacao }}</td>
                            <td>{{ $item->gravidade }}</td>

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
