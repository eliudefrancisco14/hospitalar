<!-- /.col -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ isset($signup->name) ? $signup->name : old('name') }}"
            class="form-control" placeholder="Nome" required>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="surname">Apelido</label>
        <input type="text" name="surname" id="surname"
            value="{{ isset($signup->surname) ? $signup->surname : old('surname') }}" class="form-control"
            placeholder="Apelido" required>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="idcard">Passaporte</label>
        <input type="text" name="idcard" id="idcard"
            value="{{ isset($signup->idcard) ? $signup->idcard : old('idcard') }}" class="form-control"
            placeholder="Passaporte" required>
    </div>
</div> 



<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="idcard">Data de Emissão</label>
        <input type="date" name="IssueDate" id="idcard"
            value="{{ isset($signup->IssueDate) ? $signup->IssueDate : old('IssueDate') }}" class="form-control"
            placeholder="Passaporte" required>
    </div>
</div> 

<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="idcard">Data de Expiração</label>
        <input type="date" name="ExpirationDate" id="ExpirationDate"
            value="{{ isset($signup->ExpirationDate) ? $signup->ExpirationDate : old('ExpirationDate') }}" class="form-control"
            placeholder="Passaporte" required>
    </div>
</div> 
<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="gender">Gênero</label>
     
        <select name="gender" id="gender" class="form-control" required>
            <option value="" disabled selected>Selecione o gênero</option>

            <option value="Masculino">Masculino</option>
            <option value="Femenino">Feminino</option>

        </select>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="country">Nacionalidade/País</label>
        <select name="country" class="form-control" id="country" required>
            <option value="" disabled selected>Selecione o seu País</option>
            @include('extra._nacionality.index')
        </select>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="function">Função</label>
        <input type="text" name="function" id="function"
            value="{{ isset($signup->function) ? $signup->function : old('function') }}" class="form-control"
            placeholder="Função" required>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="organization">Organização</label>
        <input type="text" name="organization" id="organization"
            value="{{ isset($signup->organization) ? $signup->organization : old('organization') }}"
            class="form-control" placeholder="Organização" required>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="birthday">Data de Nascimento</label>
        <input type="date" name="birthday" id="birthday"
            value="{{ isset($signup->birthday) ? $signup->birthday : old('birthday') }}" class="form-control"
            placeholder="Data de Nascimento" required>
    </div>
</div> <!-- /.col -->



<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email"
            value="{{ isset($signup->email) ? $signup->email : old('email') }}" class="form-control"
            placeholder="E-mail" required>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="category">Categoria</label>
        <select type="category" name="category" id="category" class="form-control" required>

            <option value="">Selecione a categoria</option>
            <option value="DELEGADO">DELEGADO</option>
            <option value="PROTOCOLO">PROTOCOLO</option>

            <option value="PESSOAL/STAFF">PESSOAL/STAFF</option>
            <option value="TRANSPORTE">TRANSPORTE</option>
            <option value="IMPRENSA">IMPRENSA</option>
     
            <option value="SEGURANÇA">SEGURANÇA</option>
     
            <option value="SECRETARIADO">SECRETARIADO</option>
            <option value="ALOJAMENTO">ALOJAMENTO</option>
        </select>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-6 col-lg-12">
    <div class="form-group">
        <label for="obs">Observação
        </label>
        <input type="text" name="obs" id="obs"
            value="{{ isset($signup->obs) ? $signup->obs : old('obs') }}" class="form-control"
            placeholder="Observação" >
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-12">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label" for="photo">Fotografia de Identificação</label>
            <input type="file" class="form-control" name="photo" value="{{ old('photo') }}" id="photo">
            <small class="text-danger">
                Extensões Permitidas: jpg, png, jpeg <br>
                Foto do Tipo: 45X45, 35X35 - Tamanho Máximo: 1MB
            </small>
        </div>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-12">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label" for="annexPdf">Anexo do Passaporte</label>
            <input required type="file" class="form-control" name="annexPdf" value="{{ old('annexPdf') }}" id="annexPdf">
            <small class="text-danger">
                Extensões Permitidas: PDF <br>
  
            </small>
        </div>
    </div>
</div> <!-- /.col -->
<div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
    <div class="col-12 col-md-6 col-lg-6">
        {!! RecaptchaV3::field('register') !!}
        @if ($errors->has('g-recaptcha-response'))
            <span class="help-block">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
        @endif
    </div>
</div>
