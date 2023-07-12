@extends('layouts.merge.site')
@section('titulo', 'Covid-19 ')
@section('content')
    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Covid-19 </h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')
        <section class="container">
            <div class="row py-5 my-5">

                <div class="col-md-12">
                    <p class="text-justify">
                        <b>Como parte das medidas governamentais para conter a propagação da COVID-19, as seguintes medidas
                            são obrigatórias:</b> <br>

                    <ul class="text-justify">
                        <li class="mt-4">
                            De acordo com à Gestão administrativa da pandemia da COVID-19 em Angola,  e o ARTIGO 2º
                            referente ao Controlo Sanitário das Fronteiras  do Decreto Presidencial n.º 98/23 de 14  de
                            Abril, seguem as medidas:

                        </li><br>
                        <b>ENTRADA NO PAÍS (ANGOLA):</b>
                        <li class="mt-4">

                            <b> Passo 1</b> - As entradas no território nacional estão dependentes da apresentação de
                            Certificado de Vacinação que ateste a imunização completa ou, em alternativa, da apresentação de
                            teste do Vírus SARS-CoV-2, de tipo RT-PCR, com resultado negativo, efectuado nas 48 horas
                            anteriores à viagem.<br><br>


                        </li>
                        <li class="mt-4">
                            <b> Passo 2</b> Exceptuam-se do disposto nos números anteriores, os menores de 12 anos estão
                            isentos de apresentação de certificado de Vacinação ou de teste nas entradas e saídas do País.

                        </li>

                        <li class="mt-4">
                            <b>Passo 3</b> As saídas do território nacional estão dependentes da apresentação de Certificado
                            de vacinação que ateste a imunização completa, sem prejuízo de formalidades adicionais exigidas
                            pelo país de destino.
                        </li>



                        <li class="mt-4">
                            <b>Passo 4</b> Nos casos em que o país de destino, trânsito ou a companhia transportadora o
                            exija, é obrigatório a apresentação de teste do Vírus SARS-CoV-2, de tipo RT-PCR, com resultado
                            negativo, efectuado nas 48 horas anteriores à viagem de saída do País.
                        </li>



                    </ul>

                    <b>TESTE DE REGRESSO DOS DELEGADOS :</b> <br>

                    <li class="mt-4">
                        O local de colheita de amostras para COVID-19 para o regresso dos participantes será nas unidades
                        hoteleiras onde estarão hospedados os delegados. Equipa estará em cada hotel para proceder a
                        colheita de amostras. Os testes para os delegados são grátis, bastando apenas apresentação do
                        comprovativo de inscrição.
                    </li><br>
                    <b>CERTIFICADO DE VACINAÇÃO DA FEBRE AMARELA</b>
                    </p>

                    <li class="mt-4">
                    Quanto a <b>Febre-amarela</b>, salienta-se que, apesar de que a vacina ser obrigatória segundo o Regulamento
                    Sanitário Internacional da OMS, nenhum membro de delegação será impedido de entrar no país por este
                    facto e criar-se-á soluções excepcionais.
                    </li>


                </div>

            </div>
        </section>


    </main>

@endsection
