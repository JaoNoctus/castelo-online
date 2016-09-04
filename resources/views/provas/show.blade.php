@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-uppercase">
                        {{ $prova->disciplina }}
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="{{ route('provas.index') }}" class="btn btn-xs btn-default text-uppercase">Voltar</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <span class="pull-right text-center">
                            <b>DATA</b><br />
                            <span class="badge">{{ $prova->data->format('d/m/Y') }}</span>
                        </span>
                        {!! $prova->descricao !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
