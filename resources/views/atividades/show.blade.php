@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-uppercase">
                        {{ $atividade->disciplina }}
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="{{ route('atividades.index') }}" class="btn btn-xs btn-default text-uppercase">Voltar</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <span class="pull-right text-center">
                            <b>ENTREGA</b><br />
                            <span class="badge">{{ $atividade->dateInSmartOutput }}</span>
                        </span>
                        {!! $atividade->descricao !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
