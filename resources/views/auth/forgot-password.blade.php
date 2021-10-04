<x-guest-layout>

    <div class="container">
        <div class="col-12 col-md-5 mx-auto" style="padding: 30px;">
            <div class="card" style="min-height: 550px; box-shadow: 0.4em 0.4em 1em 0.4em gray;">
                <div class="card-body" style="padding: 30px;">
                    <div class="text-center mb-5">
                        <img src="img/logo_bolacha.png" width="120">
                        <h4>Sistema de Administração e Controle</h4>
                        <h5 class="text-secondary">Esqueceu sua senha?</h5>
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-3" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-3" :errors="$errors" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="row">
                            <label class="col-md-6" for="email">&nbsp;&nbsp;Email</label>
                            <a href="{{ route('login') }}" class="text-secondary col-md-6"><small class="float-end" style="padding-left: 10px; padding-right: 10px;">Fazer Login</small></a>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control mask_email" id="email" name="email" tabindex="-1" required autofocus>
                            </div>
                        </div>
                        <div class="clearfix row" style="position:absolute; bottom:20px; width:91%;">
                            <div class="col-6 col-md-6">
                                <a href="#" class="float-left" data-bs-toggle="modal" data-bs-target="#modal_redefinir_senha"><i class="text-warning fas fa-question-circle"></i>&nbsp;<small class="text-black-50">Esqueceu sua senha?</small></a>
                            </div>
                            <div class="col-6 col-md-6">
                                <button type="submit" class="btn btn-primary btn-sm text-white float-end" tabindex="0">Link de redefinição de senha</button>
                            </div>
                        </div>
                    </form>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_redefinir_senha" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Esqueceu sua senha?</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Esqueceu sua senha? Sem problemas. É só nos informar o seu e-mail que nós enviaremos para você um link para redefinição de senha que irá permitir que você escolha uma nova senha.</p>
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
