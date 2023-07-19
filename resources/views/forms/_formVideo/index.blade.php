<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.video.create') }}"><i
                        class="bx bx-user me-1"></i> Criar vídeo</a>
            </li>
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
                        <label for="title">Titulo</label>
                        <input type="text" name="title" id="title" value="{{ isset($data->title) ? $data->title : '' }}"
                            class="form-control" placeholder="Titulo do vídeo" required>
                    </div>

                    <div class="mb-1 col-md-4">
                        <div class="form-group">
                            <label for="date">Data de gravação do vídeo</label>
                            <input type="date" name="date" id="date" value="{{ isset($data->date) ? $data->date : '' }}"
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-1 col-md-12">
                        <div class="form-group">
                            <label for="link">Link do Vídeo <small>link do canal do Youtube</small></label>
                            <input type="text" name="link" id="link" value="{{ isset($data->link) ? $data->link : "https://www.youtube.com/embed/" }}"
                                class="form-control" placeholder="Ex: https://www.youtube.com/watch?v=RQGlYwMDq_0" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Detalhe de informação do vídeo</label>
                        <textarea class="form-control" type="text" id="description" name="description">{{ isset($data->description) ? $data->description : old('description') }}</textarea>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
