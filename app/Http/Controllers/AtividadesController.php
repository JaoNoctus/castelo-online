<?php

namespace Castelo\Http\Controllers;

use Artisan;
use Cache;
use Castelo\Atividade;
use Castelo\Http\Requests\AtividadeRequest;

class AtividadesController extends Controller
{
    public function __construct()
    {
        $this->middleware('needsPermission:atividades.create')->only('create');
        $this->middleware('needsPermission:atividades.edit')->only('edit', 'update');
        $this->middleware('needsPermission:atividades.destroy')->only('destroy');
    }

    public function index()
    {
        $data['atividades'] = Cache::remember('atividades', config('castelo.cache_time'), function () {
            return Atividade::/*IsActual()->*/orderBy('entrega')->get();
        });

        return view('atividades.index', $data);
    }

    public function create()
    {
        return view('atividades.create');
    }

    public function store(AtividadeRequest $request)
    {
        Atividade::create($request->all());

        Cache::forget('atividades');

		Artisan::call('notify', [
			'title' => 'ATIVIDADE CADASTRADA',
			'content' => 'Clique para ver',
			'url' => 'https://castelo.noctus.org/atividades'
		]);

        return redirect()->route('atividades.index')->with('status', 'Atividade adicionada com sucesso!');
    }

    public function edit(Atividade $atividade)
    {
        return view('atividades.edit', compact('atividade'));
    }

    public function update(AtividadeRequest $request, Atividade $atividade)
    {
        $atividade->update($request->all());

        Cache::forget('atividades');

        return redirect()->route('atividades.index');
    }

    public function destroy(Atividade $atividade)
    {
        $atividade->delete();

        Cache::forget('atividades');

        return redirect()->route('atividades.index');
    }
}
