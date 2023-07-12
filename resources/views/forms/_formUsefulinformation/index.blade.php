
<div class="col-12 col-md-6 col-lg-12">
    <div class="form-group">
        <label for="idcard">Titulo</label>
        <input type="text" name="idcard" id="idcard"
            value="{{ isset($signup->idcard) ? $signup->idcard : old('idcard') }}" class="form-control"
            placeholder="Titulo" required>
    </div>
</div> <!-- /.col -->
<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo da Informação</h5>
            <p>Digite o corpo do restaurante</p>
            <!-- Create the editor container -->
            <textarea name="body" id="editor1" style="min-height:300px; min-width:100%">
       {{ isset($hospitalDocument->body) ? $hospitalDocument->body : '' }}
        </textarea>
        </div>
    </div>
</div>
