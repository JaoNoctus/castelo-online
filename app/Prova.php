<?php

namespace Castelo;

use Illuminate\Database\Eloquent\Model;

class Prova extends Model
{
    protected $fillable = ['disciplina', 'descricao', 'data'];
}
