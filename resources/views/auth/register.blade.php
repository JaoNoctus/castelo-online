@extends('layouts.site')

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h1 class="panel-title">Cadastro</h1>
	</div>
	<div class="panel-body">
		{!! Form::open(['route' => 'auth.register.post']) !!}
		    <div class="form-group label-floating">
				{!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
				{!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
		    </div>
		    <div class="form-group label-floating">
		        {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
				{!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
		    </div>
		    <div class="form-group label-floating">
		        {!! Form::label('password', 'Senha', ['class' => 'control-label']) !!}
				{!! Form::password('password', ['class' => 'form-control']) !!}
		    </div>
		    <div class="form-group label-floating">
				{!! Form::label('password_confirmation', 'Digite a senha novamente', ['class' => 'control-label']) !!}
				{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
		    </div>
			{!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
	</div>
</div>
@endsection
