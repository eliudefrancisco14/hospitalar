<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Inscritos-{{ date('d-m-Y') }}</title>
</head>
<body style='height:auto; width:50%; background: url("") no-repeat center;'>
    <header class="col-12 mt-2 mb-5">
        <img src="site/images/Logo_AZUL.png" alt="" width="200">
        <p>
           <h2 class="text-center">Lista de Inscritos </h2>
           <b>Total de Inscrições:</b> {{ $signup }}<br>
        <b>Data:</b> {{ date('d-m-Y') }}
        
        </p>
    </header>
    <section class="col-12">
        <table class="table table-striped-columns">
            <thead>
                <tr class="text-center">
                    <th>Código</th>
                    <th>Passaporte/BI</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th> País</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Categoria</th>
                    <th>Organização</th>
                    <th>Função</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $signups as $item )
        <tr>  
            <td><span class="font-16">{{ $item->code }}</span></td>
            <td><span class="font-16">{{ $item->idcard }}</span></td>
            <td><span > {{ $item->name." ".$item->surname  }}</span></td>
            <td><span class="font-16">{{ date('d-m-Y', strtotime($item->birthday)) }}</span></td>
            <td><span class="font-16">{{ $item->country }}</span></td>
            <td><span class="font-16">{{ $item->tel }}</span></td>
            <td><span class="font-16">{{ $item->email }}</span></td>
            <td><span class="font-16">{{ $item->category }}</span></td>
            <td><span class="font-16"> {{ $item->organization }}</span></td>
            <td><span class="font-16"> {{ $item->function }}</span></td>
        </tr>
        @endforeach

            </tbody>
        </table>
    </section>


</body>


</html>