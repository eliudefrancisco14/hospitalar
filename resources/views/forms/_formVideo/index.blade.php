<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.video.index') }}"><i class="bx bx-link-alt me-1"></i>
                    Lista</a>
            </li>
        </ul>
        <div class="card mb-4">
            <hr class="my-0" />
            <div class="card-body">
                <div class="row">

                    <div class="form-group col-md-8">
                        <label for="title" class="form-label">Titulo</label>
                        <input type="text" name="title" id="title" value="{{ isset($data->title) ? $data->title : old('title') }}"
                            class="form-control" placeholder="Titulo do vídeo" required>
                    </div>

                    <div class="form-group mb-3 col-md-4">
                        <div class="form-group">
                            <label for="date" class="form-label">Data de gravação</label>
                            <input type="date" name="date" id="date" value="{{ isset($data->date) ? $data->date : old('date') }}"
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group mb-3 col-md-12">
                        <div class="form-group">
                            <label for="link" class="form-label">Link do vídeo <small>link do canal do <a href="https://www.youtube.com/@digitalao1552" target="_blank">Youtube</a></small></label>
                            <input type="text" name="link" id="link" value="{{ isset($data->link) ? $data->link : "https://www.youtube.com/embed/" }}"
                                class="form-control" placeholder="Ex: https://www.youtube.com/watch?v=RQGlYwMDq_0" required>
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Detalhe da informação do vídeo</label>
                        <textarea class="form-control" type="text" id="description" name="description">{{ isset($data->description) ? $data->description : old('description') }}</textarea>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
