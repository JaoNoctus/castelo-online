<?php

namespace Castelo;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Castelo\Support\DateHelper;
use Castelo\Support\DateHelperBrazilOutput;

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

	public function getDateInSmartOutputAttribute()
	{
		return (new DateHelper($this->entrega))->output(new DateHelperBrazilOutput);
	}
}
