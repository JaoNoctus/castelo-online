<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Atividade;
use App\Http\Requests\AtividadeRequest;
use Auth;

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
		$input = $request->all();
		Atividade::create($input);

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
