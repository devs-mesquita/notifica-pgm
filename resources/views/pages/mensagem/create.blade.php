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
                                <h6 class="mb-0">Nova Mensagem</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <form action="{{url('/mensagem')}}"  method="POST"> 
                                {{ csrf_field() }}
                                <div class="card-body pt-4 p-3">
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12 row dados">
                                            
                                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                    <label class="control-label" for="solicitacao1">Mensagem 1</label>
                                                    <input type="text" id="solicitacao1" name="solicitacao1" placeholder="Mensagem 1" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                    <label class="control-label" for="solicitacao2">Mensagem 2</label>
                                                    <input type="text" id="solicitacao2" name="solicitacao2" placeholder="Mensagem 2" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                    <label class="control-label" for="solicitacao3">Mensagem 3</label>
                                                    <input type="text" id="solicitacao3" name="solicitacao3" placeholder="Mensagem 3" class="form-control" required>
                                                </div>

                                            </div>
                                        </li>
                                        <div class="novadiv"></div>
                                    </ul>
                                </div>
                            
                            <div class="clearfix"></div>
                                <div class="ln_solid"> </div>
                                    <div class="footer text-right"> 
                                        <button id="btn_cancelar" class="botoes-acao btn btn-round btn-primary" >
                                            <span class="icone-botoes-acao mdi mdi-backburger"></span>   
                                            <span class="texto-botoes-acao"> CANCELAR </span>
                                            <div class="ripple-container"></div>
                                        </button>
                                
                                        <button type="submit" id="btn_salvar" class="botoes-acao btn btn-round btn-success ">
                                            <span class="icone-botoes-acao mdi mdi-send"></span>
                                            <span class="texto-botoes-acao"> SALVAR </span>
                                            <div class="ripple-container"></div>
                                        </button>
                                    </div>

                        </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

       

@endsection
@push('js')

<script>
    $(function(){
		$('body').submit(function(event){
			if ($(this).hasClass('btn_salvar')) {
				event.preventDefault();
			}
			});
			$("#btn_cancelar").click(function(){
		      event.preventDefault();
            window.location.href="{{ URL::route('mensagem.index') }}";
	    });
    });
    
</script>

@endpush
