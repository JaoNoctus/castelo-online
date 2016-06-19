<div class="panel panel-primary">
	<div class="panel-heading">
		<h1 class="panel-title">{{ $title }}</h1>
	</div>
	<div class="panel-body">
			<div class="form-group">
				{!! Form::label('disciplina', 'Disciplina', ['class' => 'control-label']) !!}
				{!! Form::select('disciplina', $disciplinas, old('disciplinas'), ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('data', 'Data', ['class' => 'control-label']) !!}
				{!! Form::date('data', $date, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('descricao', 'Descrição', ['class' => 'control-label']) !!}
				{!! Form::textarea('descricao', old('descricao'), ['class' => 'form-control']) !!}
			</div>
			<div class="checkbox">
				{!! Form::submit($submit_text, ['class' => 'btn btn-primary'])!!}
			</div>
	</div>
</div>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script> CKEDITOR.replace( 'descricao' ); </script>
