        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.user.create') }}"><i class="bx bx-user me-1"></i> Criar Conta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.user.index') }}"><i class="bx bx-link-alt me-1"></i>
                            Lista</a>
                    </li>
                </ul>
                <div class="card mb-4">
                    <h5 class="card-header">Detalhe do perfil</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="{{ url('dashboard/img/logo.svg') }}" alt="user-avatar" class="d-block rounded"
                                height="100" width="100" id="uploadedAvatar" />
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome completo</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    value="{{ isset($users->name) ? $users->name : old('name') }}"
                                    placeholder="Insira o nome completo" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control" type="text" id="email" name="email"
                                    value="{{ isset($users->email) ? $users->email : old('email') }}"
                                    placeholder="Insira o e-mail" />
                            </div>
                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="password">Senha</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="level" class="form-label">Nível de
                                    permissão</label>
                                <select id="level" class="select2 form-select" name="level">
                                    <option disabled>Selecionar o nível de permissão</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Utilizador">Utilizador</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /Account -->
                </div>
            </div>
        </div>
        </div>
        </div>
