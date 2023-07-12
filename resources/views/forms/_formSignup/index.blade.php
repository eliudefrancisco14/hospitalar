<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="idcard">Passaporte/Bilhete de Identidade</label>
        <input type="text" name="idcard" id="idcard"
            value="{{ isset($signup->idcard) ? $signup->idcard : old('idcard') }}" class="form-control"
            placeholder="Passaporte/Bilhete de Identidade" required>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="name">Nome Completo</label>
        <input type="text" name="name" id="name"
            value="{{ isset($signup->name) ? $signup->name : old('name') }}" class="form-control" placeholder="Nome"
            required>
    </div>
</div> <!-- /.col -->


<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="organization">Ministério/Direcção/Instituição</label>
        <input type="text" name="organization" id="organization"
            value="{{ isset($signup->organization) ? $signup->organization : old('organization') }}"
            class="form-control" placeholder="Ministério/Direcção/Instituição" required>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="email">Título</label>
        <input type="text" name="function" id="function"
            value="{{ isset($signup->function) ? $signup->function : old('function') }}" class="form-control"
            placeholder="Título" required>
    </div>
</div> <!-- /.col -->


<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="country">País</label>
        <select name="country" class="form-control" id="country" required>
            @if (isset($signup->country))
                <option value="{{ $signup->country }}" class="text-primary h6" selected>
                    {{ $signup->country }}
                </option>
            @else
                <option value="" disabled selected>Selecione o seu País</option>
            @endif
            @include('extra._nacionality.index')
        </select>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="category">Categoria</label>
        <select type="category" name="category" id="category" class="form-control" required>
            @if (isset($signup->category))
                <option value="{{ $signup->category }}" class="text-primary h6" selected>
                    {{ $signup->category }}
                </option>
            @else
                <option value="">Selecione a Categoria</option>
            @endif
            <option value="Imprensa e comunicação">Imprensa e comunicação</option>
            <option value="Apoio">Apoio</option>
            <option value="Organização">Organização</option>
            <option value="Segurança">Segurança</option>
            <option value="Serviços">Serviços</option>
            <option value="Auxiliares (Técnico, Logística)">Auxiliares (Técnico, Logística)</option>
            <option value="Artistas">Artistas</option>
            <option value="Delegado">Delegado</option>
            <option value="Moderador">Moderador</option>
            <option value="Orador">Orador</option>
            <option value="Participante/Perito">Participante/Perito</option>
            <option value="Secretariado">Secretariado</option>
            <option value="Expositor">Expositor</option>
            @if (isset($signup->category))
                <option value="IMPRENSA">IMPRENSA</option>
                <option value="CERIMONIAL">CERIMONIAL</option>
            @endif
        </select>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"
            value="{{ isset($signup->email) ? $signup->email : old('email') }}" class="form-control"
            placeholder="E-mail" required>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="email_confirmation">Confirmar Email</label>
        <input type="email" name="email_confirmation" id="email_confirmation"
            value="{{ isset($signup->email) ? $signup->email : old('email') }}" class="form-control"
            placeholder="E-mail" required>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="tel">Telefone</label>
        <input type="text" name="tel" id="tel"
            value="{{ isset($signup->tel) ? $signup->tel : old('tel') }}" class="form-control" placeholder="Telefone"
            required>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-4 col-lg-4">
    <div class="form-group">
        <label for="startDate">Data de Chegada</label>
        <input type="date" name="startDate" id="startDate"
            value="{{ isset($signup->startDate) ? $signup->startDate : old('startDate') }}" class="form-control"
            placeholder="Data de Chegada" required>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-4 col-lg-4">
    <div class="form-group">
        <label for="endDate">Data de Partida</label>
        <input type="date" name="endDate" id="endDate"
            value="{{ isset($signup->endDate) ? $signup->endDate : old('endDate') }}" class="form-control"
            placeholder="Data de Chegada" required>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-4 col-lg-4">
    <div class="form-group">
        <label for="evento">Escolha o Evento à Participar</label>
        <select type="evento" name="evento" id="evento" class="form-control" required>
            @if (isset($signup->evento))
                <option value="{{ $signup->evento }}" class="text-primary h6" selected>
                    {{ $signup->evento }}
                </option>
            @else
                <option value="">Selecione o evento</option>
            @endif
            <option value="7ª Semana da Industrialização da SADC">7ª Semana da Industrialização da SADC</option>
            <option value="43ª Cimeira de Chefes de Estado e de Governo da SADC">43ª Cimeira de Chefes de Estado e de
                Governo da SADC</option>
            <option value="Ambos">Ambos</option>
        </select>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label" for="photo">Dados Biográficos do Passaporte</label>
            <input type="file" class="form-control" name="photoBI" value="{{ old('photoBI') }}" id="photo">
            <small class="text-danger">
                Insira Dados Biográficos do Passaporte
            </small> <br><br>
            <small class="text-danger">
                Extensões Permitidas: jpg, png, jpeg,pdf || Tamanho Máximo: 1MB
                <br>
            </small>



        </div>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label" for="photo">Fotografia de Identificação <small>(A foto precisa estar no
                    modelo abaixo)</small></label>
            <input type="file" class="form-control" name="photo" value="{{ old('photo') }}" id="photo">
            <small class="text-danger">
                Insira uma fotografia do tipo "passe", actualizada e colorida para que sua inscrição seja Aprovada.
                A fotografia será utilizada para Impressão do Credencial de Identificação.
            </small> <br><br>
            <small class="text-danger">
                Extensões Permitidas: jpg, png, jpeg || Tamanho Máximo: 1MB
                <br>
            </small>


            <img src="/site/images/modelphoto.jpg" width="100%">
        </div>
    </div>
</div> <!-- /.col -->

@if (isset($signup->status))
    <div class="col-12 col-md-6 col-lg-4">
        <div class="form-group">
            <label for="status">ESTADO</label>
            <select type="status" name="status" id="status" class="form-control" required>
                @if (isset($signup->status))
                    <option value="{{ $signup->status }}" class="text-primary h6" selected>
                        {{ $signup->status }}
                    </option>
                @else
                    <option value="">Selecione o Estado</option>
                @endif
                <option value="RECEBIDO">RECEBIDO</option>
                <option value="APROVADO">APROVADO</option>

                @if ('USP' == Auth::user()->level)
                    <option value="RECUSADO">RECUSADO</option>
                @endif


            </select>
        </div>
    </div> <!-- /.col -->
@endif

<div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
    <div class="col-12 col-md-6 col-lg-12">
        {!! RecaptchaV3::field('register') !!}
        @if ($errors->has('g-recaptcha-response'))
            <span class="help-block">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
        @endif
    </div>
</div>
