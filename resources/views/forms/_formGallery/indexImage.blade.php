        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.gallery.create') }}"><i
                                class="bx bx-user me-1"></i> Criar titulo de galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.gallery.index') }}"><i
                                class="bx bx-link-alt me-1"></i>
                            Lista</a>
                    </li>
                </ul>
                <div class="card mb-4">
                    <hr class="my-0" />

                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">

                            <img src="{{ asset('storage') }}/main_galleryPage/{{ $img['image'] }}" alt="user-avatar" class="d-block rounded"
                                height="100" width="100" id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <input id="infile" name="image" type="file" value="{{ isset($img->image) ? $img->image : old('image') }}"></input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
