<?php

namespace Castelo;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $fillable = ['disciplina', 'descricao', 'entrega'];
    protected $dates = ['entrega'];

    /**
     * @param $date
     */
    public function setEntregaAttribute($date)
    {
        $this->attributes['entrega'] = Carbon::createFromFormat('Y-m-d', $date);
    }
}
