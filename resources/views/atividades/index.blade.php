@extends('layouts.site')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body text-center hidden-lg small">
            PARA VISUALIZAR, CLIQUE NA DISCIPLINA.
        </div>
    </div>

    <div class="panel panel-primary">
		<div class="panel-heading">
            <h1 class="panel-title">Atividades</h1>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th width="15%">Entrega</th>
                        <th width="15%">Disciplina</th>
                        <th class="visible-lg">Descrição</th>
                        @if (Auth::check())
                            <th class="visible-lg"></th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($atividades as $atividade)
                        <?php $entrega 	= new DateTime($atividade->entrega); ?>
                        <tr>
                            <td>{{ $entrega->format('d/m/Y') }}</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#modal{{ $atividade->id }}" class="hidden-lg">{{ $atividade->disciplina }}</a>
                                <span class="visible-lg">{{ $atividade->disciplina }}</span>
                            </td>
                            <td class="visible-lg">{!! $atividade->descricao !!}</td>
                            @if (Auth::check())
                                <td class="visible-lg text-right">
                                    @shield ('atividades.edit')
                                        {!! link_to(route('atividades.edit', ['id' => $atividade->id]), 'Editar', ['class' => 'btn btn-sm btn-primary']) !!}
                                    @endshield
                                    @shield ('atividades.destroy')
                                        {!! link_to(route('atividades.destroy', ['id' => $atividade->id]), 'Excluir', ['class' => 'btn btn-sm btn-primary']) !!}
                                    @endshield
                            </td>
                            @endif
                        </tr>

                        <div class="modal fade" id="modal{{ $atividade->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Atividade de {{ $atividade->disciplina }}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <b>Entrega:</b> {{ $entrega->format('d/m/Y') }}
                                        <p>
                                            <hr />
                                            {!! $atividade->descricao !!}
                                        </br/>
                                    </p>
                                </div>
                                @if (Auth::check())
                                    <div class="modal-footer">
                                        @shield ('atividades.edit')
                                            {!! link_to(route('atividades.edit', ['id' => $atividade->id]), 'Editar', ['class' => 'btn btn-sm btn-primary']) !!}
                                        @endshield
                                        @shield ('atividades.destroy')
                                            {!! link_to(route('atividades.destroy', ['id' => $atividade->id]), 'Excluir', ['class' => 'btn btn-sm btn-primary']) !!}
                                        @endshield
                                    </div>
                                @endif
                            </div>
                        </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
