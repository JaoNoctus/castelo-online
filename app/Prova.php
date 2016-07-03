<?php

namespace Castelo;

use Carbon\Carbon;
use Castelo\Support\DateHelper;
use Castelo\Support\DateHelperBrazilOutput;
use Illuminate\Database\Eloquent\Model;

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
        return (new DateHelper($this->data))->output(new DateHelperBrazilOutput());
    }

    public function scopeIsActual($query)
    {
        return $query->where('data', '>=', Carbon::now()->subDay());
    }
}
