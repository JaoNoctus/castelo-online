@extends('layouts.site')

@section('content')
	<div class="panel panel-default">
		<div class="panel-body text-center hidden-lg small">
			PARA VISUALIZAR, CLIQUE NA DISCIPLINA.
		</div>
	</div>

	<div class="panel panel-primary">
		<div class="panel-heading">
            <h1 class="panel-title">Provas</h1>
        </div>
		<div class="panel-body">
			<table class="table table-striped table-hover table-responsive">
				<thead>
					<tr>
						<th width="15%">Data</th>
						<th width="15%">Disciplina</th>
						<th class="visible-lg">Descrição</th>
						@if (Auth::check())
							<th class="visible-lg"></th>
						@endif
					</tr>
				</thead>
				<tbody>
					@foreach ($provas as $prova)
						<tr>
							<td>{{ $prova->data->format('d/m/Y') }}</td>
							<td>
								<a href="#" data-toggle="modal" data-target="#modal{{ $prova->id }}" class="hidden-lg">{{ $prova->disciplina }}</a>
								<span class="visible-lg">{{ $prova->disciplina }}</span>
							</td>
							<td class="visible-lg">{!! $prova->descricao !!}</td>
							@if (Auth::check())
								<td class="visible-lg text-right">
									@shield ('provas.edit')
										{!! link_to(route('provas.edit', ['id' => $prova->id]), 'Editar', ['class' => 'btn btn-sm btn-primary']) !!}
									@endshield
									@shield ('provas.destroy')
										{!! link_to(route('provas.destroy', ['id' => $prova->id]), 'Excluir', ['class' => 'btn btn-sm btn-primary']) !!}
									@endshield
							</td>
							@endif
						</tr>

						<div class="modal fade" id="modal{{ $prova->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Prova de {{ $prova->disciplina }}</h4>
									</div>
									<div class="modal-body">
										<b>Data:</b> {{ $prova->data->format('d/m/Y') }}
										<p>
											<hr />
											{!! $prova->descricao !!}
										</br/>
									</p>
								</div>
								@if (Auth::check())
									<div class="modal-footer">
										@shield ('provas.edit')
											{!! link_to(route('provas.edit', ['id' => $prova->id]), 'Editar', ['class' => 'btn btn-sm btn-primary']) !!}
										@endshield
										@shield ('provas.destroy')
											{!! link_to(route('provas.destroy', ['id' => $prova->id]), 'Excluir', ['class' => 'btn btn-sm btn-primary']) !!}
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
