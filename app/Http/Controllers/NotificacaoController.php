<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notificacao;
use App\Models\Mensagem;
use Auth;
use PDF;

class NotificacaoController extends Controller
{
   public function index()
   {
      $notificacoes = Notificacao::all();

      return view('pages.notificacao.index', compact('notificacoes'));
   }

   public function create()
   {
      $mensagens = Mensagem::all();
      // dd($mensagens[0]);

      return view('pages.notificacao.create',compact('mensagens'));
   }

   public function store(Request $request)
   {
      // dd($request->all());
      

      if($request->mensagem == null){

         for($i = 0; $i < count($request->nome); $i++)
            {
               $new_premium = Notificacao::create([
                'nome'                  => $request->nome[$i],
                'cpf'                   => $request->cpf[$i],
                'telefone'              => $request->telefone[$i],
                'user_id'               => Auth::user()->id,
                'n_processo'            => $request->n_processo[$i],
                'n_acordo'              => $request->n_acordo[$i],
                'codigo_verificador'    => $request->codigo_verificador[$i],
                'data_processo'         => date("d-m-Y", strtotime($request->data_processo[$i])),
                'solicitacao1'          => 'Apresentar originais e cópias legíveis dos boletos e comprovantes',
                'solicitacao2'          => 'de pagamento no prazo de 15 dias da(s) parcela(s) '.$request->numero_parcela,
                'solicitacao3'          => 'dos exercício(s) '.$request->exercicio.' do cadastro imobiliario '.$request->numero_cadastro,
             ]);
         }

      }else{
         $decode_mensagem = json_decode($request->mensagem);

         for($i = 0; $i < count($request->nome); $i++)
            {
             
               $new_premium = Notificacao::create([
                'nome'                  => $request->nome[$i],
                'cpf'                   => $request->cpf[$i],
                'telefone'              => $request->telefone[$i],
                'user_id'               => Auth::user()->id,
                'n_processo'            => $request->n_processo[$i],
                'n_acordo'              => $request->n_acordo[$i],
                'codigo_verificador'    => $request->codigo_verificador[$i],
                'data_processo'         => date("d-m-Y", strtotime($request->data_processo[$i])),
                'solicitacao1'          => $decode_mensagem->solicitacao1,
                'solicitacao2'          => $decode_mensagem->solicitacao2,
                'solicitacao3'          => $decode_mensagem->solicitacao3,
             ]);
         }
      }

      
        return redirect()->to('notificacao');
      // dd($request->all());
   }

   public function show($id)
   {
      $notificacao = Notificacao::find($id);

      return view('pages.notificacao.show', compact('notificacao'));
   }

   public function imprimir($id)
   {
  
      $notificacao = Notificacao::find($id);

      $data = [
         // 'notificacao' => $notificacao
         'nome'               => $notificacao->nome,
         'cpf'                => $notificacao->cpf,
         'telefone'           => $notificacao->telefone,
         'n_processo'         => $notificacao->n_processo,
         'data_processo'      => $notificacao->data_processo,
         'codigo_verificador' => $notificacao->codigo_verificador,
         'n_acordo'           => $notificacao->n_acordo,
         'solicitacao1'       => $notificacao->solicitacao1,
         'solicitacao2'       => $notificacao->solicitacao2,
         'solicitacao3'       => $notificacao->solicitacao3,
         'created_at'         => $notificacao->created_at,

      ];
      // dd($data["nome"]);
          
      $pdf = PDF::loadView('pages.notificacao.pdf', $data);
   
      return $pdf->download('notificacao.pdf');
   }
}
