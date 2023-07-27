        <div class="row">
<<<<<<< HEAD
            <div class="col-md-12">
                <div class="card mb-4">
                    <hr class="my-0" />
=======

            <div class="col-md-12">
                <div class="card mb-4">
>>>>>>> dc02d32803cc136b65488620d78959472cfa730a
                    <div class="card-body">
                        <h3>{{ isset($data) ? 'Atualizar Usuário "' . $data->name . '"' : 'Cadastrar' }}</h3>
                        <hr>
                        <div class="row">
<<<<<<< HEAD
                            <!-- Account -->
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="{{ url('dashboard/img/logo.svg') }}" alt="user-avatar" class="d-block rounded"
                                    height="100" width="100" id="uploadedAvatar" />
                            </div>

=======
                            <h3>{{ isset($data) ? 'Atualizar Usuário "' . $data->name . '"' : 'Cadastrar' }}</h3>
                            <hr />
>>>>>>> dc02d32803cc136b65488620d78959472cfa730a
                            <div class="form-group col-md-4">
                                <label for="name" class="form-label">Nome completo</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    value="{{ isset($data->name) ? $data->name : old('name') }}"
                                    placeholder="Insira o nome completo" autofocus />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control" type="text" id="email" name="email"
                                    value="{{ isset($data->email) ? $data->email : old('email') }}"
                                    placeholder="Insira o e-mail" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="level" class="form-label">Nível de Acesso</label>
                                <select name="level" id="level" class="form-control" required>
                                    @if (isset($data->level))
                                        <option value="{{ $data->level }}" class="text-primary h6" selected>
                                            {{ $data->level }}
                                        </option>
                                    @else
                                        <option disabled selected>selecione o nivel de acesso</option>
                                    @endif

                                    @if (Auth::user()->level == 'Administrador')
                                        <option value="Administrador">Administrador</option>
                                        <option value="Editor">Editor</option>
                                    @endif

                                </select>
                            </div>

                            <hr class="my-4">
                            <div class="row mb-4">

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="form-label" for="password">Senha</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" name="password"
                                                placeholder="************" aria-describedby="password" />
                                            <span class="input-group-text cursor-pointer"><i
                                                    class="bx bx-hide"></i></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="password_confirmation">Confirmar
                                            Senha</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password_confirmation" class="form-control"
                                                name="password_confirmation" placeholder="************"
                                                aria-describedby="password_confirmation" />
                                            <span class="input-group-text cursor-pointer"><i
                                                    class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <b class="mb-2 text-dark">Requisítos de senhas</b>
                                    <p class="small text-dark mb-2"> Para criar uma nova senha, você deve atender a
                                        todos os seguintes requisitos:
                                    </p>
                                    <ul class="small text-dark pl-4 mb-0">
                                        <li>Mínimo 8 caracteres</li>
                                        <li>Caracteres maíusculas e mínusculas</li>
                                        <li>Pelo menos um número e caracter especial</li>
                                        <li>Não pode ser igual à senha anterior</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <button type="submit"
                                    class="btn btn-primary me-2">{{ isset($data) ? 'Atualizar' : 'Cadastrar' }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
