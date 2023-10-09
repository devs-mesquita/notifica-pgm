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
                                <h6 class="mb-0">Nova Notificação</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <form action="{{url('/notificacao')}}"  method="POST"> 
                                {{ csrf_field() }}

                                <button type="button" class="btn btn-primary clonador">Adicionar</button>

                                <div class="card-body pt-4 p-3">
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                            <div class="d-flex flex-column">
                            
                                                <div class="form-group row dados">
                                                
                                                <div class="form-group col-md-3 col-sm-3 col-xs-12">
                                                    <label class="control-label" >Nome</label>
                                                    <input type="text" id="nome" name="nome[]"  class="form-control" placeholder="Nome" minlength="4" maxlength="100" required >	
                                                </div>
                    
                                                <div class="form-group col-md-3 col-sm-3 col-xs-12">
                                                    <label class="control-label" >CPF</label>
                                                    <input onblur="validarCPF(this)" type="text" id="cpf" name="cpf[]"  class="form-control" placeholder="CPF" minlength="11" maxlength="11" required >	
                                                </div>
                                    
                                                <div class="form-group col-md-3 col-sm-3 col-xs-12">
                                                    <label class="control-label" for="telefone">Celular</label>
                                                    <input type="text" id="telefone" name="telefone[]" placeholder="(21)XXXXX-XXXX" maxlength="14" class="form-control"  required>
                                                </div>
                                                
                                                <div class="form-group col-md-3 col-sm-3 col-xs-12">
                                                    <label class="control-label" for="n_processo">Numero de Processo</label>
                                                    <input type="text" id="n_processo" name="n_processo[]" placeholder="Numero de Processo" maxlength="14" class="form-control" required>
                                                </div>
                                                
                                                <div class="form-group col-md-3 col-sm-3 col-xs-12">
                                                    <label class="control-label" for="data_processo">Data do Processo</label>
                                                    <input type="date" id="data_processo" name="data_processo[]" placeholder="Data do Processo" maxlength="14" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-3 col-sm-3 col-xs-12">
                                                    <label class="control-label" for="codigo_verificador">Codigo Verificador</label>
                                                    <input type="text" id="codigo_verificador" name="codigo_verificador[]" placeholder="Codigo Verificador" maxlength="14" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-3 col-sm-3 col-xs-12">
                                                    <label class="control-label" for="n_acordo">Nº Acordo</label>
                                                    <input type="text" id="n_acordo" name="n_acordo[]" placeholder="Numero do Acordo" maxlength="14" class="form-control" required>
                                                </div>
                                                </div>
                                            </div>
                                        </li>
                                        <div class="novadiv"></div>
                                    </ul>
                                </div>
                            
                        
                                        
                                <div class="row">
                                    @foreach ($mensagens as $mensagem)
                                    <div class="col-xl-3 col-sm-6 mb-xl-4 mb-4">
                                        <div class="card">
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <input type="radio" name="mensagem" id="mensagem" value="{{$mensagem}}" required>
                                                        <p class="card-text">{{$mensagem->solicitacao1}} {{$mensagem->solicitacao2}} {{$mensagem->solicitacao3}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                        
                            
                            <div class="clearfix"></div>
                                <div class="ln_solid"> </div>
                                    <div class="footer text-right"> 
                                        <button hidden type="submit"></button>
                                        <button id="btn_cancelar" class="botoes-acao btn btn-round btn-warning" >
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
    $('.clonador').click(function(e){
            e.preventDefault();
      

            $('.novadiv').append('<li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg dados"><div class="d-flex flex-column"><div class="form-group row dados"><div class="form-group col-md-3 col-sm-3 col-xs-12"><label class="control-label" >Nome</label><input type="text" id="nome" name="nome[]"  class="form-control" placeholder="Nome" minlength="4" maxlength="100" required ></div><div class="form-group col-md-3 col-sm-3 col-xs-12"><label class="control-label" >CPF</label><input onblur="validarCPF(this)" type="text" id="cpf" name="cpf[]"  class="form-control" placeholder="CPF" minlength="11" maxlength="11" required ></div><div class="form-group col-md-3 col-sm-3 col-xs-12"><label class="control-label" for="telefone">Celular</label><input type="text" id="telefone" name="telefone[]" placeholder="(21)XXXXX-XXXX" maxlength="14" class="form-control"  required></div><div class="form-group col-md-3 col-sm-3 col-xs-12"><label class="control-label" for="n_processo">Numero de Processo</label><input type="text" id="n_processo" name="n_processo[]" placeholder="Numero de Processo" maxlength="14" class="form-control" required></div><div class="form-group col-md-3 col-sm-3 col-xs-12"><label class="control-label" for="data_processo">Data do Processo</label><input type="date" id="data_processo" name="data_processo[]" placeholder="Data do Processo" maxlength="14" class="form-control" required></div><div class="form-group col-md-3 col-sm-3 col-xs-12"><label class="control-label" for="codigo_verificador">Codigo Verificador</label><input type="text" id="codigo_verificador" name="codigo_verificador[]" placeholder="Codigo Verificador" maxlength="14" class="form-control" required></div><div class="form-group col-md-3 col-sm-3 col-xs-12"><label class="control-label" for="n_acordo">Nº Acordo</label><input type="text" id="n_acordo" name="n_acordo[]" placeholder="Numero do Acordo" maxlength="14" class="form-control" required></div></div></div><div class="ms-auto text-end"><button class="btn btn-link text-danger text-gradient px-3 mb-0 btn_remove"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>Remover</button></div></li>')
            
            VMasker($('.dados').last().find('#telefone')).maskPattern("(99)99999-9999");
            
      

            // $('.dados:first').clone().appendTo($('.novadiv'));
            // $('.dados').last().find('input[type="text"]').val('');


            $('#checkboxvalue').attr('required', 'required');
    });
    
    $('form').on('click', '.btn_remove', function(e){
        e.preventDefault();
        if ($('.dados').length > 1) {
           $(this).parents('.dados').remove();
        } 
    });

    $(function(){
		$('body').submit(function(event){
			if ($(this).hasClass('btn_salvar')) {
				event.preventDefault();
			}
				else {
            if(Array.from(document.querySelectorAll('#cpf')).some(input => input.style.background === 'red')){
                  
            alert('CPF INVALIDO');
                  event.preventDefault();
               }else{
                  $(this).find(':submit').html('<i class="fa fa-spinner fa-spin"></i>');
                  $(this).addClass('btn_salvar');
               }
				}
			});
			$("#btn_cancelar").click(function(){
		      event.preventDefault();
            window.location.href="{{ URL::route('notificacao.index') }}";
	    });
    });

    function validarCPF(inputCPF){
            var Soma = 0
            var Resto

            var strCPF = inputCPF.value 
            
            console.log(strCPF)
            if (strCPF.length !== 11)
            return inputCPF.style.background = "red";
            
            if ([
               '00000000000',
               '11111111111',
               '22222222222',
               '33333333333',
               '44444444444',
               '55555555555',
               '66666666666',
               '77777777777',
               '88888888888',
               '99999999999',
               ].indexOf(strCPF) !== -1)
               return inputCPF.style.background = "red";

            for (i=1; i<=9; i++)
               Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);

            Resto = (Soma * 10) % 11

            if ((Resto == 10) || (Resto == 11)) 
               Resto = 0

            if (Resto != parseInt(strCPF.substring(9, 10)) )
            return inputCPF.style.background = "red";

            Soma = 0

            for (i = 1; i <= 10; i++)
               Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i)

            Resto = (Soma * 10) % 11

            if ((Resto == 10) || (Resto == 11)) 
               Resto = 0

            if (Resto != parseInt(strCPF.substring(10, 11) ) )
              return inputCPF.style.background = "red";

            return inputCPF.style.background = "white";
                  
    }
</script>

@endpush
