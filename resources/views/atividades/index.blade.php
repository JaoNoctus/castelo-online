@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-uppercase">
                        Filtros
                    </div>
                    <div class="list-group">
                        <a class="list-group-item" href="{{ route('atividades.index') }}">Tudo</a>
                        <a class="list-group-item" href="{{ route('atividades.index', ['list' => 'pending']) }}">Pendentes</a>
                        <a class="list-group-item" href="{{ route('atividades.index', ['list' => 'done']) }}">Concluídas</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading text-uppercase">
                        Atividades
                        @is('admin')
                            <div class="btn-group pull-right">
                                <a href="{{ route('atividades.create') }}" class="btn btn-xs btn-default">Adicionar</a>
                            </div>
                        @endis
                    </div>

                    <div class="panel-body">
                        @if ($atividades->isEmpty())
                            <div class="text-center">
                                <h3>Nenhuma atividade aqui.</h3>
                            </div>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="8%"> </th>
                                        <th width="20%">Entrega</th>
                                        <th>Disciplina</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($atividades as $atividade)
                                        <tr>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <a href="{{ route('atividades.done', [$atividade->id]) }}" class="{{ $atividade->feitas->contains(Auth::user()) ? 'text-success' : 'text-muted' }}">
                                                    <i class="fa fa-lg {{ $atividade->feitas->contains(Auth::user()) ? 'fa-check-circle' : 'fa-check-circle-o' }}"></i>
                                                </a>
                                            </td>
                                            <td style="vertical-align: middle;">{{ $atividade->dateInSmartOutput }}</td>
                                            <td style="vertical-align: middle;">{{ $atividade->disciplina }}</td>
                                            <td style="vertical-align: middle;" class="text-right">
                                                <div class="btn-group">
                                                    <a class="btn btn-sm btn-default" href="{{ route('atividades.show', $atividade) }}">Visualizar</a>
                                                    @is('admin')
                                                        <a class="btn btn-sm btn-default" data-toggle="dropdown" href="#">
                                                            <span class="fa fa-caret-down"></span>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="{{ route('atividades.edit', $atividade) }}">Editar</a></li>
                                                            <li>
                                                                <a href="{{ route('atividades.destroy', $atividade) }}"
                                                                    onclick="event.preventDefault();
                                                                             document.getElementById('destroy-form{{ $atividade->id }}').submit();">
                                                                    Excluir
                                                                </a>

                                                                {!! Form::open(['route' => ['atividades.destroy', $atividade], 'id' => 'destroy-form' . $atividade->id, 'method' => 'DELETE']) !!}
                                                                {!! Form::close() !!}
                                                            </li>
                                                        </ul>
                                                    @endis
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
