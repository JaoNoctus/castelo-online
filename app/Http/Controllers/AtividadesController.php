<?php

namespace Castelo\Http\Controllers;

use Castelo\Atividade;
use Castelo\Http\Requests\AtividadeRequest;

class AtividadesController extends Controller
{
    public function index()
    {
        $data['atividades'] = Atividade::orderBy('entrega')->get();

        return view('atividades.index', $data);
    }

    public function create()
    {
        return view('atividades.create');
    }

    public function store(AtividadeRequest $request)
    {
        Atividade::create($request->all());

        return redirect()->route('atividades.index');
    }

    public function edit(Atividade $atividade)
    {
        return view('atividades.edit', compact('atividade'));
    }

    public function update(AtividadeRequest $request, Atividade $atividade)
    {
        $atividade->update($request->all());

        return redirect()->route('atividades.index');
    }

	public function destroy(Atividade $atividade)
    {
        $atividade->delete();

        return redirect()->route('atividades.index');
    }
}
