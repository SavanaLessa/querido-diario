<?php


namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Anotacoes extends Eloquent
{

    protected $collection = 'anotacoes';
    protected $connection = 'mongodb';

    protected $fillable = [
        'data_hora',
        'assunto',
        'user_id',
        'anotacao',
        'uuid'
    ];
}
