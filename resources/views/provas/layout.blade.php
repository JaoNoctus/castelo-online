<?php
$disciplinas = array(
	'Português'	 => 'Português',
	'Matemática'	=> 'Matemática',
	'Física'		=> 'Física',
	'Química'	   => 'Química',
	'Biologia'	  => 'Biologia',
	'História'	  => 'História',
	'Geografia'	 => 'Geografia',
	'Religião'	  => 'Religião',
	'Filosofia'	 => 'Filosofia'
);
?>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h1 class="panel-title">{{ $layout['title'] }}</h1>
	</div>
	<div class="panel-body">
		{!! Form::open($layout['form']) !!}
			<div class="form-group">
				{!! Form::label('disciplina', 'Disciplina', ['class' => 'control-label']) !!}
				{!! Form::select('disciplina', $disciplinas, $layout['selected'], ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('data', 'Data', ['class' => 'control-label']) !!}
				{!! Form::date('data', $layout['data'], ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('descricao', 'Descrição', ['class' => 'control-label']) !!}
				{!! Form::textarea('descricao', $layout['descricao'], ['class' => 'form-control']) !!}
			</div>
			<div class="checkbox">
				{!! Form::submit('Salvar', ['class' => 'btn btn-primary'])!!}
			</div>
		{!! Form::close() !!}
	</div>
</div>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script> CKEDITOR.replace( 'descricao' ); </script>
