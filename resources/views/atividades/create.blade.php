@extends ('layouts.site')

@section('content')
	{!! Form::open(['route' => 'atividades.store']) !!}
    @include ('atividades._form', [
		'title' => 'Adicionar atividade',
		'date' => \Carbon\Carbon::now(),
		'submit_text' => 'Adicionar'
	])
	{!! Form::close() !!}
@endsection
