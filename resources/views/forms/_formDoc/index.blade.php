<div class="col-md-12">
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ isset($doc->title) ? $doc->title : old('title') }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-12">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="doc">Selecione o documento</label>
            <input type="file" class="form-control" name="doc" value="{{ old('doc') }}" id="doc">
            <small class="text-danger">Extensões Permitidas: pdf, doc,docx, ppt e pptx</small>
        </div>
    </div>
</div> <!-- /.col -->
