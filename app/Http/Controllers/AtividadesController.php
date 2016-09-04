<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Http\Requests\AtividadeRequest;
use Auth;
use Illuminate\Support\Facades\Input;

class AtividadesController extends Controller
{
    public function index()
    {
        switch (Input::get('list')) {
            case 'done':
                $atividades = Atividade::done(Auth::user()->id)->orderBy('entrega')->get();
                break;

            case 'pending':
                $atividades = Atividade::pending(Auth::user()->id)->orderBy('entrega')->get();
                break;

            default:
                $atividades = Atividade::orderBy('entrega')->get();
                break;
        }

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

    public function show(Atividade $atividade)
    {
        return view('atividades.show', compact('atividade'));
    }

    public function edit(Atividade $atividade)
    {
        $disciplinas = collect(config('castelo.disciplinas'))->sort();
        $data['disciplinas'] = $disciplinas->combine($disciplinas);
        $data['atividade'] = $atividade;

        return view('atividades.edit', $data);
    }

    public function update(AtividadeRequest $request, Atividade $atividade)
    {
        $atividade->update($request->all());

        return redirect()->route('atividades.index');
    }

    public function destroy(Atividade $atividade)
    {
        $atividade->delete();

        return redirect()->back();
    }

    public function done(Atividade $atividade)
    {
        $user = Auth::user();
        $atividade->feitas()->toggle($user);

        return redirect()->back();
    }
}
