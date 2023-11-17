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

        <form action="{{ route('site.pacient.store') }}" method="post" role="form" class="php-email-form p-5 rounded shadow">

          @csrf

          <div class="section-title">
            <h2>Informações Pessoais</h2>
          </div>

          <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />

          <div class="row">
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <label for="nomeCompleto">Nome Completo:</label>
              <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" required>
            </div>
            <div class="col-md-4 form-group">
              <label for="dataNascimento">Data de Nascimento:</label>
              <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
            </div>
            <div class="col-md-4 form-group">
              <label for="morada">Morada:</label>
              <input type="text" class="form-control" id="morada" name="morada" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 form-group">
              <label for="peso">Peso:</label>
              <input type="text" class="form-control" id="peso" name="peso">
            </div>

            <div class="col-md-6 form-group mt-3 mt-md-0">
              <label for="altura">Altura:</label>
              <input type="text" class="form-control" id="altura" name="altura">
            </div>

          </div>

          <div class="section-title mt-5">
            <h2>Informações Adicionais</h2>
          </div>

          <div class="row">
            <div class="col-md-6 form-group">
              <label>Sintomas:</label>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="tosse" name="sintomas" value="Tosse">
                <label class="form-check-label" for="tosse">Tosse</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="gripe" name="sintomas" value="Tosse">
                <label class="form-check-label" for="gripe">Gripe</label>
              </div>
              <!-- Adicione mais checkboxes conforme necessário -->
            </div>
            <div class="col-md-6 form-group">
              <label>Histórico:</label>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="malaria" name="historico" value="Malaria">
                <label class="form-check-label" for="malaria">Malaria</label>
              </div>
              <!-- Adicione mais checkboxes conforme necessário -->
            </div>

            <!-- Checkbox: Condições Médicas -->
            <div class="col-md-6 form-group">
              <label>Condições Médicas:</label>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="fezesClaras" name="condicoesMedicas"
                value="Fezes Claras">
                <label class="form-check-label" for="fezesClaras">Fezes Claras</label>
              </div>
              <!-- Adicione mais checkboxes conforme necessário -->
            </div>
            
            <!-- Checkbox: Estado Físico -->
            <div class="col-md-6 form-group">
              <label>Estado Físico:</label>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="adolescente" name="estadoFisico"
                value="Adolescente">
                <label class="form-check-label" for="adolescente">Adolescente</label>
              </div>
              <!-- Adicione mais checkboxes conforme necessário -->
            </div>
            
          </div>
          <div class="row mt-3">
            <!-- Select: Está sob alguma medicação? -->
            <div class="col-md-6 form-group">
              <label for="medicacao">Está sob alguma medicação?</label>
              <select class="form-control" id="medicacao" name="medicacao">
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
              </select>
            </div>

            <!-- Select: Gravidade dos Sintomas -->
            <div class="col-md-6 form-group">
              <label for="gravidade">Gravidade dos Sintomas:</label>
              <select class="form-control" id="gravidade" name="gravidade">
                <option value="Leve">Leve</option>
                <option value="Médio">Médio</option>
                <option value="Grave">Grave</option>
              </select>
            </div>

          </div>

          <!-- Select: Doenças Crônicas -->
          <div class="form-group mt-3">
            <label for="doencasCronicas">Doenças Crônicas:</label>
            <select class="form-control" id="doencasCronicas" name="doencasCronicas" multiple>
              <option value="Diabetes Mellitus">Diabetes Mellitus</option>
              <option value="Diabetes Mellitus">Hipertensão Arterial</option>
              <option value="Diabetes Mellitus">Doença Cardíaca Coronariana</option>
              <option value="Diabetes Mellitus">Insuficiência Renal Crônica</option>
              <option value="Diabetes Mellitus">Asma</option>
              <option value="Diabetes Mellitus">Doença Pulmonar Obstrutiva Crônica (DPOC)</option>
              <option value="Diabetes Mellitus">Artrite Reumatoide</option>
              <option value="Diabetes Mellitus">Doença de Crohn</option>
              <option value="Diabetes Mellitus">Colite Ulcerativa</option>
              <option value="Diabetes Mellitus">HIV/AIDS</option>
              <option value="Diabetes Mellitus">Esclerose Múltipla</option>
              <option value="Diabetes Mellitus">Doença Hepática Crônica</option>
              
            </select>
          </div>

          <!-- Textarea: Mais Informações -->
          <div class="form-group mt-3">
            <label for="maisInformacoes">Mais Informações:</label>
            <textarea class="form-control" id="maisInformacoes" name="maisInformacoes" rows="3"></textarea>
          </div>

          <div class="text-center"><button type="submit">Enviar Formulário</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->


</main><!-- End #main -->


@endsection


