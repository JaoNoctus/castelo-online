<?php

namespace Castelo;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Castelo\Support\DateHelper;
use Castelo\Support\DateHelperBrazilOutput;

class Prova extends Model
{
    protected $fillable = ['disciplina', 'descricao', 'data'];
    protected $dates = ['data'];

    public function setDataAttribute($date)
    {
        $this->attributes['data'] = Carbon::createFromFormat('Y-m-d', $date);
    }

	public function getDateInSmartOutputAttribute()
	{
		return (new DateHelper($this->data))->output(new DateHelperBrazilOutput);
	}
}
