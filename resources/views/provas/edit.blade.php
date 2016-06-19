@extends ('layouts.site')

@section('content')
	{!! Form::model($prova, ['route' => ['provas.update', $prova], 'method' => 'put']) !!}
    @include ('provas._form', [
		'title' => 'Editar prova',
		'date' => $prova->data,
		'submit_text' => 'Salvar'
	])
	{!! Form::close() !!}
@endsection
