<x-guest-layout>

    <div class="container">
        <div class="col-12 col-md-5 mx-auto" style="padding: 30px;">
            <div class="card" style="min-height: 550px; box-shadow: 0.4em 0.4em 1em 0.4em gray;">
                <div class="card-body" style="padding: 30px;">
                    <div class="text-center mb-5">
                        <img src="img/logo_bolacha.png" width="120">
                        <h4>Sistema de Administração e Controle</h4>
                        <h5 class="text-secondary">Confirmar Senha</h5>
                    </div>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-3" :errors="$errors" />

                    <!-- Form -->
                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <!-- Password -->
                        <div class="row">
                            <label class="col-12" for="password">&nbsp;&nbsp;Senha</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" id="password" class="form-control" name="password" tabindex="0" required autocomplete="current-password">
                            </div>
                        </div>
                        <div class="clearfix row" style="position:absolute; bottom:20px; width:91%;">
                            <div class="col-6 col-md-6">
                                <a href="#" class="float-left" data-bs-toggle="modal" data-bs-target="#modal_informacao" tabindex="2"><i class="text-warning fas fa-question-circle"></i>&nbsp;<small class="text-black-50">Confirmar Senha</small></a>
                            </div>
                            <div class="col-6 col-md-6">
                                <button type="submit" class="btn btn-primary btn-sm text-white float-end" tabindex="1">Confirmar</button>
                            </div>
                        </div>
                    </form>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_informacao" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Confirmar Senha</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Esta é uma área segura do aplicativo. Por favor, confirme sua senha antes de continuar.</p>
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
