<?php

namespace App\Http\Controllers;

use App\Prova;
use App\Http\Requests\ProvaRequest;
use Illuminate\Support\Facades\Input;

class ProvasController extends Controller
{
    public function index()
    {
        switch (Input::get('list')) {
            case 'old':
                $provas = Prova::oldOnly()->orderBy('data')->get();
                break;

            default:
                $provas = Prova::actualOnly()->orderBy('data')->get();
                break;
        }

        $data['provas'] = $provas;

        return view('provas.index', $data);
    }

    public function create()
    {
        $disciplinas = collect(config('castelo.disciplinas'))->sort();
        $data['disciplinas'] = $disciplinas->combine($disciplinas);

        return view('provas.create', $data);
    }

    public function store(ProvaRequest $request)
    {
        Prova::create($request->all());

        return redirect()->route('provas.index');
    }

    public function show(Prova $prova)
    {
        return view('provas.show', compact('prova'));
    }

    public function edit(Prova $prova)
    {
        $disciplinas = collect(config('castelo.disciplinas'))->sort();
        $data['disciplinas'] = $disciplinas->combine($disciplinas);
        $data['prova'] = $prova;

        return view('provas.edit', $data);
    }

    public function update(ProvaRequest $request, Prova $prova)
    {
        $prova->update($request->all());

        return redirect()->route('provas.index');
    }

    public function destroy(Prova $prova)
    {
        $prova->delete();

        return redirect()->back();
    }
}
