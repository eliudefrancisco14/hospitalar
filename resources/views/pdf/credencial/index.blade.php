<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pass/bootstrap.min.css">

    <title>Credenciamento - {{ $signup->code }}</title>
    <style>
        * {
            padding: 0;
            margin: 5px 0px 0 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        #footer {
            padding-top: 10px;
            padding-bottom: 0px;
            position: fixed;
            bottom: 1px;
            width: 100%;

        }
    </style>
</head>

<body style='height:auto; width:100%; background-color: #fff; margin-left: -15px'>
    <div class="container-fluid">
        <header class="col-12 text-center" style="margin-left: 30px">
            <img src="dashboard/img/Imagem1.png" width="105%" alt="">

        </header>
        <div class="row">

            <div class="col-xs-12"
                style="border-top: 10px solid {{ $color }}; border-bottom: 10px solid {{ $color }}; background-color: {{$background}};">

                <h1 class="text-center" style="font-size: 35;font-weight: bold; color:{{ $color }};">
                    {{ strtoupper($signup->category) }}</h1>

            </div>

        </div>

        <div class="row">
            <div class="col-xs-6 text-center">
                <img src="data:image/png;base64,{!! base64_encode($qrcode) !!}">
            </div>

            <div class="col-xs-6 text-left">

                <img src="storage/{{ $signup->photo }}" width="150px">
            </div>
        </div>

        <footer class="col-12" style="background-color: #000;" id="footer">

            <h5 class="text-center" style="font-weight: bold; color:#fff">
                <b>{{ strtoupper($signup->name) . ' ' . strtoupper($signup->surname) }}</b>
            </h5>

        </footer>
    </div>


</body>

</html>
