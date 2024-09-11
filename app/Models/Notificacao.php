<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{
    use HasFactory;

    protected $table = "notificacao";

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'telefone',
        'n_processo',
        'data_processo',
        'user_id',
        'solicitacao1',
        'solicitacao2',
        'solicitacao3',
        'codigo_verificador',
        'n_acordo',
    ];
}
