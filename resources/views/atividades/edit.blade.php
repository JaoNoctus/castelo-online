@extends ('layouts.site')

<?php
$layout['title']		= 'Editar atividade';
$layout['form'] 		= ['route' => ['atividades.update', $atividade->id], 'method' => 'put'];
$layout['entrega']		= $atividade->entrega;
$layout['descricao'] 	= $atividade->descricao;
$layout['selected'] 	= $atividade->disciplina;
?>

@section('content')
	@include ('atividades.layout')
@endsection
