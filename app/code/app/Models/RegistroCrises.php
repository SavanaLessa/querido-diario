<?php


namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class RegistroCrises extends Eloquent
{
    protected $collection = 'registro_crises';
    protected $connection = 'mongodb';

    protected $fillable = [
        'user_id',
        'data_hora',
        'duracao',
        'sintomas',
        'assunto',
        'motivos',
        'descricao',
        'uuid'
    ];

}
