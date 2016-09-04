<?php

namespace App;

use App\Support\DateHelper;
use App\Support\DateHelperBrazilOutput;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $fillable = ['disciplina', 'descricao', 'entrega'];
    protected $dates = ['entrega'];

    public function getDateInSmartOutputAttribute()
    {
        return (new DateHelper($this->entrega))->output(new DateHelperBrazilOutput());
    }

    public function feitas()
    {
        return $this->belongsToMany(User::class, 'atividades_feitas');
    }

    public function scopeDone($query, $id)
    {
        return $query->whereHas('feitas', function ($q) use ($id) {
            $q->where('user_id', $id);
        });
    }

    public function scopePending($query, $id)
    {
        return $query->whereDoesntHave('feitas', function ($q) use ($id) {
            $q->where('user_id', $id);
        });
    }
}
