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
                        <div class="btn-group pull-right">
                            <a href="{{ route('provas.create') }}" class="btn btn-xs btn-default">Adicionar</a>
                        </div>
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
                                        <th>Disciplina</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($provas as $prova)
                                        <tr>
                                            <td style="vertical-align: middle;">{{ $prova->dateInSmartOutput }}</td>
                                            <td style="vertical-align: middle;">{{ $prova->disciplina }}</td>
                                            <td style="vertical-align: middle;" class="text-right">
                                                <div class="btn-group">
                                                    <a class="btn btn-sm btn-default" href="{{ route('provas.show', $prova) }}">Visualizar</a>
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
