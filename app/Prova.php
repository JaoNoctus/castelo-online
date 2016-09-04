<?php

namespace App;

use App\Support\DateHelper;
use App\Support\DateHelperBrazilOutput;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Prova extends Model
{
    protected $fillable = ['disciplina', 'descricao', 'data'];
    protected $dates = ['data'];

    public function getDateInSmartOutputAttribute()
    {
        return (new DateHelper($this->data))->output(new DateHelperBrazilOutput());
    }

    public function scopeActualOnly($query)
    {
        return $query->where('data', '>=', Carbon::now()->subDay());
    }

    public function scopeOldOnly($query)
    {
        return $query->where('data', '<', Carbon::now()->subDay());
    }
}
