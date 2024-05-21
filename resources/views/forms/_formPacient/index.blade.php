        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <hr class="my-0" />
                    <div class="card-body">
                        <h3>{{ isset($data) ? 'Atualizar Usuário "' . $data->nomeCompleto . '"' : 'Cadastrar' }}</h3>
                        <hr>
                        <div class="row">
                            <!-- Account -->

                            <div class="section-title">
                                <h2>Informações Pessoais</h2>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="nomeCompleto"> <b> Nome Completo:</b></label>
                                    <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto"
                                        required value="{{ isset($data->nomeCompleto) ? $data->nomeCompleto : old('nomeCompleto') }}">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="dataNascimento"> <b> Data de Nascimento:</b></label>
                                    <input type="date" class="form-control" id="dataNascimento" name="dataNascimento"
                                        required
                                        value="{{ isset($data->dataNascimento) ? $data->dataNascimento : old('dataNascimento') }}">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="temperatura"> <b> Temperatura:</b></label>
                                    <input type="date" class="form-control" id="temperatura" name="temperatura"
                                        required
                                        value="{{ isset($data->temperatura) ? $data->temperatura : old('temperatura') }}">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="batimento"> <b> Batimento cardíacos:</b></label>
                                    <input type="date" class="form-control" id="batimento" name="batimento"
                                        required
                                        value="{{ isset($data->batimento) ? $data->batimento : old('batimento') }}">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="morada"> <b> Morada:</b></label>
                                    <input type="text" class="form-control" id="morada" name="morada" required
                                        value="{{ isset($data->morada) ? $data->morada : old('morada') }}">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="peso"> <b> Peso:</b></label>
                                    <input type="text" class="form-control" id="peso" name="peso"
                                        value="{{ isset($data->peso) ? $data->peso : old('peso') }}">
                                </div>

                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="altura"> <b> Altura:</b></label>
                                    <input type="text" class="form-control" id="altura" name="altura"
                                        value="{{ isset($data->altura) ? $data->altura : old('altura') }}">
                                </div>

                            </div>

                            <div class="section-title mt-5">
                                <h2>Informações Adicionais</h2>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label style="font-weight: bold"><b> Sintomas:</b></label>
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
                                        <input type="checkbox" class="form-check-input" id="FebreAlta"
                                            name="sintomas[]" value="Febre Alta">
                                        <label class="form-check-label" for="FebreAlta">Febre Alta</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="peito"
                                            name="sintomas[]" value="Dor no peito">
                                        <label class="form-check-label" for="peito">Dor no peito</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Falta"
                                            name="sintomas[]" value="Falta de ar">
                                        <label class="form-check-label" for="Falta">Falta de ar</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Cabeca"
                                            name="sintomas[]" value="Dor de Cabeça">
                                        <label class="form-check-label" for="Cabeca">Dor de Cabeça</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Calafrios"
                                            name="sintomas[]" value="Calafrios">
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
                                    <label><b>Histórico:</b></label>
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
                                        <label class="form-check-label" for="Doencasdiarreicas">Doenças
                                            diarreicas</label>
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
                                    <label><b>Condições Médicas:</b></label>
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
                                        <label class="form-check-label" for="Colicasabdominais">Cólicas
                                            abdominais</label>
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
                                    <label for="medicacao"><b>Está sob alguma medicação?</b></label>
                                    <select class="form-control" id="medicacao" name="medicacao">
                                        <option value="Sim" {{ isset($data->medicacao) && $data->medicacao == "Sim" ? 'selected' : '' }}>Sim</option>
                                        <option value="Não" {{ isset($data->medicacao) && $data->medicacao == "Não" ? 'selected' : '' }}>Não</option>
                                    </select>
                                </div>

                                <!-- Select: Gravidade dos Sintomas -->
                                <div class="col-md-6 form-group">
                                    <label for="gravidade"><b>Gravidade dos Sintomas:</b></label>
                                    <select class="form-control" id="gravidade" name="gravidade">
                                        <option value="Leve" {{ isset($data->gravidade) && $data->gravidade == "Leve" ? 'selected' : '' }}>Leve</option>
                                        <option value="Médio" {{ isset($data->gravidade) && $data->gravidade == "Médio" ? 'selected' : '' }}>Médio</option>
                                        <option value="Grave" {{ isset($data->gravidade) && $data->gravidade == "Grave" ? 'selected' : '' }}>Grave</option>
                                    </select>
                                </div>

                            </div>

                            <!-- Select: Doenças Crônicas -->
                            <div class="form-group mt-3">
                                <label for="doencasCronicas"><b>Doenças Crônicas:</b></label>
                                <select class="form-control" id="doencasCronicas" name="doencasCronicas" multiple>
                                    <option value="Nenhuma" selected>Nenhuma</option>
                                    <option value="Diabetes Mellitus">Diabetes Mellitus</option>
                                    <option value="Hipertensão Arterial">Hipertensão Arterial</option>
                                    <option value="Doença Cardíaca Coronariana">Doença Cardíaca Coronariana</option>
                                    <option value="Insuficiência Renal Crônica">Insuficiência Renal Crônica</option>
                                    <option value="Asma">Asma</option>
                                    <option value="Doença Pulmonar Obstrutiva Crônica (DPOC)">Doença Pulmonar
                                        Obstrutiva Crônica (DPOC)</option>
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
                                <label for="maisInformacoes"><b>Mais Informações:</b></label>
                                <textarea class="form-control" id="maisInformacoes" name="maisInformacoes" rows="8">{{ isset($data->maisInformacoes) ? $data->maisInformacoes : old('maisInformacoes') }}</textarea>
                            </div>

                        </div>
                        <div class="form-group col-md-4 mt-4">
                            <button type="submit"
                                class="btn btn-primary me-2">{{ isset($data) ? 'Atualizar' : 'Cadastrar' }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
