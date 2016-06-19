<?php

namespace Castelo\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class DisciplinasComposer
{
    protected $disciplinas = [];

    public function __construct()
    {
        $disciplinas = config('disciplinas.disciplinas');
        $this->disciplinas = array_combine($disciplinas, $disciplinas);
    }

    public function compose(View $view)
    {
        $view->with('disciplinas', $this->disciplinas);
    }
}
