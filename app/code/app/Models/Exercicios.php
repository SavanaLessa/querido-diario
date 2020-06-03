<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Exercicios extends Eloquent
{
    protected $collection = 'exercicios';
    protected $connection = 'mongodb';
}
