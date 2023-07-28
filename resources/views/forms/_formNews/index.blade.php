        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <hr class="my-0" />
                    <div class="card-body">
                        <h3>{{ isset($data) ? 'Atualizar Noticia "' . $data->title . '"' : 'Cadastrar' }}</h3>
                        <hr>
                        <div class="row">

                            @isset($data)
                                <div class="col-12 col-lg-12">
                                    <div class="row align-items-center my-4">
                                        <div class="col">
                                            <h2 class="page-title">Capa Principal</h2>
                                        </div>
                                    </div>
                                    <div class="card-deck mb-3">

                                        <div class="card border-0 bg-transparent">
                                            <div class="card-img-top img-fluid rounded"
                                                style='background-image:url("/storage/{{ $data->path }}");background-position:center;background-size:cover;height:200px;width:250px;'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endisset

                            <div class="mb-3 col-md-8">
                                <div class="form-group">
                                    <label for="name" class="form-label">Título</label>
                                    <input class="form-control" type="text" id="title" name="title"
                                        value="{{ isset($data->title) ? $data->title : old('title') }}"
                                        placeholder="Informar o titulo" autofocus />
                                </div>
                            </div>

                            <div class="mb-1 col-md-4">
                                <div class="form-group">
                                    <label for="name" class="form-label">Data da notícia</label>
                                    <input type="date" name="date" id="date"
                                        value="{{ isset($data->date) ? $data->date : old('date') }}"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Autor da Matéria</label>
                                <input class="form-control" type="text" id="typewriter" name="typewriter"
                                    value="{{ isset($data->typewriter) ? $data->typewriter : old('typewriter') }}"
                                    placeholder="Informar o editor" />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Selecionar a capa</label>
                                <input class="form-control" id="infile" name="path" type="file"></input>
                            </div>

                            <div class="mb-4 col-md-12">
                                <h5 class="card-title">Corpo da Matéria</h5>
                                <p>Digite o corpo da matéria</p>
                                <!-- Create the editor container -->
                                <textarea name="body" id="editor1" style="min-height:300px; min-width:100%">
                                            {{ isset($data->body) ? $data->body : old('body') }}
                                        </textarea>
                            </div>

                            <div class="mb-3 col-md-12">
                                <button type="submit"
                                    class="btn btn-primary me-2">{{ isset($data) ? 'Atualizar' : 'Cadastrar' }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
