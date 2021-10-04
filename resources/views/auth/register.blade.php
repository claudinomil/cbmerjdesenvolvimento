<x-guest-layout>

    <div class="container">
        <div class="col-12 col-md-5 mx-auto" style="padding: 30px;">
            <div class="card" style="min-height: 550px; box-shadow: 0.4em 0.4em 1em 0.4em gray;">
                <div class="card-body" style="padding: 30px;">
                    <div class="text-center mb-5">
                        <img src="img/logo_bolacha.png" width="120">
                        <h4>Sistema de Administração e Controle</h4>
                        <h5 class="text-secondary">Registrar</h5>
                    </div>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-3" :errors="$errors" />

                    <!-- Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="row">
                            <label class="col-md-6" for="email">&nbsp;&nbsp;Nome</label>
                            <a href="{{ route('login') }}" class="text-secondary col-md-6"><small class="float-end" style="padding-left: 10px; padding-right: 10px;">Fazer Login</small></a>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="text" class="form-control" id="name" name="name" tabindex="-1" required autofocus>
                            </div>
                        </div>
                        <!-- Email Address -->
                        <div class="row">
                            <label class="col-md-6" for="email">&nbsp;&nbsp;Email</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control mask_email" id="email" name="email" tabindex="-1" required>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Password -->
                            <div class="col-md-6">
                                <label class="col-12" for="password">&nbsp;&nbsp;Senha</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" id="password" class="form-control" name="password" tabindex="0" required autocomplete="current-password">
                                </div>
                            </div>
                            <!-- Confirm Password -->
                            <div class="col-md-6">
                                <label class="col-12" for="password_confirmation">&nbsp;&nbsp;Confirma Senha</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" tabindex="0" required>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix row" style="position:absolute; bottom:20px; width:91%;">
                            <div class="col-6 col-md-6">
                                <a href="#" class="float-left" data-bs-toggle="modal" data-bs-target="#modal_informacao" tabindex="2"><i class="text-warning fas fa-question-circle"></i>&nbsp;<small class="text-black-50">Registrar</small></a>
                            </div>
                            <div class="col-6 col-md-6">
                                <button type="submit" class="btn btn-primary btn-sm text-white float-end" tabindex="1">Registrar</button>
                            </div>
                        </div>
                    </form>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_informacao" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Registrar</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Para Fazer o seu Registro, preencha os campos corretamente e clique no botão 'Registrar'.</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
