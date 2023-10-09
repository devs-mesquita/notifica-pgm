<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagem;

class MensagemController extends Controller
{
    public function index()
    {
        $mensagens = Mensagem::all();

        return view('pages.mensagem.index', compact('mensagens'));
    }

    public function create()
    {
        return view('pages.mensagem.create');
    }

    public function store(Request $request)
    {
        $mensagem = new Mensagem;

        $mensagem->solicitacao1 = $request->solicitacao1;
        $mensagem->solicitacao2 = $request->solicitacao2;
        $mensagem->solicitacao3 = $request->solicitacao3;
        
        $mensagem->save();

        return redirect()->to('mensagem');

    }
}
