<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Http\Requests\AtividadeRequest;

class AtividadesController extends Controller
{
    public function index()
    {
        $atividades = Atividade::all();

        return view('atividades.index', compact('atividades'));
    }

    public function create()
    {
        $disciplinas = collect(config('castelo.disciplinas'))->sort();
        $data['disciplinas'] = $disciplinas->combine($disciplinas);

        return view('atividades.create', $data);
    }

    public function store(AtividadeRequest $request)
    {
        Atividade::create($request->all());

        return redirect()->route('atividades.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
