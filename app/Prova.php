<?php

namespace Castelo;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Prova extends Model
{
    protected $fillable = ['disciplina', 'descricao', 'data'];
	protected $dates = ['data'];

	public function setDataAttribute($date)
	{
		$this->attributes['data'] = Carbon::createFromFormat('Y-m-d', $date);
	}
}
