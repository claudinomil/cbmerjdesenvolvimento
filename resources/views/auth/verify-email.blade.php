<x-guest-layout>

    <div class="container">
        <div class="col-12 col-md-5 mx-auto" style="padding: 30px;">
            <div class="card" style="min-height: 550px; box-shadow: 0.4em 0.4em 1em 0.4em gray;">
                <div class="card-body" style="padding: 30px;">
                    <div class="text-center mb-5">
                        <img src="img/logo_bolacha.png" width="120">
                        <h4>Sistema de Administração e Controle</h4>
                        <h5 class="text-secondary">Verificar E-mail</h5>
                    </div>

                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success" role="alert">
                            {{ __('Um novo link de verificação foi enviado para o endereço de e-mail fornecido durante o registro.') }}
                        </div>
                    @endif

                    <!-- Form 1 -->
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div class="clearfix row" style="position:absolute; bottom:150px; width:91%;">
                            <div class="col-12 col-md-12">
                                <button type="submit" class="btn btn-info btn-sm text-white text-center col-md-12" tabindex="1">Reenviar email de verificação</button>
                            </div>
                        </div>
                    </form>

                    <!-- Form 2 -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <div class="clearfix row" style="position:absolute; bottom:20px; width:91%;">
                            <div class="col-6 col-md-6">
                                <a href="#" class="float-left" data-bs-toggle="modal" data-bs-target="#modal_informacao" tabindex="2"><i class="text-warning fas fa-question-circle"></i>&nbsp;<small class="text-black-50">Verificar E-mail</small></a>
                            </div>
                            <div class="col-6 col-md-6">
                                <button type="submit" class="btn btn-primary btn-sm text-white float-end" tabindex="1">Fazer Logout</button>
                            </div>
                        </div>
                    </form>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_informacao" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Verificar E-mail</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Obrigado por inscrever-se! Antes de começar, você poderia verificar seu endereço de e-mail clicando no link que acabamos de enviar para você? Se você não recebeu o e-mail, teremos o prazer de enviar outro.</p>
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
