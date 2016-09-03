@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Atividades
                        <div class="btn-group pull-right">
                            <a href="{{ route('atividades.create') }}" class="btn btn-xs btn-default">Adicionar</a>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if ($atividades->isEmpty())
                            <div class="text-center">
                                <h3>Nenhuma atividade pendente.</h3>
                            </div>
                        @else
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%"> </th>
                                        <th width="16%">Entrega</th>
                                        <th width="20%">Disciplina</th>
                                        <th>Descrição</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($atividades as $atividade)
                                        <tr>
                                            <td>
                                                <a href="#" class="text-muted">
                                                    <i class="fa fa-check-circle-o"></i>
                                                </a>
                                            </td>
                                            <td>{{ $atividade->entrega->format('d/m/Y') }}</td>
                                            <td>{{ $atividade->disciplina }}</td>
                                            <td>{!! $atividade->descricao !!}</td>
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
