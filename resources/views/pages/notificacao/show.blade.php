@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
@include('layouts.navbars.auth.topnav')
   
<div class="container-fluid px-2">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 mb-lg-0 mb-4">
                <div class="card mt-4">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Notificação Detalhada de: {{$notificacao->nome}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 col-md-4"><span><b>Nome:</b> {{$notificacao->nome}}</span></div>
                            <div class="col-12 col-md-4"><span><b>CPF: </b> {{$notificacao->cpf}}</span></div>
                            <div class="col-12 col-md-4"><span><b>Celular: </b> {{$notificacao->telefone}}</span></div>
                          </div>
                            <br>
                          <div class="row">
                            <div class="col-12 col-md-4"><span><b>Data do Processo:</b> {{$notificacao->data_processo}}</span></div>
                            <div class="col-12 col-md-4"><span><b>Numero de Processo:</b> {{$notificacao->n_processo}}</span></div>
                          </div>
                            <br>
                          <div class="row">
                            <div class="col-12 col-md-4"><span><b>Codigo Verificador:</b>{{$notificacao->codigo_verificador}}</span></div>
                            <div class="col-12 col-md-4"><span><b>Numero do Acordo:</b> {{$notificacao->n_acordo}}</span></div>
                          </div>
                            <br>
                          <div class="row">
                            <div class="col-12 col-md-12"><span><b>Mensagem: </b> {{$notificacao->solicitacao1}} {{$notificacao->solicitacao2}} {{$notificacao->solicitacao3}}</span></div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
       

@endsection
@push('js')


@endpush
