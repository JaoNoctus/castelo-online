@extends ('layouts.site')

<?php
$layout['title']		= 'Editar prova';
$layout['form']			= ['route' => ['provas.update', $prova->id], 'method' => 'put'];
$layout['data']			= $prova->data;
$layout['descricao']	= $prova->descricao;
$layout['selected']		= $prova->disciplina;
?>

@section('content')
    @include ('provas.layout')
@endsection
