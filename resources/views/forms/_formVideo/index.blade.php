<div class="col-md-8">
    <div class="row">
    <div class="form-group col-md-6">
        <label for="title">Titulo do Video</label>
        <input type="text" name="title" id="title" value="{{ isset($video->title) ? $video->title : '' }}"
            class="form-control border-secondary" placeholder="Titulo do Video" required>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="date">Data de gravação do Video</label>
            <input type="date" name="date" id="date" value="{{ isset($video->date) ? $video->date : '' }}"
                class="form-control border-secondary" required>
        </div>
    </div> <!-- /.col -->

</div>
</div> <!-- /.col -->

<div class="col-md-12">
    <div class="form-group">
        <label for="link">Link do Video <small>link do canal do Youtube</small></label>
        <input type="text" name="link" id="link" value="{{ isset($video->link) ? $video->link : "https://www.youtube.com/embed/" }}"
            class="form-control border-secondary" placeholder="Ex: https://www.youtube.com/watch?v=RQGlYwMDq_0" required>
    </div>
</div> <!-- /.col -->
