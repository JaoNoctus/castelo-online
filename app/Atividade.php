<?php

namespace Castelo;

use Carbon\Carbon;
use Castelo\Support\DateHelper;
use Castelo\Support\DateHelperBrazilOutput;
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

    public function getDateInSmartOutputAttribute()
    {
        return (new DateHelper($this->entrega))->output(new DateHelperBrazilOutput());
    }

	public function scopeIsActual($query)
	{
		return $query->where('entrega', '>=', Carbon::now()->subDay());
	}

	public function scopeIsOld($query)
	{
		return $query->where('entrega', '<=', Carbon::now()->subDay());
	}

	public function scopeForTomorrow($query)
	{
		return $query->where('entrega', '>=', Carbon::parse('tomorrow')->startOfDay())
					 ->where('entrega', '<=', Carbon::parse('tomorrow')->endOfDay());
	}
}
