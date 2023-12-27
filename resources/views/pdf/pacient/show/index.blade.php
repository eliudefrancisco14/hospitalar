<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <link href="/assets_dash/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dados do Paciente-{{ date('d/m/Y', strtotime(now())) }}</title>
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
            <img src="{{ asset('site/assets/img/logo.png') }}" alt="">
        </div>
        <div class="text-center">ASSISTENTE VIRTUAL</div>
        <div class="text-center">Dados do Paciente {{ $response['data']->nomeCompleto }} </div>
    </header>


    <main>
        <div class="main">
            @if ($response['data']->count() <= 0) <hr>
                <div class="text-center"> Não Existe nenhum Paciente registrado </div>
                @else
                <div class="row align-items-center mx-0">

                    <div class="col-lg-12 my-2 col-md-12 col-12">

                        <div class="card row align-items-center">
                            <div class="card-body">
                                <h3>Nome do Paciente: "{{ $response['data']->nomeCompleto }}"</h3>
                                <hr>
                                <div class="row mt-4">
                                    <table>
                                        <thead class="bg-primary text-dark">
                                            <tr class="text-center">
                                                <th style="width: 20%">Data de Nascimento</th>
                                                <th style="width: 20%">Peso</th>
                                                <th style="width: 20%">Altura</th>
                                                <th style="width: 20%">Morada</th>
                                                <th style="width: 20%">Medicação</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $response['data']->dataNascimento }}</td>
                                                <td>{{ $response['data']->peso }}</td>
                                                <td>{{ $response['data']->altura }}</td>
                                                <td>{{ $response['data']->morada }}</td>
                                                <td>{{ $response['data']->medicacao }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br />
                                    <table>
                                        <thead class="bg-primary text-dark">
                                            <tr class="text-center">
                                                <th style="width: 40%">Gravidade dos Sintomas</th>
                                                <th style="width: 60%">Sintomas</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $response['data']->gravidade }}</td>
                                                <td>{{ implode(', ', json_decode($response['data']->sintomas)) }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="col-md-3 mb-2">
                                        <h5 class="mb-1">
                                            <b>Histórico Médico</b>
                                        </h5>
                                        <p class="text-dark text-justify">{{ implode(', ', json_decode($response['data']->historico)) }}</p>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <h5 class="mb-1">
                                            <b>Condições Médicas</b>
                                        </h5>
                                        <p class="text-dark text-justify">{{ implode(', ', json_decode($response['data']->condicoesMedicas)) }}</p>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <h5 class="mb-1">
                                            <b>Doenças Crónicas</b>
                                        </h5>
                                        <p class="text-dark text-justify">{{ $response['data']->doencasCronicas }}</p>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <h4 class="mb-1">
                                            <b>Informações Adicionais</b>
                                        </h4>
                                        <p class="text-dark text-justify">{{ $response['data']->maisInformacoes }}</p>
                                    </div>

                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de cadastro:</b>
                                            {{ date('d-m-Y H:m', strtotime($response['data']->created_at)) }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Data de atualização:</b>
                                            {{ date('d-m-Y H:m', strtotime($response['data']->updated_at)) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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