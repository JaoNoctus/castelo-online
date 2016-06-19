@extends ('layouts.site')

@section('content')
	{!! Form::model($atividade, ['route' => ['atividades.update', $atividade], 'method' => 'put']) !!}
    @include ('atividades._form', [
		'title' => 'Adicionar atividade',
		'date' => $atividade->entrega,
		'submit_text' => 'Salvar'
	])
	{!! Form::close() !!}
@endsection
