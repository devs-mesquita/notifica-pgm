@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css"> 
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
                                    <h6 class="mb-0">Notificação</h6>
                                </div>
                                <div class="col-6 text-end">
                                    <a class="btn bg-gradient-dark mb-0" href="{{ url('notificacao/create')}}"> Nova Notificação</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                
                                <table id="myTable" class="display">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Telefone</th>
                                            <th>Data</th>
                                            <th>Processo</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($notificacoes as $notificacao)
                                            <tr>
                                                <td>{{$notificacao->nome}}</td>
                                                <td>{{$notificacao->telefone}}</td>
                                                <td>{{ date('d/m/Y', strtotime($notificacao->created_at)) }}</td>
                                                <td>{{$notificacao->n_processo}}</td>
                                                <td>
                                                    <a
                                                        id="btn_vizualiza_usuario"
                                                        {{-- class="btn btn-primary btn-xs action botao_acao btn_vizualiza"  --}}
                                                        href="{{ route('notificacao.show', ['notificacao' => $notificacao->id]) }}"
                                                        {{-- href="{{action('NotificacaoController@show', $notificacao->id)}}" --}}
                                                        title="Vizualizar Funcionario">  
                                                        <i class="fa fa-fw fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                    <a 
                                                        href="{{ action('App\Http\Controllers\NotificacaoController@imprimir', [$notificacao->id]) }}"
                                                        data-toggle="tooltip" data-placement="bottom" title="Imprimir Notificação">
                                                        <i class="fa fa-fw fa-print" aria-hidden="true"></i>	
                                                    </a> 
                                                </td>
                                            </tr>	 
                                        @endforeach
                                    </tbody>
                                </table>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{-- <script src="assets/js/jquery-3.7.1.min.js"></script> --}}
    <script src="assets/js/jquery.dataTables.min.js"></script>

    <script>
        let table = new DataTable('#myTable');
    </script>

@endpush
