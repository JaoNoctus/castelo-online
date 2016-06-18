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

        return redirect()->route('atividades');
    }

    public function destroy($id)
    {
        Atividade::find($id)->delete();

        return redirect()->route('atividades');
    }

    public function edit($id)
    {
        $atividade = Atividade::find($id);

        return view('atividades.edit', compact('atividade'));
    }

    public function update(AtividadeRequest $request, $id)
    {
        $input = $request->all();

        Atividade::find($id)->update($input);

        return redirect()->route('atividades');
    }
}
