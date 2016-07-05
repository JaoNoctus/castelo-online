<?php

namespace Castelo\Http\Controllers;

use Artisan;
use Cache;
use Castelo\Http\Requests\ProvaRequest;
use Castelo\Prova;

class ProvasController extends Controller
{
    protected $home = 'provas.index';

    public function __construct()
    {
        $this->middleware('needsPermission:provas.create')->only('create');
    }

    public function index()
    {
        $data['provas'] = Cache::remember('provas', config('castelo.cache_time'), function () {
            return Prova::isActual()->orderBy('data')->get();
        });

        return view('provas.index', $data);
    }

    public function create()
    {
        return view('provas.create');
    }

    public function store(ProvaRequest $request)
    {
        Prova::create($request->all());

        Cache::forget('provas');

        Artisan::call('notify', [
            'title'   => 'PROVA CADASTRADA',
            'content' => 'Clique para ver',
            'url'     => 'https://castelo.noctus.org/provas',
        ]);

        return redirect()->route($this->home);
    }

    public function edit(Prova $prova)
    {
        return view('provas.edit', compact('prova'));
    }

    public function update(ProvaRequest $request, Prova $prova)
    {
        $prova->update($request->all());

        Cache::forget('provas');

        return redirect()->route($this->home);
    }

    public function destroy(Prova $prova)
    {
        $prova->delete();

        Cache::forget('provas');

        return redirect()->route($this->home);
    }
}
