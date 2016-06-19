@extends ('layouts.site')

@section('content')
	{!! Form::open(['route' => 'provas.store']) !!}
    @include ('provas._form', [
		'title' => 'Adicionar prova',
		'date' => \Carbon\Carbon::now(),
		'submit_text' => 'Adicionar'
	])
	{!! Form::close() !!}
@endsection
