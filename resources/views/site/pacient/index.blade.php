@extends('layouts.merge.site')
@section('title', 'Assistente hospitalar')
@section('content')


    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Iniciar Consulta</h2>
                </div>
            </div>

            <div class="container">
                <div class="row mt-0">

                    <div class="col-lg-12 mt-5 mt-lg-0 rounded">
                        @include('errors.form')
                        <form action="{{ route('site.pacient.store') }}" method="post" role="form"
                            class="php-email-form p-5 rounded shadow">
                            @csrf
                            <div class="section-title">
                                <h2>Informações Pessoais</h2>
                            </div>

                            <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />

                            <div class="row">
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="nomeCompleto"> <b> Nome Completo: <span style="color: red">*</span></b></label>
                                    <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" placeholder="Informe o seu Nome"
                                        value="{{ old('nomeCompleto') }}" required>
                                </div>
                                

                                <div class="col-md-6 form-group">
                                    <label for="morada"> <b> Morada: <span style="color: red">*</span></b></label>
                                    <input type="text" class="form-control" id="morada" name="morada" placeholder="Informe a sua Morada"
                                        value="{{ old('morada') }}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="dataNascimento"> <b> Idade: <span style="color: red">*</span></b></label>
                                    <input type="number" class="form-control" id="dataNascimento" name="dataNascimento" placeholder="Informe a sua Idade "
                                        value="{{ old('dataNascimento') }}" required>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="peso"> <b> Peso: <span style="color: red">*</span></b></label>
                                    <input type="number" step="0.01" class="form-control" id="peso" value="{{ old('peso') }}" placeholder="Informe o seu Peso"
                                        name="peso">
                                </div>

                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="altura"> <b> Altura: <span style="color: red">*</span></b></label>
                                    <input type="number" step="0.01" class="form-control" id="altura" value="{{ old('altura') }}" placeholder="Informe a sua Altura"
                                        name="altura">
                                </div>

                            </div>

                            <div class="section-title mt-5">
                                <h2>Informações Adicionais</h2>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label> <b> Sintomas:<span style="color: red">*</span></b></label>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="tosse" name="sintomas[]"
                                            value="Tosse">
                                        <label class="form-check-label" for="tosse">Tosse</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="gripe" name="sintomas[]"
                                            value="Gripe">
                                        <label class="form-check-label" for="gripe">Gripe</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Nauseas" name="sintomas[]"
                                            value="Náuseas">
                                        <label class="form-check-label" for="Nauseas">Náuseas</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Fadigas" name="sintomas[]"
                                            value="Fadigas">
                                        <label class="form-check-label" for="Fadigas">Fadigas</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Vomitos" name="sintomas[]"
                                            value="Vomitos">
                                        <label class="form-check-label" for="Vomitos">Vomitos</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Desmaios" name="sintomas[]"
                                            value="Desmaios">
                                        <label class="form-check-label" for="Desmaios">Desmaios/Tonturas</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Fraquezas" name="sintomas[]"
                                            value="Fraquezas">
                                        <label class="form-check-label" for="Fraquezas">Fraquezas</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="FebreAlta" name="sintomas[]"
                                            value="Febre Alta">
                                        <label class="form-check-label" for="FebreAlta">Febre Alta</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="peito" name="sintomas[]"
                                            value="Dor no peito">
                                        <label class="form-check-label" for="peito">Dor no peito</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Falta" name="sintomas[]"
                                            value="Falta de ar">
                                        <label class="form-check-label" for="Falta">Falta de ar</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Cabeca" name="sintomas[]"
                                            value="Dor de Cabeça">
                                        <label class="form-check-label" for="Cabeca">Dor de Cabeça</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Calafrios" name="sintomas[]"
                                            value="Calafrios">
                                        <label class="form-check-label" for="Calafrios">Calafrios</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="UrinaEscura"
                                            name="sintomas[]" value="Urina escura">
                                        <label class="form-check-label" for="UrinaEscura">Urina escura</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="FebreBaixa"
                                            name="sintomas[]" value="Febre baixa">
                                        <label class="form-check-label" for="FebreBaixa">Febre baixa</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Hemorragias"
                                            name="sintomas[]" value="Hemorragias">
                                        <label class="form-check-label" for="Hemorragias">Hemorragias</label>
                                    </div>


                                </div>
                                <div class="col-md-6 form-group">
                                    <label> <b> Histórico:<span style="color: red">*</span></b></label>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="malaria"
                                            name="historico[]" value="Malaria">
                                        <label class="form-check-label" for="malaria">Malaria</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Diarreia"
                                            name="historico[]" value="Diarreia">
                                        <label class="form-check-label" for="Diarreia">Diarreia</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Colera"
                                            name="historico[]" value="Cólera">
                                        <label class="form-check-label" for="Colera">Cólera</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="HIV"
                                            name="historico[]" value="HIV">
                                        <label class="form-check-label" for="HIV">HIV</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="FebreAmarela"
                                            name="historico[]" value="Febre Amarela">
                                        <label class="form-check-label" for="FebreAmarela">Febre Amarela</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="FebreTefoide"
                                            name="historico[]" value="Febre Tefóide">
                                        <label class="form-check-label" for="FebreTefoide">Febre Tefóide</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Pneumonia"
                                            name="historico[]" value="Pneumonia">
                                        <label class="form-check-label" for="Pneumonia">Pneumonia</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Doencasdiarreicas"
                                            name="historico[]" value="Doenças diarreicas">
                                        <label class="form-check-label" for="Doencasdiarreicas">Doenças diarreicas</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Outros"
                                            name="historico[]" value="Outros">
                                        <label class="form-check-label" for="Outros">Outros</label>
                                    </div>

                                    <!-- Adicione mais checkboxes conforme necessário -->
                                </div>
                                <br>
                                <!-- Checkbox: Condições Médicas -->
                                <div class="col-md-6 form-group">
                                    <label> <b> Condições Médicas:<span style="color: red">*</span></b></label>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="fezesClaras"
                                            name="condicoesMedicas[]" value="Fezes Claras">
                                        <label class="form-check-label" for="fezesClaras">Fezes Claras</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="PercadePesoinexplicável"
                                            name="condicoesMedicas[]" value="Perca de Peso inexplicável">
                                        <label class="form-check-label" for="PercadePesoinexplicável">Perca de Peso
                                            inexplicável</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Amarelamentodapeleeolhos"
                                            name="condicoesMedicas[]" value="Amarelamento da pele e olhos">
                                        <label class="form-check-label" for="Amarelamentodapeleeolhos">Amarelamento da
                                            pele e olhos</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="SuoresNocturnos"
                                            name="condicoesMedicas[]" value="Suores Nocturnos">
                                        <label class="form-check-label" for="SuoresNocturnos">Suores Nocturnos</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Colicasabdominais"
                                            name="condicoesMedicas[]" value="Cólicas abdominais">
                                        <label class="form-check-label" for="Colicasabdominais">Cólicas abdominais</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Tossecomsangue"
                                            name="condicoesMedicas[]" value="Tosse com sangue">
                                        <label class="form-check-label" for="Tossecomsangue">Tosse com sangue</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Inchaconospesoupernas"
                                            name="condicoesMedicas[]" value="Inchaço nos pés ou pernas">
                                        <label class="form-check-label" for="Inchaconospesoupernas">Inchaço nos pés ou
                                            pernas</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Palpitacao"
                                            name="condicoesMedicas[]" value="Palpitação">
                                        <label class="form-check-label" for="Palpitacao">Palpitação</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Outros"
                                            name="condicoesMedicas[]" value="Outros">
                                        <label class="form-check-label" for="Outros">Outros</label>
                                    </div>

                                </div>


                            </div>
                            <div class="row mt-3">
                                <!-- Select: Está sob alguma medicação? -->
                                <div class="col-md-6 form-group">
                                    <label for="medicacao"> <b> Está sob alguma medicação?<span style="color: red">*</span></b></label>
                                    <select class="form-control" id="medicacao" name="medicacao">
                                        <option value="Sim">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>

                                <!-- Select: Gravidade dos Sintomas -->
                                <div class="col-md-6 form-group">
                                    <label for="gravidade"> <b> Gravidade dos Sintomas:<span style="color: red">*</span></b></label>
                                    <select class="form-control" id="gravidade" name="gravidade">
                                        <option value="Leve">Leve</option>
                                        <option value="Médio">Médio</option>
                                        <option value="Grave">Grave</option>
                                    </select>
                                </div>

                            </div>

                            <!-- Select: Doenças Crônicas -->
                            <div class="form-group mt-3">
                                <label for="doencasCronicas"> <b> Doenças Crônicas:<span style="color: red">*</span></b></label>
                                <select class="form-control" id="doencasCronicas" name="doencasCronicas" multiple>
                                    <option value="Nenhuma" selected>Nenhuma</option>
                                    <option value="Diabetes Mellitus">Diabetes Mellitus</option>
                                    <option value="Hipertensão Arterial">Hipertensão Arterial</option>
                                    <option value="Doença Cardíaca Coronariana">Doença Cardíaca Coronariana</option>
                                    <option value="Insuficiência Renal Crônica">Insuficiência Renal Crônica</option>
                                    <option value="Asma">Asma</option>
                                    <option value="Doença Pulmonar Obstrutiva Crônica (DPOC)">Doença Pulmonar Obstrutiva
                                        Crônica (DPOC)</option>
                                    <option value="Artrite Reumatoide">Artrite Reumatoide</option>
                                    <option value="Doença de Crohn">Doença de Crohn</option>
                                    <option value="Colite Ulcerativa">Colite Ulcerativa</option>
                                    <option value="HIV/AIDS">HIV/AIDS</option>
                                    <option value="Esclerose Múltipla">Esclerose Múltipla</option>
                                    <option value="Doença Hepática Crônica">Doença Hepática Crônica</option>

                                </select>
                            </div>

                            <!-- Textarea: Mais Informações -->
                            <div class="form-group mt-3">
                                <label for="maisInformacoes"> <b> Mais Informações:</b></label>
                                <textarea class="form-control" id="maisInformacoes" name="maisInformacoes" placeholder="Informe mais detalhes" rows="8">{{ old('maisInformacoes') }}</textarea>
                            </div>

                            <div class="text-center"><button type="submit">Enviar Formulário</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->


    </main><!-- End #main -->


@endsection
