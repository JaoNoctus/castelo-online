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
                        <a class="list-group-item" href="{{ route('provas.index') }}">Atuais</a>
                        <a class="list-group-item" href="{{ route('provas.index', ['list' => 'old']) }}">Antigas</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading text-uppercase">
                        Provas
                        @is('admin')
                            <div class="btn-group pull-right">
                                <a href="{{ route('provas.create') }}" class="btn btn-xs btn-default">Adicionar</a>
                            </div>
                        @endis
                    </div>

                    <div class="panel-body">
                        @if ($provas->isEmpty())
                            <div class="text-center">
                                <h3>Nenhuma prova aqui.</h3>
                            </div>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="20%">Data</th>
                                        <th width="20%">Disciplina</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($provas as $prova)
                                        <tr>
                                            <td style="vertical-align: middle;">{{ $prova->dateInSmartOutput }}</td>
                                            <td style="vertical-align: middle;">{{ $prova->disciplina }}</td>
                                            <td style="vertical-align: middle;">
                                                <span class="hidden-xs pull-left">
                                                    {!! $prova->descricao !!}
                                                </span>
                                                <div class="btn-group pull-right">
                                                    <a class="btn btn-sm btn-default visible-xs" href="{{ route('provas.show', $prova) }}">Visualizar</a>
                                                    @is('admin')
                                                        <a class="btn btn-sm btn-default" data-toggle="dropdown" href="#">
                                                            <span class="fa fa-caret-down"></span>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="{{ route('provas.edit', $prova) }}">Editar</a></li>
                                                            <li>
                                                                <a href="{{ route('provas.destroy', $prova) }}"
                                                                    onclick="event.preventDefault();
                                                                             document.getElementById('destroy-form{{ $prova->id }}').submit();">
                                                                    Excluir
                                                                </a>

                                                                {!! Form::open(['route' => ['provas.destroy', $prova], 'id' => 'destroy-form' . $prova->id, 'method' => 'DELETE']) !!}
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
