@extends('layouts.site')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1 class="panel-title">Recuperar senha</h1>
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
            {!! Form::open(['route' => 'password.email.post']) !!}
                {!! csrf_field() !!}
                <div class="form-group label-floating">
                    {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'autofocus' => TRUE]) !!}
                    <p class="help-block">ex: nome@provedor.com</p>
                </div>
                {!! link_to_route('auth.login.get', 'Voltar para o login', [], ['class' => 'pull-left btn btn-primary']) !!}
                {!! Form::submit('Enviar código de recuperação', ['class' => 'pull-right btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
