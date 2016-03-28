@extends('layouts.site')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h1 class="panel-title">Você está prestes a definir uma nova senha</h1>
    </div>
    <div class="panel-body">
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ $error }}
                </div>
            @endforeach
        @endif
        {!! Form::open(['route' => 'password.reset.post']) !!}
            {!! csrf_field() !!}
            {!! Form::hidden('token', $token) !!}
            <div class="form-group label-floating">
                {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
                {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group label-floating">
                {!! Form::label('password', 'Nova senha', ['class' => 'control-label']) !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group label-floating">
                {!! Form::label('password_confirmation', 'Digite a senha novamente', ['class' => 'control-label']) !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            </div>
            {!! link_to_route('auth.login.get', 'Voltar para o login', [], ['class' => 'pull-left btn btn-primary']) !!}
            {!! Form::submit('Confirmar a nova senha', ['class' => 'pull-right btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection
