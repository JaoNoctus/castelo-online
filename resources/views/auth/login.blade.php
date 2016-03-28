@extends('layouts.site')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1 class="panel-title">Login</h1>
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
            {!! Form::open(['route' => 'auth.login.post']) !!}
                {!! csrf_field() !!}
                <div class="form-group label-floating">
                    {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'autofocus' => TRUE]) !!}
                    <p class="help-block">ex: nome@provedor.com</p>
                </div>
                <div class="form-group label-floating">
                    {!! Form::label('password', 'Senha', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                    <p class="help-block">ex: 123456</p>
                </div>
                {!! link_to_route('password.email.get', 'Recuperar senha', [], ['class' => 'pull-left btn btn-primary']) !!}
                <div class="checkbox pull-right">
                    <label>{!! Form::checkbox('remember') !!} Lembrar</label>
                    {!! Form::submit('Acessar', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
